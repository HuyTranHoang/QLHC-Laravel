<x-layout :title="$title">
    <div class="text-center mt-3">
        <h3>TẠO MỚI PHIẾU</h3>
        <hr>
        <form method="POST" action="{{route('phieunghi.store')}}">
            @csrf
            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tenNV" class="col-2 col-form-label offset-2">Tên nhân viên</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="tenNV" name="tenNV"
                           placeholder="Tên nhân viên...">
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="maPhong" class="col-2 col-form-label offset-2">Phòng ban</label>
                <div class="col">
                    <select class="form-select shadow-sm w-25" name="maPhong" id="maPhong">
                        @foreach($phongbans as $phongban)
                            <option value="{{$phongban->maPhong}}">{{$phongban->tenPhong}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tongSoNgay" class="col-2 col-form-label offset-2">Tổng số ngày nghỉ</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="tongSoNgay" name="tongSoNgay"
                           placeholder="Tổng số ngày..." value="{{old('tongSoNgay')}}">
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tuNgay" class="col-2 col-form-label offset-2">Ngày bắt đầu</label>
                <div class="col">
                    <input type="date" class="form-control shadow-sm" id="tuNgay" name="tuNgay"
                           placeholder="Ngày bắt đầu..." value="{{old('tuNgay')}}">
                </div>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="tuBuoi" id="tuBuoi">
                        <option value="0">Sáng</option>
                        <option value="1">Trưa</option>
                        <option value="2">Chiều</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="denNgay" class="col-2 col-form-label offset-2">Ngày kết thúc</label>
                <div class="col">
                    <input type="date" class="form-control shadow-sm" id="denNgay" name="denNgay"
                           placeholder="Ngày kết thúc..." value="{{old('denNgay')}}">
                </div>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="denBuoi" id="denBuoi">
                        <option value="0">Sáng</option>
                        <option value="1">Trưa</option>
                        <option value="2">Chiều</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="loaiPhep" class="col-2 col-form-label offset-2">Loại phép sử dụng</label>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="loaiPhep" id="loaiPhep">
                        @if($tongngaynghi->soNgayHienTai >= $tongngaynghi->tongSoNgay)
                            <option value="4">Nghỉ không lương</option>
                        @else
                            <option value="0">Phép năm</option>
                            <option value="1">Nghỉ bệnh</option>
                            <option value="2">Nghỉ thai sản</option>
                            <option value="3">Nghỉ việc riêng</option>
                            <option value="4">Nghỉ không lương</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="mb-3 col-6">
                <input type="submit" class="btn d-inline-block text-light btn-sakura" name="addtp" value="Đăng ký">
            </div>
        </form>
    </div>


</x-layout>
