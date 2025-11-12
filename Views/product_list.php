 <h2>Tất cả sản phẩm</h2>

      <form method="GET" action="products.php" class="filters">
        <input
          type="text"
          name="search"
          placeholder="Tìm kiếm sản phẩm..."
          value=""
        />

        <select name="sort">
          <option value="price-asc">Giá thấp đến cao</option>
          <option value="price-desc">Giá cao đến thấp</option>
          <option value="name-asc">Tên A-Z</option>
          <option value="name-desc">Tên Z-A</option>
        </select>

        <select name="category">
          <option value="all">Tất cả danh mục</option>
          <option value="electronics">Điện tử</option>
          <option value="fashion">Thời trang</option>
        </select>

        <button type="submit">Lọc</button>
      </form>

      <section class="product-list">
        <div class="product">
          <img src="./pubilc/img/product.png" alt="Sản phẩm 1" />
          <h3>Sản phẩm 1</h3>
          <p>Giá: 200,000 VNĐ</p>
          <a class="button" href="?ctrl=product&act=detail">Mua ngay</a>
        </div>
        <div class="product">
          <img src="./pubilc/img/product.png" alt="Sản phẩm 2" />
          <h3>Sản phẩm 2</h3>
          <p>Giá: 300,000 VNĐ</p>
          <a class="button" href="?ctrl=product&act=detail">Mua ngay</a>
        </div>
      </section>

      <div class="pagination">
        <button>Trước</button>
        <span>1 / 5</span>
        <button>Tiếp</button>
      </div>