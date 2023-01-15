<?php

namespace App\Http\Controllers;

use App\Models\PhongBan;
use Illuminate\Http\Request;

class PhongBanController extends Controller
{
    public function index() {
        return view ('admin.phongbans.index',[
            'phongbans' => PhongBan::paginate(8),
            'title' => 'QLHC | PhongBan'
        ]);
    }

    public function show(PhongBan $phongBan) {
        abort(404);
    }

    public function store(Request $request) {
        $formFields = $request -> validate([
            'tenPhong' => 'required',
            'vietTat' => 'required',
            'ghiChu' => 'required'
        ]);

        PhongBan::create($formFields);
        toastr()->success('Thêm phòng '.$request['tenPhong'].' thành công!');
        return redirect('/admin/phongban');
    }

    public function edit(PhongBan $phongBan) {
        return view('admin.phongbans.index',[
            'phongbans' => PhongBan::paginate(8),
            'phongban' => $phongBan,
            'title' => 'QLHC | PhongBan'
        ]);
    }

    public function update(Request $request, PhongBan $phongBan) {
        $formFields = $request -> validate([
            'tenPhong' => 'required',
            'vietTat' => 'required',
            'ghiChu' => 'required'
        ]);

        $phongBan->update($formFields);
        toastr()->success('Cập nhật phòng ban thành công!');
        return back();
    }

    public function destroy(PhongBan $phongBan) {
        $phongBan->delete();
        toastr()->success('Xóa phòng '.$phongBan['tenPhong'].' thành công!');
        return redirect('/admin/phongban');
    }
}
