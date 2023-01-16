<x-layout :title="$title">
    <div class="mt-4">
        <div class="row">
            <div class="col"><h5>Thêm mới nhân viên</h5></div>
            <div class="col">
                <a href="{{route('nhanvien.index')}}"><h5 class="float-end"><i class="fa-duotone fa-list"></i> Danh sách</h5></a>
            </div>
        </div>

        <hr class="mt-0">

        <form method="POST" action="{{route('nhanvien.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3 row justify-content-center">
                <label for="tenNV" class="col-2 col-form-label offset-2">Tên nhân viên</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="tenNV" name="tenNV"
                           placeholder="Tên nhân viên..." value="{{old('tenNV')}}">
                </div>
            </div>

            <div class="row mb-2">
                @error('tenNV')
                <div class="col offset-4 text-start">
                    <span class="text-danger fs-6">Tên nhân viên không được để trống</span>
                </div>
                @enderror
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="userName" class="col-2 col-form-label offset-2">Username</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="userName" name="userName"
                           placeholder="Username..." value="{{old('userName')}}">
                </div>
            </div>

            <div class="row mb-2">
                @error('userName')
                <div class="col offset-4 text-start">
                    <span class="text-danger fs-6">Username không được để trống</span>
                </div>
                @enderror
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="password" class="col-2 col-form-label offset-2">Password</label>
                <div class="col">
                    <input type="text" class="form-control shadow-sm" id="password" name="password"
                           placeholder="Password..." value="{{old('password')}}">
                </div>
            </div>

            <div class="row mb-2">
                @error('password')
                <div class="col offset-4 text-start">
                    <span class="text-danger fs-6">Password không được để trống</span>
                </div>
                @enderror
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="gioiTinh" class="col-2 col-form-label offset-2">Giới tính</label>
                <div class="col">
                    <select class="form-select shadow-sm w-25" name="gioiTinh" id="gioiTinh">
                        <option selected value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="ngaySinh" class="col-2 col-form-label offset-2">Ngày sinh</label>
                <div class="col">
                    <input type="date" class="form-control shadow-sm w-25" id="ngaySinh" name="ngaySinh"
                           value="{{old('ngaySinh')}}">
                </div>
            </div>

            <div class="row mb-2">
                @error('ngaySinh')
                <div class="col offset-4 text-start">
                    <span class="text-danger fs-6">Ngày sinh không được để trống</span>
                </div>
                @enderror
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="maPhong" class="col-2 col-form-label offset-2">Phòng ban</label>
                <div class="col">
                    <select class="form-select shadow-sm w-25" name="maPhong" id="maPhong">
                        @foreach($phongbans as $phongban)
                            <option value="{{$phongban->maPhong}}">{{$phongban->tenPhong}}</option>
                        @endforeach()
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="maCV" class="col-2 col-form-label offset-2">Chức vụ</label>
                <div class="col">
                    <select class="form-select shadow-sm w-25" name="maCV" id="maCV">
                        @foreach($chucvus as $chucvu)
                            <option value="{{$chucvu->maCV}}">{{$chucvu->chucVu}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 mt-3 row justify-content-center">
                <label for="hinh" class="col-2 col-form-label offset-2">Avatar</label>
                <div class="col">
                    <input type="file" class="form-control shadow-sm w-50" id="hinh" name="hinh">
                </div>
            </div>

            <div class="mb-3 col-6 offset-2">
                <input type="submit" class="btn d-inline-block text-light btn-sakura"
                       name="addnv" value="Thêm mới">
            </div>
        </form>
    </div>


</x-layout>
