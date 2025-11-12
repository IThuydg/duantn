<h1>Thêm sản phẩm</h1>
<form method="POST" action="?ctrl=adminproduct&act=store" enctype="multipart/form-data">
    Tên: <input type="text" name="name" required><br>
    Giá: <input type="number" name="price" required><br>
    Ảnh: <input type="file" name="image" required><br>
    Mô tả: <textarea name="description"></textarea><br>
    <button type="submit">Thêm</button>
</form>
