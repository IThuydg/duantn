
      <section class="new-products">
        <h2>Sản phẩm mới</h2>

        <?php foreach($productList as $product): ?>
        <div class="product">
          <img src="./pubilc/img/<?=$product['image']?>" alt="<?=$product['name']?>" />
          <h3><?=$product['name']?></h3>
          <?php if(isset($product['sale_price'])): ?>   
          <p>
            Giá gốc: <del><?= number_format($product['price'])?> VNĐ</del>
            Giá còn: <?= number_format($product['sale_price'])?> VNĐ
        </p>
        <?php else: ?>
            <p>Giá: <?= number_format($product['price'])?> VNĐ </p>
          <?php endif; ?>

          <a class="button" href="?ctrl=product&act=detail&id=<?=$product['id']  ?>">Mua ngay</a>
        </div>

        
        <?php endforeach;?>

      </section>

      <section class="best-sellers">
        <h2>Sản phẩm bán chạy</h2>
        <div class="product">
          <img src="./pubilc/img/product.png" alt="Sản phẩm bán chạy" />
          <h3>Sản phẩm bán chạy 1</h3>
          <p>Giá: 500,000 VNĐ</p>
          <a class="button" href="?ctrl=product&act=detail">Mua ngay</a>
        </div>
                <div class="clearfix"></div>

      </section>
   
