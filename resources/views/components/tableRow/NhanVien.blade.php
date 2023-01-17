@props(['nhanvien','index'])
<tr>
    <td>{{++$index}}</td>
    <td>
        <a class="text-decoration-none" href="{{route('nhanvien.edit',[$nhanvien->maNV])}}">{{$nhanvien->tenNV}}</a>
        <small class="small-text float-end"><a href="{{route('nhanvien.show',[$nhanvien->maCV])}}" class="text-decoration-none"><i class="fa-regular fa-circle-info"></i></a></small>
    </td>
    <td>{{$nhanvien->phongBan->tenPhong}}</td>
    <td>{{$nhanvien->chucVu->chucVu}}</td>
    <td>
        <form method="post" action="{{route('nhanvien.destroy',[$nhanvien->maCV])}}">
            @csrf
            @method('delete')
            <button class="bg-light border-0"><i class="fa-duotone text-danger fa-x"></i></button>
        </form>
    </td>
</tr>
