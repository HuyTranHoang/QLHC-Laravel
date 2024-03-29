<x-layout :title="$title">
    @if(@isset($phongban))
        @include('admin.phongbans._Form_Edit')
    @else
        @include('admin.phongbans._Form_Add')
    @endif

    <div class="mt-4">
        <h3>DANH SÁCH PHÒNG</h3>
        <hr>
        <table class="table table-striped table-bordered">
            <tr class="table-primary">
                <th>#</th>
                <th class="w-50">Tên phòng</th>
                <th class="w-25">Tên viết tắt</th>
                <th><i class="fa-duotone fa-trash"></i></th>
            </tr>

            @unless(count($phongbans) == 0)
                @foreach($phongbans as $index => $phongban)
                    <x-tableRow.PhongBan :phongban="$phongban" :index="$index"/>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không tìm thấy phòng ban nào</td>
                </tr>
            @endunless

        </table>
    </div>
    <div>
        {{$phongbans->links()}}
    </div>
</x-layout>
