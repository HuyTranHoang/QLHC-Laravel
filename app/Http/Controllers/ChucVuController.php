<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function index() {
        return view ('admin.chucvus.index',[
            'chucvus' => ChucVu::paginate(8),
            'title' => 'QLHC | ChucVu'
        ]);
    }

    public function show(ChucVu $chucVu) {
        abort(404);
    }

    public function store(Request $request) {
        $formFields = $request -> validate([
            'chucVu' => 'required'
        ]);

        ChucVu::create($formFields);
        toastr()->success('Thêm chức vụ <b>'.$request['chucVu'].'</b> thành công!');
        return redirect('/admin/chucvu');
    }

    public function edit(ChucVu $chucVu) {
        return view('admin.chucvus.index',[
            'chucvus' => ChucVu::paginate(8),
            'chucvu' => $chucVu,
            'title' => 'QLHC | ChucVu'
        ]);
    }

    public function update(Request $request, ChucVu $chucVu) {
        $formFields = $request -> validate([
            'chucVu' => 'required',
        ]);

        $chucVu->update($formFields);
        toastr()->success('Cập nhật chức vụ <b>'.$request->chucVu.'</b> thành công!');
        return back();
    }

    public function destroy(ChucVu $chucVu) {
        $chucVu->delete();
        toastr()->warning('Xóa chức vụ <b> '.$chucVu['chucVu'].'</b> thành công!','Xóa');
        return redirect('/admin/chucvu');
    }
}
