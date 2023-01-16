<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use App\Models\NhanVien;
use App\Models\PhongBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NhanViensController extends Controller
{

    public function login() {
        return view('login');
    }

    public function checklogin(Request $request)
    {

        $nhanViens = NhanVien::all();

        foreach ($nhanViens as $nhanVien) {
            if ($nhanVien->userName == $request -> userName && $nhanVien->password == $request->password) {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }
        }

        toastr()->error('Đăng nhập thất bại');
        return redirect('/');
    }

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

    public function show(NhanVien $nhanvien)
    {
        return view('admin.nhanviens.show',[
            'nhanvien' => $nhanvien,
            'title' => 'QLHC | NhanVien-Detail'
        ]);
    }

    public function edit(NhanVien $nhanvien)
    {
        return view('admin.nhanviens.edit',[
            'phongbans' => PhongBan::all(),
            'chucvus' => ChucVu::all(),
            'nhanvien' => $nhanvien,
            'title' => 'QLHC | NhanVien-Edit'
        ]);
    }

    public function update(Request $request, NhanVien $nhanvien)
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

        $nhanvien->update($formFields);
        toastr()->success('Cập nhật nhân viên <b>'.$request['tenNV'].'</b> thành công!');
        return back();
    }

    public function destroy(NhanVien $nhanvien)
    {
        $nhanvien->delete();
        toastr()->warning('Xóa nhân viên <b>'.$nhanvien['tenNV'].'</b> thành công!','Xóa');
        return redirect('/admin/nhanvien');
    }
}
