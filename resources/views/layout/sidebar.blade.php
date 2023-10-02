<div class="sidebar-header">
    <div class="mt-2">
        <i class="bi bi-list" id="toggle"></i>
    </div>
    <h1 class="mt-3 pt-3"><i class="bi bi-handbag mx-2"></i><span>SIMS</span> Web App</h1>
</div>
<div class="sidebar-menu">
    <ul class="mt-5">
        <li><a href=""><i class="bi bi-box-seam"></i> Produk</a></li>
        <li><a href=""><i class="bi bi-person"></i> Profile</a></li>
        <li>
            <form action="{{url('/logout')}}" method="post">
                @csrf @method('post')
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin logout?')" id="btn-logout" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> logout</button>
            </form>
        </li>
    </ul>
</div>