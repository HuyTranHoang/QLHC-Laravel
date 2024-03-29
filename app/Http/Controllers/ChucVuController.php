<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkadmin');
    }
    public function index() {
        return view ('admin.chucvus.index',[
            'chucvus' => ChucVu::paginate(8),
            'title' => 'QLHC | ChucVu'
        ]);
    }

    public function show(ChucVu $chucvu) {
        abort(404);
    }

    public function store(Request $request) {
        $formFields = $request -> validate([
            'chucVu' => 'required'
        ]);

        ChucVu::create($formFields);
        toastr()->success('Thêm chức vụ <b>'.$request['chucVu'].'</b> thành công!');
        return redirect(route('chucvu.index'));
    }

    public function edit(ChucVu $chucvu) {
        return view('admin.chucvus.index',[
            'chucvus' => ChucVu::paginate(8),
            'chucvu' => $chucvu,
            'title' => 'QLHC | ChucVu'
        ]);
    }

    public function update(Request $request, ChucVu $chucvu) {
        $formFields = $request -> validate([
            'chucVu' => 'required',
        ]);

        $chucvu->update($formFields);
        toastr()->success('Cập nhật chức vụ <b>'.$request->chucVu.'</b> thành công!');
        return back();
    }

    public function destroy(ChucVu $chucvu) {
        $chucvu->delete();
        toastr()->warning('Xóa chức vụ <b> '.$chucvu['chucVu'].'</b> thành công!','Xóa');
        return redirect(route('chucvu.index'));
    }
}
