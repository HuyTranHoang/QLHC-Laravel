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

    public function show(PhongBan $phongban) {
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

//        return redirect('/admin/phongban') -> with('message','Thêm phòng ban thành công!');
        return redirect('/admin/phongban');
    }

    public function edit(PhongBan $phongban) {
        return view('admin.phongbans.index',[
            'phongbans' => PhongBan::paginate(8),
            'phongban' => $phongban,
            'title' => 'QLHC | PhongBan'
        ]);
    }

    public function update(Request $request, PhongBan $phongban) {
        $formFields = $request -> validate([
            'tenPhong' => 'required',
            'vietTat' => 'required',
            'ghiChu' => 'required'
        ]);

        $phongban->update($formFields);

        toastr()->success('Cập nhật phòng ban thành công!');
//        return back() -> with('message','Cập nhật phòng ban thành công!');
        return back();
    }

    public function destroy(PhongBan $phongban) {
        $phongban->delete();
        toastr()->success('Xóa phòng '.$phongban['tenPhong'].' thành công!');
//        return redirect('/admin/phongban') -> with('message','Xóa phòng ban thành công!');
        return redirect('/admin/phongban');
    }
}
