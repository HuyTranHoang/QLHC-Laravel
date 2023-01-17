<?php

namespace App\Http\Controllers;

use App\Models\PhongBan;
use Illuminate\Http\Request;

class PhongBanController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkadmin');
    }

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
        toastr()->success('Thêm phòng <b>'.$request['tenPhong'].'</b> thành công!');
        return redirect(route('phongban.index'));
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
        toastr()->success('Cập nhật phòng ban <b>'.$request->tenPhong.'</b> thành công!');
        return back();
    }

    public function destroy(PhongBan $phongban) {
        $phongban->delete();
        toastr()->warning('Xóa phòng <b>'.$phongban['tenPhong'].'</b> thành công!','Xóa');
        return redirect(route('phongban.index'));
    }
}
