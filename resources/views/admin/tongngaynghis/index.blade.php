<x-layout :title="$title">
    <div class="mt-4">
        <div class="row">
            <div class="col"><h5>Danh sách ngày nghỉ</h5></div>
            <div class="col">
                <a href="{{route('ngayphep.create')}}"><h5 class="float-end"><i class="fa-duotone fa-notes"></i> Thêm mới</h5></a>
            </div>
        </div>

        <hr class="mt-0">
        <table class="table table-striped table-bordered">
            <tr class="table-primary">
                <th>#</th>
                <th class="w-50">Tên nhân viên</th>
                <th>Số hiện tại</th>
                <th>Tổng số ngày nghỉ</th>
                <th><i class="fa-duotone fa-trash"></i></th>
            </tr>
            @unless(count($tongngaynghis) == 0)
                @foreach($tongngaynghis as $index => $tongngaynghi)
                    <x-tableRow.TongNgayNghi :tongngaynghi="$tongngaynghi" :index="$index"/>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Không tìm thấy ngày nghỉ nào</td>
                </tr>
            @endunless
        </table>
    </div>
</x-layout>
