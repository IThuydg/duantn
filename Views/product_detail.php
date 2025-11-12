<div class="product-detail">
        <img src="./public/img/<?=$product['image'] ?>" alt=" <?=$product['name'] ?>" />
        <div class="product-info">
          <h2><?=$product['name'] ?></h2>
          <p>
            Mô tả: <?=$product['description'] ?>
          </p>
          <?php if(isset($product['sale_price'])): ?>   
          <p>
            Giá gốc: <del><?= number_format($product['price'])?> VNĐ</del>
            Giá còn: <?= number_format($product['sale_price'])?> VNĐ
        </p>
        <?php else: ?>
            <p>Giá: <?= number_format($product['price'])?> VNĐ </p>
          <?php endif; ?>
          <form action="?ctrl=cart&act=add&id=<?=$product['id']?>" method="post">
  
          <button type="submit">mua ngay</button>
          </form>

         
        </div>
      </div>