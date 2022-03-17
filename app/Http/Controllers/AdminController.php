<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if (!empty($result)) {
            return view('admin.dashboard');
        } else {
            echo 'Sai tài khoản';
        }
    }
}
