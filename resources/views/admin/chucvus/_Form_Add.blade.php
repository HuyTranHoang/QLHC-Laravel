<div class="text-center mt-3">
    <h3>QUẢN LÝ CHỨC VỤ</h3>
    <hr>
    <form method="POST" action="/admin/chucvu">
        @csrf
        <div class="mb-3 mt-3 row justify-content-center">
            <label for="chucVu" class="col-2 col-form-label offset-2">Tên chức vụ</label>
            <div class="col">
                <input type="text" class="form-control shadow-sm" id="chucVu" name="chucVu"
                       placeholder="Chức vụ..." value="{{old('chucVu')}}">
            </div>
        </div>

        <div class="row mb-2">
            @error('chucVu')
            <div class="col offset-4 text-start">
                <span class="text-danger fs-6">Chức vụ không được để trống</span>
            </div>
            @enderror
        </div>


        <div class="mb-3 col-6">
            <input type="submit" class="btn text-light d-inline-block btn-sakura" name="addcv" value="Thêm mới">
        </div>
    </form>
</div>
