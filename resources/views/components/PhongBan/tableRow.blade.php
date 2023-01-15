@props(['phongban','index'])
<tr>
    <td>{{++$index}}</td>
    <td><a class="text-decoration-none" href="/admin/phongban/{{$phongban->id}}/edit">{{$phongban->tenPhong}}</a></td>
    <td>{{$phongban->vietTat}}</td>
    <td>
        <form method="post" action="/admin/phongban/{{$phongban->id}}">
            @csrf
            @method('delete')
            <button class="bg-light border-0"><i class="fa-duotone text-danger fa-x"></i></button>
        </form>
    </td>

</tr>
