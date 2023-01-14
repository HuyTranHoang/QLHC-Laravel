<div class="text-center mt-3">
    <h3>CẬP NHẬT PHÒNG</h3>
    <hr>
    <form method="post" action="/admin/phongban/{{$phongban->id}}">
        @csrf
        @method('put')
        <div class="mb-1 mt-3 row justify-content-center">
            <label for="tenPhong" class="col-2 col-form-label offset-2">Tên phòng</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="tenPhong" name="tenPhong"
                       placeholder="Tên phòng..." value="{{$phongban->tenPhong}}">
            </div>
        </div>

        <div class="row mb-2">
            @error('tenPhong')
            <div class="col offset-4 text-start">
                <span class="text-danger fs-6">Tên phòng không được để trống</span>
            </div>
            @enderror
        </div>

        <div class="mb-1 row justify-content-center">
            <label for="vietTat" class="col-2 col-form-label offset-2">Tên viết tắt</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="vietTat" name="vietTat"
                       placeholder="Tên viết tắt..." value="{{$phongban->vietTat}}">
            </div>
        </div>

        <div class="row mb-2">
            @error('vietTat')
            <div class="col offset-4 text-start">
                <span class="text-danger fs-6 ">Tên viết tắt không được để trống</span>
            </div>
            @enderror
        </div>

        <div class="mb-1 row justify-content-center">
            <label for="vietTat" class="col-2 col-form-label offset-2">Ghi chú</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="ghiChu" name="ghiChu"
                       placeholder="Ghi chú..." value="{{$phongban->ghiChu}}">
            </div>
        </div>

        <div class="row mb-2">
            @error('ghiChu')
            <div class="col offset-4 text-start">
                <span class="text-danger fs-6">Ghi chú không được để trống</span>
            </div>
            @enderror
        </div>

        <div class="mb-1 row">
            <div class="col-6">
                <input type="submit" class="btn d-inline-block text-light btn-sakura" name="addpb" value="Cập nhật">
            </div>
            <div class="col-6" id="confirm">

            </div>
        </div>
    </form>
</div>
