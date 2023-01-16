@props(['chucvu','index'])
<tr>
    <td>{{++$index}}</td>
    <td><a class="text-decoration-none" href="{{route('chucvu.edit',[$chucvu->maCV])}}">{{$chucvu->chucVu}}</a></td>
    <td>
        <form method="post" action="{{route('chucvu.destroy',[$chucvu->maCV])}}">
            @csrf
            @method('delete')
            <button class="bg-light border-0"><i class="fa-duotone text-danger fa-x"></i></button>
        </form>
    </td>

</tr>
