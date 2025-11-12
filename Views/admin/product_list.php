<h1>Quản lý sản phẩm</h1>
<a href="?ctrl=adminproduct&act=create">+ Thêm sản phẩm</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Tên</th><th>Giá</th><th>Hình</th><th>Mô tả</th><th>Hành động</th>
    </tr>
    <?php foreach($products as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['name'] ?></td>
        <td><?= number_format($p['price']) ?> VNĐ</td>
        <td><img src="./public/img/<?= $p['image'] ?>" width="60"></td>
        <td><?= $p['description'] ?></td>
        <td>
            <a href="?ctrl=adminproduct&act=edit&id=<?= $p['id'] ?>">Sửa</a> | 
            <a onclick="return confirm('Xóa sản phẩm này?')" href="?ctrl=adminproduct&act=delete&id=<?= $p['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
