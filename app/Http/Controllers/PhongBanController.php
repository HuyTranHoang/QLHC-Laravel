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

    public function show(PhongBan $phongban) {
        return view('admin.phongbans.show',[
           'phongban' => $phongban
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

    public function edit(PhongBan $phongban) {
        return view('admin.phongbans.index',[
            'phongbans' => PhongBan::paginate(8),
            'phongban' => $phongban
        ]);
    }

    public function update(Request $request, PhongBan $phongban) {
        $formFields = $request -> validate([
            'tenPhong' => 'required',
            'vietTat' => 'required',
            'ghiChu' => 'required'
        ]);

        $phongban->update($formFields);

        return back() -> with('message','Cập nhật phòng ban thành công!');
    }

    public function destroy(PhongBan $phongban) {
        $phongban->delete();
        return redirect('/admin/phongban') -> with('message','Xóa phòng ban thành công!');

    }
}
