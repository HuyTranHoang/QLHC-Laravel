<div class="d-flex flex-column flex-shrink-0 p-3 bg-light ms-0" style="height: 100vh">
    <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <i class="fa-solid fa-code me-3"></i>
        <span class="fs-4">Quản Lý</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto" id="sidebar">
        <li class="nav-item">
            <a href="/admin" class="nav-link
            @if(request()->getPathInfo()=='/admin') active @else text-dark @endif" aria-current="page">
                <i class="fa-duotone fa-house me-2"></i> Trang chủ </a>
        </li>
        <li>
            <a href="{{route('phongban.index')}}" class="nav-link
            @if(Str::contains(request()->getPathInfo(), 'phongban')) active @else text-dark @endif">
                <i class="fa-regular fa-apartment me-2"></i> Phòng ban </a>
        </li>
        <li>
            <a href="{{route('chucvu.index')}}" class="nav-link
            @if(Str::contains(request()->getPathInfo(), 'chucvu')) active @else text-dark @endif">
                <i class="fa-solid fa-badge-check me-2"></i> Chức vụ </a>
        </li>
        <li>
            <a href="{{route('nhanvien.index')}}" class="nav-link
            @if(Str::contains(request()->getPathInfo(), 'nhanvien')) active @else text-dark @endif">
                <i class="fa-solid fa-user me-2"></i> Nhân viên </a>
        </li>
        <li>
            <a href="{{route('ngayphep.index')}}" class="nav-link
            @if(Str::contains(request()->getPathInfo(), 'ngayphep')) active @else text-dark @endif">
                <i class="fa-duotone fa-calendar-days me-2"></i> Ngày phép </a>
        </li>
        <li>
            <a href="/admin/phieunghiphep" class="nav-link text-dark">
                <i class="fa-regular fa-notes me-2"></i> Phiếu nghỉ phép </a>
        </li>
        <li>
            <a href="/admin/taophieu" class="nav-link text-dark">
                <i class="fa-duotone fa-note"></i> Tạo phếu </a>
        </li>
        <li>
            <a href="/admin/logout" class="nav-link text-dark ">
                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Thoát </a>
        </li>
    </ul>
    <hr>
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none" aria-expanded="false">
        <img src="{{ asset('images/SGuraCheer.gif') }}" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Huy Nèk</strong>
    </a>
</div>
