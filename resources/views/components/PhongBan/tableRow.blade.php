@props(['phongban','index'])
<tr>
    <td>{{++$index}}</td>
    <td><a class="text-decoration-none" href="/admin/phongban/{{$phongban->maPhong}}/edit">{{$phongban->tenPhong}}</a></td>
    <td>{{$phongban->vietTat}}</td>
    <td><i style="cursor:pointer;" class="fa-duotone fa-x"></i></td>

</tr>
