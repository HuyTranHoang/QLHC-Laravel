<x-layout :title="$title">
    <div class="mt-4">
        <h3>PHIẾU CHỜ DUYỆT</h3>
        <hr>
        <table class="table table-striped table-bordered" id="tablePN">
            <tr class="table-primary">
                <th>#</th>
                <th>Tên Nhân Viên</th>
                <th>Tổng số ngày</th>
                <th>Từ buổi</th>
                <th>Đến buổi</th>
                <th>Từ ngày</th>
                <th>Đến ngày</th>
                <th>Loại phép</th>
                <th>Trạng thái</th>
                <th>Ngày duyệt</th>
            </tr>
            @unless(count($phieunghis) == 0)
                @php $count = 0; @endphp
                @foreach($phieunghis as $index => $phieunghi)
                    @if($phieunghi->trangThai == 0)
                        @php $count++ @endphp
                        <x-tableRow.PhieuNghi-admin :phieunghi="$phieunghi" :index="$index"/>
                    @endif
                @endforeach
            @endunless
            @if($count == 0)
                <tr>
                    <td colspan="10">Không tìm thấy phiếu nghỉ chờ duyệt nào</td>
                </tr>
            @endif

        </table>

        <h3>DANH SÁCH PHIẾU</h3>
        <hr>
        <table class="table table-striped table-bordered" id="tablePN">
            <tr class="table-primary">
                <th>#</th>
                <th>Tổng số ngày</th>
                <th>Từ buổi</th>
                <th>Đến buổi</th>
                <th>Từ ngày</th>
                <th>Đến ngày</th>
                <th>Loại phép</th>
                <th>Trạng thái</th>
                <th>Ngày duyệt</th>
            </tr>
            @unless(count($phieunghis) == 0)
                @foreach($phieunghis as $index => $phieunghi)
                    <x-tableRow.PhieuNghi :phieunghi="$phieunghi" :index="$index"/>
                @endforeach
            @else
                <tr>
                    <td colspan="9">Không tìm thấy phiếu nghỉ nào</td>
                </tr>
            @endunless
        </table>
    </div>
</x-layout>
