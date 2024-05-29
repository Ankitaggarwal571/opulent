<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;

use Image;
class CommonController extends Controller
{
    public function uploadFile(Request $request, $fileName, $path)
    {
        $imageName = '';
        if ($request->hasFile($fileName)) :
            $image = $request->file($fileName);
            $fileType = request()->$fileName->getClientOriginalExtension();
            $imageName = random_int(1000000, 9999999) . '-' . time() . '.' . $fileType;
            $destinationPath = public_path($path);
            // if ($fileType == 'JPG' || $fileType == 'jpg' || $fileType == 'PNG' || $fileType == 'png') {
            //     $img = Image::make($image->getRealPath());
            //     $img->resize(800, 800, function ($constraint) {
            //         $constraint->aspectRatio();
            //     })->save($destinationPath . '/' . $imageName);
            // }else {
                request()->$fileName->move($destinationPath, $imageName);
            // }
            $imageName = $path. '/'. $imageName;
        endif;
        return $imageName;
    }

    public function getData(Request $request)
    {
        $pincode = $request->input('zip');
        $response = Http::get('https://api.postalpincode.in/pincode/'.$pincode);
        $result = $response->json();
    
     if(isset($result[0]['PostOffice'][0])) {
        $arr_data['state'] = $result[0]['PostOffice'][0]['State'];
        $arr_data['block'] = $result[0]['PostOffice'][0]['Block'];
        // Return the array as JSON
        return response()->json($arr_data);
    } else {
        return response()->json(['error' => 'No']);
    }
    
    }
}
