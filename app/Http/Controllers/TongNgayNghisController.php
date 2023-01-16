<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use App\Models\PhongBan;
use App\Models\TongNgayNghi;
use Illuminate\Http\Request;

class TongNgayNghisController extends Controller
{
    public function index()
    {
        return view ('admin.tongngaynghis.index',[
            'tongngaynghis' => TongNgayNghi::paginate(8),
            'title' => 'QLHC | NgayPhep'
        ]);
    }

    public function create()
    {
        return view ('admin.tongngaynghis.create',[
            'tongngaynghis' => TongNgayNghi::paginate(8),
            'phongbans' => PhongBan::all(),
            'nhanviens' => NhanVien::all(),
            'title' => 'QLHC | NgayPhep-Create'
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request -> validate([
            'maNV' => 'required',
            'nam' => 'required',
            'tongSoNgay' => 'required'
        ]);

        $formFields['soNgayHienTai'] = 0;
        $formFields['ghiChu'] = 'Chưa có';

        TongNgayNghi::create($formFields);
        toastr()->success('Thêm mới ngày phép thành công!');
        return redirect('/admin/ngayphep');
    }

    public function show(TongNgayNghi $ngayphep)
    {
        abort('404');
    }

    public function edit(TongNgayNghi $ngayphep)
    {
        return view ('admin.tongngaynghis.edit',[
            'phongbans' => PhongBan::all(),
            'nhanviens' => NhanVien::all(),
            'tongngaynghi' => $ngayphep,
            'title' => 'QLHC | NgayPhep-Edit'
        ]);
    }

    public function update(Request $request, TongNgayNghi $ngayphep)
    {
        $formFields = $request -> validate([
            'maNV' => 'required',
            'nam' => 'required',
            'tongSoNgay' => 'required'
        ]);

        $formFields['soNgayHienTai'] = $ngayphep->soNgayHienTai;
        $formFields['ghiChu'] = $ngayphep->ghiChu;

        $ngayphep->update($formFields);
        toastr()->success('Cập nhật ngày phép thành công!');
        return back();
    }

    public function destroy(TongNgayNghi $ngayphep)
    {
        $ngayphep->delete();
        toastr()->warning('Xóa ngày nghỉ thành công!','Xóa');
        return redirect(route('ngayphep.index'));
    }
}
