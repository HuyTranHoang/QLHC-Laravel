<tr>
    <td>{{++$index}}</td>
    <td><a href="{{route('phieunghi.edit',[$phieunghi->maNV])}}" class="text-decoration-none">{{$phieunghi->nhanvien->tenNV}}</a></td>
    <td>{{$phieunghi->tongSoNgay}}</td>
    <td>{{getBuoi($phieunghi->tuBuoi)}}</td>
    <td>{{getBuoi($phieunghi->denBuoi)}}</td>
    <td>{{formatDate($phieunghi->tuNgay)}}</td>
    <td>{{formatDate($phieunghi->denNgay)}}</td>
    <td>{{getLoaiPhep($phieunghi->loaiPhep)}}</td>
    <td>{{getTrangThai($phieunghi->trangThai)}}</td>
    <td>{{formatDate($phieunghi->ngayDuyet)}}</td>
</tr>
