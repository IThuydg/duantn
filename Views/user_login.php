<div class="login-container">
        <h2>Đăng nhập</h2>
        <form action="?ctrl=user&act=submitlogin" method="POST">
          <label for="email">email:</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Mật khẩu:</label>
          <input type="password" id="password" name="password" required />

          <button type="submit">Đăng nhập</button>
        </form>
        <p>
          <a href="?ctrl=user&act=forgotPassword">Quên mật khẩu</a> hoặc
          <a href="?ctrl=user&act=register">chưa có tài khoản</a>?
        </p>
      </div>