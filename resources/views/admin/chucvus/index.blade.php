<x-layout :title="$title">
    @if(@isset($chucvu))
        @include('admin.chucvus._Form_Edit')
    @else
        @include('admin.chucvus._Form_Add')
    @endif

    <div class="mt-4">
        <h3>DANH SÁCH CHỨC VỤ</h3>
        <hr>
        <table class="table table-striped table-bordered">
            <tr class="table-primary">
                <th>#</th>
                <th class="w-75">Tên chức vụ</th>
                <th><i class="fa-duotone fa-trash"></i></th>
            </tr>

            @unless(count($chucvus) == 0)
                @foreach($chucvus as $index => $chucvu)
                    <x-tableRow.ChucVu :chucvu="$chucvu" :index="$index"/>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Không tìm thấy chức vụ nào</td>
                </tr>
            @endunless
        </table>
    </div>
    <div>
        {{$chucvus->links()}}
    </div>
</x-layout>
