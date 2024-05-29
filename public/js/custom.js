
$(function() {
   
    if ($('.organizationCat-dataTable').length > 0) {
        var table = $('.organizationCat-dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/admin/organizationCat",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    }
    if ($('.organization-dataTable').length > 0) {
        var table = $('.organization-dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/admin/organizations",
            columns: [
                { data: 'o_name', name: 'o_name' },
                { data: 'organization_cat', name: 'organization_cat'},
                { data: 'o_mobile', name: 'o_mobile' },
                { data: 'o_email', name: 'o_email' },
                { data: 'o_pan_no', name: 'o_pan_no' },
                { data: 'auth_name', name: 'auth_name' },
                { data: 'auth_email', name: 'auth_email' },
                { data: 'p_mobile', name: 'p_mobile' },
                { data: 'pan_no', name: 'pan_no' },
                { data: 'zip', name: 'zip' },
                { data: 'city', name: 'city' },
                { data: 'state', name: 'state' },
                { data: 'gst_in', name: 'gst_in' },
                { data: 'aadhar', name: 'aadhar' },
                { data: 'upload_o_pan', name: 'upload_o_pan' ,
                render: function(data, type, full, meta) {
                    return "<img src=\"" + data + "\" height=\"50\"/>";
                }
                },
                { data: 'upload_gst_in', name: 'upload_gst_in',
                render: function(data, type, full, meta) {
                    return "<img src=\"" + data + "\" height=\"50\"/>";
                }
                },
                { data: 'upload_Aadhar', name: 'upload_Aadhar',
                render: function(data, type, full, meta) {
                    return "<img src=\"" + data + "\" height=\"50\"/>";
                }
                },
                { data: 'upload_personal_pan', name: 'upload_personal_pan',
                render: function(data, type, full, meta) {
                    return "<img src=\"" + data + "\" height=\"50\"/>";
                }
                },
                { data: 'status', name: 'status' },
                
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    }
});





