<tr>
    <td>{{++$index}}</td>
    <td><a href="{{route('ngayphep.edit',[$tongngaynghi->maPhep])}}" class="text-decoration-none">{{$tongngaynghi->nhanvien->tenNV}}</a></td>
    <td>{{$tongngaynghi->soNgayHienTai}}</td>
    <td>{{$tongngaynghi->tongSoNgay}}</td>
    <td>
        <form method="post" action="{{route('ngayphep.destroy',[$tongngaynghi->maPhep])}}">
            @csrf
            @method('delete')
            <button class="bg-light border-0"><i class="fa-duotone text-danger fa-x"></i></button>
        </form>
    </td>
</tr>
