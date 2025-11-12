<div class="checkout-container">
        <div class="cart-summary">
          <h3>Sản phẩm trong giỏ hàng</h3>
          <table>
            <thead>
              <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sản phẩm 2</td>
                <td>2</td>
                <td>300,000 VNĐ</td>
                <td>600,000 VNĐ</td>
              </tr>
              <tr>
                <td colspan="3"><strong>Tổng tiền:</strong></td>
                <td><strong>600,000 VNĐ</strong></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="payment-info">
          <h3>Thông tin thanh toán</h3>
          <form action="process-payment.php" method="POST">
            <label for="fullname">Họ và tên:</label>
            <input type="text" id="fullname" name="fullname" required />

            <label for="address">Địa chỉ giao hàng:</label>
            <input type="text" id="address" name="address" required />

            <label for="phone">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" required />

            <label for="payment-method">Phương thức thanh toán:</label>
            <select id="payment-method" name="payment-method" required>
              <option value="cod">Thanh toán khi nhận hàng (COD)</option>
              <option value="credit-card">Thẻ tín dụng/Ghi nợ</option>
              <option value="bank-transfer">Chuyển khoản ngân hàng</option>
            </select>

            <button type="submit">Thanh toán</button>
          </form>
        </div>
      </div>