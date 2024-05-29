<?php

namespace App;

class MsgApp
{
    const CUSTOMER = 'Customer';
    const LINK_CUSTOMER = 'customer';
    const SUPER_ADMIN = 'Super Admin';
    const ADMIN = 'Admin';
    const USER = 'User';
    const DASHBOARD = 'dashboard';
    const Customer = 'Customer';
    const BUYER = 'Buyer';
    const SUPPLIER = 'Supplier';
    const SALE = 'Sale';
    const PRODUCT = 'Product';
    const PURCHASE = 'Purchase';
    const REQUEST = 'Request';
    const FEATURE = 'Feature';
    const LINK_SUPER = 'superadmin';
    const LINK_ADMIN = 'admin';
    const LINK_USER = 'user';
    const SETTING = 'setting';
    const REQUESTS = 'requests';
    const PACKAGE = 'package';
    const PROFILE = 'profile';
    const DESIGNATION = 'Designation';
    const DEPARTMENT = 'Department';
    const Organization = 'Organization Category';
    const Organizations = 'Organization';
    const ROLE = 'Role';
    const GROUP = 'Group';
    const CATEGORY  = 'Category';
    const TYPE = 'Type';
    const TASK = 'Task';
    const REPORT = 'Report';
    const PACKAGE_BUSINESS = 'Business Buyer';
    const PACKAGE_SUPPLIER = 'Business Supplier';
    const BUSINESS_CUM_SUP = 'Business Buyer Cum Supplier';
    const NON_BUSINESS = 'Non Business Individual Customer';

    const UNAUTHORIZE_SMS = 'Unauthorized action.';

    /** Validation Start */
    const VAL_STRING = 'required|between:3,50|regex:/^[&a-zA-Z\s]+$/';
    const VAL_STRING_UNIQUE = 'required|between:2,50|regex:/^[&a-zA-Z\s]+$/|unique:tableName,name,NULL,id,user_id,userId';
    const VAL_STR_UNQ = 'required|between:2,50|regex:/^[&a-zA-Z\s]+$/|unique:tableName';
    const VAL_STRING_NUM = 'required|between:3,50|regex:/^[&a-zA-Z0-9\s]+$/';
    const VAL_STRING_NUMBER = 'required|regex:/^[&a-zA-Z0-9\s]+$/';

    const VAL_EMAIL = 'required|between:3,50|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/|unique:tableName';
    const VAL_MOBILE = 'required|regex:/^[6-9][0-9]{9}$/|unique:tableName';
    const VAL_MOB = 'required|regex:/^[6-9][0-9]{9}$/';
    const EMAIL = 'required|between:3,50|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/';

    const VAL_GST = 'required|regex:/^[0-9]{2}[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}[1-9A-Za-z]{3}$/|unique:tableName';
    const VAL_PAN = 'required|regex:/^[A-Za-z]{5}[0-9]{4}[A-Za-z]$/';
    const VAL_ADDRESS = 'required|regex:/^[#.0-9a-zA-Z\s,-\/]+$/';
    const VAL_PIN = 'required|regex:/^[1-9][0-9]{5}$/';
    const REQ_EXISTS = 'required|exists:tableName,id';
    const FILE_IMF_PDF = 'nullable|mimes:jpeg,png,jpg,pdf|max:10240';
    const REQ_ACC_NO = 'required|regex:/^[0-9]{9,18}$/';
    const REQ_IFSC = 'required|regex:/^[A-Za-z]{4}\d{7}$/';
    const REQ_ARRAY = 'required|array';
    const TABLE_NAME = 'tableName';
    const VAL_GST_RATE =  'required|between:0,99.99';
    const ALPHA_NUM = 'required|alpha_num';
    const VAL_0_TO_99 = 'required|between:0,99.99';
    const DESCRIPTION = 'required'; 

    const FILE_PATH = 'upload/';
    const NUMERIC = 'required|numeric';
    const DATE_FORMATE_VALIDATE = 'date_format:m/d/Y';
    /** Validation End */
    /** Database */
    const USERS = 'users';
    const CITY = 'cities';
    const STATE = 'states';

    const SUCCESS_ADDED = 'Record Added Successfully';
    const SUCCESS_UPD = 'Record Updated Successfully';
    const SUCCESS_DEL = 'Record Deleted Successfully';
    const NOT_ALLOW = 'Request Not Allow';
    const INV_REQ = 'Invalid Request';
    /** Form Key */
    const NAME = 'name';
    const B_NAME = 'business_name';

    const ARE_YOU_SURE = 'Are you sure?';
    /** URL And Form Action */
    const BUYER_INDEX = 'buyers.index';
    const SALE_INDEX = 'sales.index';

    const USER_TYPE = '[{"key":1,"val":"REQUESTER"},{"key":2,"val":"APPROVER"},{"key":3,"val":"PROCESSOR"},{"key":4,"val":"MANAGER"},{"key":5,"val":"ADMINISTRATOR"}]';

    const USE_MSG = 'Can not delete as it\'s in use.';
    const PATH_GROUP = '/setting/requests/group';
    const PATH_DES = '/setting/designation';
    const PATH_DEP = '/setting/department';
    const PATH_USR = '/users';

    const REQ = 'required';
    const UNIQUE = 'unique';
    const EXIST = 'exists';
    const REGEX = 'regex';
    const BETWEEN = 'between';
    const MIMES = 'mimes';
    const DATE_FORMATE = 'date_format';

    const REQ_MSG = ':attribute is required.';
    const UNIQUE_MSG = ':attribute already exists.';
    const EXIST_MSG = ':attribute is not exists.';
    const REGEX_MSG = ':attribute is invalid.';
    const BETWEEN_MSG = ':attribute must be between :min to :max.';
    const USER_VAL = ',user_id,';
    const MIMES_MSG = ':attribute must be a file of type :mimes';
    const DATE_FORMATE_MSG = ':attribute is invalid formate.';
    /** Form Validation and Key */
    const EMP_ID = 'employee_id';
    const SUP_ID = 'employee_id';

    const EMP_ID_VAL = 'Employee id';
    const DEP_ID = 'dep_id';
    const DEP = 'Department';
    const DES_ID = 'des_id';
    const DES_VAL = 'Designation';
    const ADV_AMOUNT = 'adv_amount';
    const ADV_AMOUNT2 = 'adv_amount2';
    const TEX_VALUE = 'tax_value';
    const PURPOSE_TRIP = 'purpose_trip';
    const TRAVEL_DUR = 'travel_duration';
    const TRAVEL_TYPE = 'travel_type';
    const Bill_NO = 'bill_no';
    const BILL_PERIOD ='bill_period';
    const DUE_DATE ='due_date';
    const BILL_DATE  = 'bill_date';
    const PAY_AMT = 'pay_amount';
    const PO_NO = 'po_no';
    const PRO_DUR = 'pro_duration';
    const PO_DATE = 'po_date';
    const BILL_NAME = 'bill_name';
    const ITEM_DEC = 'item_desc';
    const DEL_ADD = 'del_date_add';
    const TERM_DEL = 'term_delivery';
    const ADV_PAY = 'adv_paid';
    const CON_DETAIL = 'contact_det';
    const TDS_APP = 'tds_app';
    const INV_NO = 'inv_no';
    const NAME_ADD = 'name_add';
    const PAN = 'pan';
    const PAN_EMP = 'pan_emp';
    const SIGN_EMP = 'sig_ded';
    const CIN = 'cin';
    const BIN = 'bin';
    const PERIOD_FROM_TO = 'period_ft';
    const DATE = 'dated';
    const ADDRESS = 'address';
    const SUBJECT = 'subject';
    const DEC = 'description';
    const QTY = 'qty';
    const PRICE = 'price';
    const TAX = 'tax';
    const INV_AMT = 'inv_amount';
    const TDS = 'tds';
    const AC_NO = 'account_no';
    const BILL_TO = 'bill_to';
    const MOBILE = 'mobile';
    const INV_MONTH = 'inv_month';
    const Nature_RENT = 'nature_rent';
    const AMOUNT_RENT = 'amount_rent';
    const COMP_ADD = 'comp_add';
    const REC_NAME = 'rec_name';
    const JOIN_liv_Date = 'join_liv_date';
    const BANK_NAME = 'bank';
    const STATEMENT = 'stmt_to';
    const CHEQUE = 'chq_req';
    const WID = 'withdrawal';
    const DEPOSIT = 'deposit';
    const CLOSE_BAL = 'close_bal';
    const NARRATION = 'narration';
    const EMP_NAME = 'emp_name';
    const WAGE = 'wages';
    const WORK_DAY = 'work_day';
    const OT_HR = 'ot_other';
    const MEDICARE = 'medicare';
    const INSURANCE = 'insurance';
    const GROSS_PAY = 'gross_pay';
    const Sale = 'sales';
    const OpnBal = 'opn_bal';
    const purchase = 'purchases';
    const MONTH = 'months';
    const PER_EMP = 'per_emp';
    const CON_EMP = 'con_emp';
    const JOIN = 'join';
    const RESIGN = 'resigned';
    const WORK_FORCE = 'workforce';



    const REASON = 'reasons';
    const REPAYMENT = 'repayment';
    const RECEIVED = 'received';
    const SALARY = 'salaries';
    const ADV_AMT = 'Advance amount';
    const DES = 'destination';
    const DATE_TRL = 'date_travel';
    const DATE_ADV = 'date_adv';
    const INVOICE_DATE = 'inv_date';
    const INVOICE_VAL = 'inv_value';
    const NET_PAY = 'net_pay';
    const EVENT = 'event_act';
    const VERIFY = 'verifier';
    const COINS = 'coins';
    const NOTES = 'notes';
    const CASH_PAID = 'cash_paid';
    const CASH_REC = 'cash_rec';
    const BAL = 'balance';
    const SIGNATURE = 'signature';
    const COMP_NAME = 'comp_name';
    const SALARY_PAY = 'salary_pay';
    const BANK_DET = 'bank_det';
    const DOJ = 'doj';
    const PF_NO = 'pf_no';
    const LOP_DAY = 'lop_dat';
    const GROSS_EARN = 'gross_earn';

    

    const DATE_REPAY = 'repay_date';
    const Nature_EXP = 'nature_exp';
    const Nature_ADV = 'nature_adv';

    const APPROVED = 'approved';
    const GST = 'gst';
    const GST_RATE= 'gst_rate';


    const APPROVER = 'approver';
    const DATE_TRL_VAL = 'Dates of travel';
    const DATE_TTN = 'date_return';
    const DATE_TTN_VAL = 'Date of Return';
    const PUR_TRL = 'pur_travel';
    const PUR_TRL_VAL = 'Purpose of travel';
    const CON_DET = 'contact_det';
    const CON_DET_VAL = 'Contact Details';
    const EMAIL_ID = 'email_id';
    const EMAIL_VAL = 'E-mail id';
    const EXPENSE = 'expenses';
    const EXPENSE_VAL = 'Types of expenses';
    const INVALID_MESSAGE = ':attribute is invalid.';
    
    
}
