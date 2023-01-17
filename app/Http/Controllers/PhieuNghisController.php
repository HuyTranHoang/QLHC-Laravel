<?php


//TODO Phân Quyền Admin - User, Admin chỉ dc duyệt phiếu trong cùng phòng ban, chỉ hiện phiếu của bản thân
namespace App\Http\Controllers;

use App\Models\PhieuNghi;
use App\Models\PhongBan;
use App\Models\TongNgayNghi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if(Auth::user()->tongngaynghi->first() == null) {
            toastr()->error('Bạn chưa có ngày phép trong database!!');
            return back();
        }

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

        $tongngaynghi = TongNgayNghi::where('maNV',Auth::guard('nhanvien')->id())->first();
        $soNgayConLai = $tongngaynghi->tongSoNgay - $tongngaynghi->soNgayHienTai;

        if($request->tongSoNgay > $soNgayConLai && $request->loaiPhep != 4) {
            toastr()->error('Số ngày nghỉ vượt quá số ngày còn lại ('.$soNgayConLai.' ngày)');
            return back();
        }


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
        $formFields = $request -> validate([
            'tongSoNgay' => 'required',
            'tuBuoi' => 'required',
            'denBuoi' => 'required',
            'tuNgay' => 'required',
            'denNgay' => 'required',
            'loaiPhep' => 'required'
        ]);

        $formFields['maNV'] = Auth::guard('nhanvien')->id();
        $formFields['ngayDuyet'] = now();
        $formFields['ghiChu'] = 'Chưa có';
        $formFields['nguoiDuyet'] = Auth::guard('nhanvien')->id();

        if (isset($request->reject)){
            $formFields['trangThai'] = -1;
        } else {
            $formFields['trangThai'] = 1;
            //Nên làm thành 1-1 hoặc where theo năm thay vì first()
            $soNgayHienTai = $phieunghi->nhanvien->tongngaynghi->first()->soNgayHienTai + $request->tongSoNgay;
            DB::table('tong_ngay_nghis')->where('maNV',$phieunghi->maNV)->update(['soNgayHienTai' => $soNgayHienTai]);
        }
        $phieunghi->update($formFields);
        toastr()->success('Duyệt phiếu thành công!');
        return redirect(route('phieunghi.index'));
    }

    public function destroy(PhieuNghi $phieunghi)
    {
    }
}
