<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use App\Models\NhanVien;
use App\Models\PhongBan;
use Illuminate\Http\Request;

class NhanViensController extends Controller
{
    public function index()
    {
        return view ('admin.nhanviens.index',[
            'nhanviens' => NhanVien::paginate(8),
            'title' => 'QLHC | NhanVien'
        ]);
    }

    public function create()
    {
        return view ('admin.nhanviens.create',[
            'phongbans' => PhongBan::all(),
            'chucvus' => ChucVu::all(),
            'title' => 'QLHC | NhanVien'
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request -> validate([
            'tenNV' => 'required',
            'userName' => 'required',
            'password' => 'required',
            'gioiTinh' => 'required',
            'ngaySinh' => 'required',
            'maPhong' => 'required',
            'maCV' => 'required',
        ]);

        if($request->hasFile('hinh')) {
            $formFields['hinh'] = $request->file('hinh')->store('hinhs','public');
        } else {
            $formFields['hinh'] = 'hinhs/default.jpg';
        }

        NhanVien::create($formFields);
        toastr()->success('Thêm nhân viên <b>'.$request['tenNV'].'</b> thành công!');
        return redirect('/admin/nhanvien');
    }

    public function show(NhanVien $nhanVien)
    {
        return view('admin.nhanviens.show',[
            'nhanvien' => $nhanVien,
            'title' => 'QLHC | NhanVien-Detail'
        ]);
    }

    public function edit(NhanVien $nhanVien)
    {
        return view('admin.nhanviens.edit',[
            'phongbans' => PhongBan::all(),
            'chucvus' => ChucVu::all(),
            'nhanvien' => $nhanVien,
            'title' => 'QLHC | NhanVien-Edit'
        ]);
    }

    public function update(Request $request, NhanVien $nhanVien)
    {
        $formFields = $request -> validate([
            'tenNV' => 'required',
            'userName' => 'required',
            'password' => 'required',
            'gioiTinh' => 'required',
            'ngaySinh' => 'required',
            'maPhong' => 'required',
            'maCV' => 'required',
        ]);

        if($request->hasFile('hinh')) {
            $formFields['hinh'] = $request->file('hinh')->store('hinhs','public');
        }

        $nhanVien->update($formFields);
        toastr()->success('Cập nhật nhân viên <b>'.$request['tenNV'].'</b> thành công!');
        return back();
    }

    public function destroy(NhanVien $nhanVien)
    {
        $nhanVien->delete();
        toastr()->warning('Xóa nhân viên <b>'.$nhanVien['tenNV'].'</b> thành công!','Xóa');
        return redirect('/admin/nhanvien');
    }
}
