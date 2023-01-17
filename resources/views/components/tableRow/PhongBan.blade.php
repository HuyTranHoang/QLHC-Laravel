@props(['phongban','index'])
<tr>
    <td>{{++$index}}</td>
    <td><a class="text-decoration-none" href="{{route('phongban.edit',[$phongban->maPhong])}}">{{$phongban->tenPhong}}</a></td>
    <td>{{$phongban->vietTat}}</td>
    <td>
        <form method="post" action="{{route('phongban.destroy',[$phongban->maPhong])}}">
            @csrf
            @method('delete')
            <button class="bg-light border-0"><i class="fa-duotone text-danger fa-x"></i></button>
        </form>
    </td>
</tr>
