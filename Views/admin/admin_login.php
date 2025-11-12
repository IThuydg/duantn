<h2>Đăng nhập quản trị</h2>
<?php if(isset($_SESSION['info'])): ?>
    <p style="color:red"><?= $_SESSION['info'] ?></p>
    <?php unset($_SESSION['info']); ?>
<?php endif; ?>

<form method="POST" action="?ctrl=admin&act=submitlogin">
    Email: <input type="email" name="email" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    <button type="submit">Đăng nhập</button>
</form>
