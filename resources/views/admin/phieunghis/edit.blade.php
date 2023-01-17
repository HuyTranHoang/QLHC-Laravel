<x-layout :title="$title">
    <div class="text-center mt-3">
        <h3>DUYỆT MỚI PHIẾU</h3>
        <hr>
        <form method="POST" action="index.php?act=taophieu&q=confirm" class="">
            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tenNV" class="col-2 col-form-label offset-2">Tên nhân viên</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="tenNV" name="tenNV"
                           placeholder="Tên nhân viên..." value="{{$phieunghi->nhanvien->tenNV}}">
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="maPhong" class="col-2 col-form-label offset-2">Phòng ban</label>
                <div class="col">
                    <select class="form-select shadow-sm w-25" name="maPhong" id="maPhong">
                        <option value="{{$phieunghi->nhanvien->maPhong}}">{{$phieunghi->nhanvien->phongban->tenPhong}}</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tongSoNgay" class="col-2 col-form-label offset-2">Tổng số ngày nghỉ</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="tongSoNgay" name="tongSoNgay"
                           placeholder="Tổng số ngày..." value="{{$phieunghi->tongSoNgay}}">
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tuNgay" class="col-2 col-form-label offset-2">Ngày bắt đầu</label>
                <div class="col">
                    <input type="date" class="form-control shadow-sm" id="tuNgay" name="tuNgay"
                           placeholder="Ngày bắt đầu..." value="{{$phieunghi->tuNgay}}">
                </div>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="tuBuoi" id="tuBuoi">
                        <option value="{{$phieunghi->tuBuoi}}">{{getBuoi($phieunghi->tuBuoi)}}</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="denNgay" class="col-2 col-form-label offset-2">Ngày kết thúc</label>
                <div class="col">
                    <input type="date" class="form-control shadow-sm" id="denNgay" name="denNgay"
                           placeholder="Ngày kết thúc..." value="{{$phieunghi->denNgay}}">
                </div>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="denBuoi" id="denBuoi">
                        <option value="{{$phieunghi->denBuoi}}">{{getBuoi($phieunghi->denBuoi)}}</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="loaiPhep" class="col-2 col-form-label offset-2">Loại phép sử dụng</label>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="loaiPhep" id="loaiPhep">
                        <option value="{{$phieunghi->loaiPhep}}">{{getLoaiPhep($phieunghi->loaiPhep)}}</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 col-6">
                <input type="submit" class="btn d-inline-block text-light btn-sakura" name="accept" value="Duyệt">
                <input type="submit" class="btn d-inline-block text-light btn-sakura" name="reject" value="Từ chối">
            </div>
        </form>
    </div>



</x-layout>
