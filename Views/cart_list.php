<div class="cart-container">
  <h2>Giỏ hàng của bạn</h2>
  <table>
    <thead>
      <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cart as $it): ?>
        <tr>
          <td><?= $it['name'] ?></td>
          <td>
            <a href="?ctrl=cart&act=decrease&id=<?= $it['id'] ?>" class="btn">-</a>
            <?= $it['quantity'] ?>
                <a href="?ctrl=cart&act=increase&id=<?= $it['id'] ?>" class="btn">+</a>
        </td>
          <td>
            <?php if (isset($it['sale_price'])): ?>
              <?= number_format($it['sale_price'])  ?>VND
              <del><?= number_format($it['price']) ?>VND</del>
            <?php else: ?>
              <?= number_format($it['price']) ?>VND
            <?php endif; ?>
          </td>
          <td><?= number_format($it['total']) ?>VND</td>
          <td><a href="?ctrl=cart&act=remove&id=<?= $it['id'] ?>"
           class="btn remove">Xóa</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <p><strong>Tổng tiền: <?= number_format($_SESSION['total_money']) ?> VNĐ</strong></p>
  <button class="checkout">Thanh toán</button>
</div>