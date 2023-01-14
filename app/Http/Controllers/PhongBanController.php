<?php

namespace App\Http\Controllers;

use App\Models\PhongBan;
use Illuminate\Http\Request;

class PhongBanController extends Controller
{
    public function index() {
        return view ('admin.phongbans.index',[
           'phongbans' => PhongBan::paginate(8)
        ]);
    }

    public function show(PhongBan $phongBan) {
        return view('admin.phongbans.show',[
           'phongban' => $phongBan
        ]);
    }
    public function store(Request $request) {
        $formFields = $request -> validate([
            'tenPhong' => 'required',
            'vietTat' => 'required',
            'ghiChu' => 'required'
        ]);

        PhongBan::create($formFields);

        return redirect('/admin/phongban') -> with('message','Thêm phòng ban thành công!');
    }

    public function edit(PhongBan $phongBan) {
        return view('admin.phongbans.index',[
            'phongbans' => PhongBan::paginate(8),
            'phongban' => $phongBan
        ]);
    }
}
