<x-layout :title="$title">
    <div class="mt-4">
        <div class="row">
            <div class="col"><h5>Thêm mới ngày phép</h5></div>
            <div class="col">
                <a href="{{route('ngayphep.index')}}"><h5 class="float-end"><i class="fa-duotone fa-list"></i> Danh sách</h5></a>
            </div>
        </div>

        <hr class="mt-0">

        <form method="POST" action="{{route('ngayphep.store')}}">
            @csrf
            <div class="mb-3 mt-3 row justify-content-center">
                <label for="nam" class="col-2 col-form-label offset-2">Năm</label>
                <div class="col">
                    <select class="form-select shadow-sm w-25" name="nam" id="nam">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
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
                <label for="maNV" class="col-2 col-form-label offset-2">Nhân viên</label>
                <div class="col">
                    <select class="form-select shadow-sm w-50" name="maNV" id="maNV">
                        {{--                    Trước mắt sẽ show ra hết, tốt hơn thì phải dùgn ajax xử lí, chỉ hiện
                        nhân viên được chọn từ mã phòng ở trên--}}
                        @foreach($nhanviens as $nhanvien)
                            <option value="{{$nhanvien->maNV}}">{{$nhanvien->tenNV}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tongSoNgay" class="col-2 col-form-label offset-2">Tổng số ngày</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm w-50" id="tongSoNgay" name="tongSoNgay"
                           placeholder="Tổng số ngày..." value="{{old('tongSoNgay')}}">
                </div>
            </div>

            <div class="mb-3 col-6 offset-2">
                <input type="submit" class="btn d-inline-block text-white btn-sakura"
                       name="addnp" value="Thêm mới">
            </div>
        </form>
    </div>


</x-layout>
