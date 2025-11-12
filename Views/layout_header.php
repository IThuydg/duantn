<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Shop</title>
    <link rel="stylesheet" href="./pubilc/css/style.css"  />
  </head>
  <body>
    <header>
      <h1>Online Shop</h1>
      <nav>
        <ul>
          <li><a href="?ctrl=page&act=home">Trang chủ</a></li>
          <li><a href="?ctrl=product&act=list">Sản phẩm</a></li>
          <li><a href="?ctrl=page&act=contact">Liên hệ</a></li>
          <li><a href="?ctrl=cart&act=list">Giỏ hàng (<?=isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0?>)</a></li>
        </ul>
      </nav>        
      <div class="auth">
        <?php if(!isset($_SESSION['user'])):?>
        <a href="?ctrl=user&act=login">Đăng nhập</a>
        <a href="?ctrl=user&act=register">Đăng ký</a>
          <?php else: ?>
        <a href="?ctrl=user&act=register">xin chao, <?= $_SESSION['user']['name']?></a>
        <a href="?ctrl=user&act=logout">Đăng xuat</a>
        <?php endif; ?>
      </div>
    </header>

    <main>
      <?php if (isset($_SESSION['info'])): ?>
        <div class="infomation">
-=
-        </div>
    <?=$_SESSION['info'] ?>
    <?php unset($_SESSION['info']);endif; ?>