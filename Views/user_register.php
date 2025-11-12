<div class="register-container">
        <h2>Đăng ký tài khoản</h2>
        <form action="?ctrl=user&act=submitregister" method="POST">
          <label for="fullname">Họ và tên:</label>
          <input type="text" id="fullname" name="name" required />

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Mật khẩu:</label>
          <input type="password" id="password" name="password" required />

          <label for="rePassword">Xác nhận mật khẩu:</label>
          <input
            type="password"
            id="rePassword"
            name="rePassword"
            required
          />

          <button type="submit">Đăng ký</button>
        </form>
        <p>Đã có tài khoản? <a href="?ctrl=user&act=login">Đăng nhập</a></p>
      </div>