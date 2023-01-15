@props(['chucvu','index'])
<tr>
    <td>{{++$index}}</td>
    <td><a class="text-decoration-none" href="/admin/chucvu/{{$chucvu->maCV}}/edit">{{$chucvu->chucVu}}</a></td>
    <td>
        <form method="post" action="/admin/chucvu/{{$chucvu->maCV}}">
            @csrf
            @method('delete')
            <button class="bg-light border-0"><i class="fa-duotone text-danger fa-x"></i></button>
        </form>
    </td>

</tr>
