<x-layout :title="$title">
    <div class="mt-4">
        <div class="row">
            <div class="col"><h5>Danh sách nhân viên</h5></div>
            <div class="col">
                <a href="/admin/nhanvien/create"><h5 class="float-end"><i class="fa-duotone fa-user"></i> Thêm mới
                    </h5></a>
            </div>
        </div>

        <hr class="mt-0">
        <table class="table table-striped table-bordered">
            <tr class="table-primary">
                <th>#</th>
                <th>Tên nhân viên</th>
                <th>Phòng</th>
                <th>Chức vụ</th>
                <th><i class="fa-duotone fa-trash"></i></th>
            </tr>
            @unless(count($nhanviens) == 0)
                @foreach($nhanviens as $index => $nhanvien)
                    <x-NhanVien.tableRow :nhanvien="$nhanvien" :index="$index"/>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Không tìm thấy nhân viên nào</td>
                </tr>
            @endunless
        </table>
    </div>


</x-layout>
