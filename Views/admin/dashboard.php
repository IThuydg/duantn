<h1>Trang quản trị</h1>
<p>Xin chào, <?= $_SESSION['user']['name'] ?>!</p>
<ul>
    <li><a href="?ctrl=adminproduct&act=index">Quản lý sản phẩm</a></li>
    <li><a href="?ctrl=adminorder&act=index">Quản lý đơn hàng</a></li>
    <li><a href="?ctrl=adminuser&act=index">Quản lý người dùng</a></li>
    <li><a href="?ctrl=admin&act=logout">Đăng xuất</a></li>
</ul>
