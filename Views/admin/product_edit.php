<h1>Sửa sản phẩm</h1>
<form method="POST" action="?ctrl=adminproduct&act=update&id=<?= $product['id'] ?>" enctype="multipart/form-data">
    Tên: <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
    Giá: <input type="number" name="price" value="<?= $product['price'] ?>" required><br>
    Ảnh hiện tại: <img src="./public/img/<?= $product['image'] ?>" width="80"><br>
    Ảnh mới: <input type="file" name="image"><br>
    Mô tả: <textarea name="description"><?= $product['description'] ?></textarea><br>
    <button type="submit">Cập nhật</button>
</form>
