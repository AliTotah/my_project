<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // تأكد من أن المستخدم يملك صلاحية "admin" قبل الوصول إلى هذه الصفحة
    public function __construct()
    {
        $this->middleware('role:admin');  // تأكد من أن المستخدم لديه دور "admin"
    }

    // الدالة التي تعرض الصفحة الرئيسية للمشرفين
    public function index()
    {
        return view('admin.index'); // تأكد من أنك أعددت الـ view
    }
}

