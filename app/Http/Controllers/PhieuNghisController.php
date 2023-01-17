<?php

namespace App\Http\Controllers;

use App\Models\PhieuNghi;
use App\Models\PhongBan;
use App\Models\TongNgayNghi;
use Auth;
use Illuminate\Http\Request;

class PhieuNghisController extends Controller
{
    public function index()
    {
        return view ('admin.phieunghis.index',[
            'phieunghis' => PhieuNghi::paginate(8),
            'title' => 'QLHC | PhieuNghi'
        ]);
    }

    public function create()
    {
        return view ('admin.phieunghis.create',[
            'phongbans' => PhongBan::all(),
            'tongngaynghi' => TongNgayNghi::where('maNV',Auth::guard('nhanvien')->id())->first(),
            'title' => 'QLHC | PhieuNghi-Create'
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request -> validate([
            'tongSoNgay' => 'required',
            'tuBuoi' => 'required',
            'denBuoi' => 'required',
            'tuNgay' => 'required',
            'denNgay' => 'required',
            'loaiPhep' => 'required'
        ]);

        $formFields['maNV'] = Auth::guard('nhanvien')->id();
        $formFields['trangThai'] = 0;
        $formFields['ngayDuyet'] = now();
        $formFields['ghiChu'] = 'Chưa có';


        PhieuNghi::create($formFields);
        toastr()->success('Tạo phiếu thành công!');
        return redirect(route('phieunghi.index'));
    }

    public function show(PhieuNghi $phieunghi)
    {

    }

    public function edit(PhieuNghi $phieunghi)
    {
        return view ('admin.phieunghis.edit',[
            'phieunghi' => $phieunghi,
            'title' => 'QLHC | PhieuNghi-Detail'
        ]);
    }

    public function update(Request $request, PhieuNghi $phieunghi)
    {
    }

    public function destroy(PhieuNghi $phieunghi)
    {
    }
}
