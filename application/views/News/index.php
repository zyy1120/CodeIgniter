<a href="/news/create">新增</a>
<table>
	<tr><td>ID</td><td>title</td><td>text</td><td>sulg</td><td>编辑</td></tr>
<?php foreach ($news as $news_item): ?>
	<tr>
	<td><?php echo $news_item['id']; ?></td>
    <td><?php echo $news_item['title']; ?></td>
    <div class="main">

    <td>   <?php echo $news_item['text']; ?> </td>
    </div>
    <td><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></td>
    <td><a href="/news/delete?id=<?php echo $news_item['id']; ?>">删除</a> <a href="/news/update?id=<?php echo $news_item['id']; ?>">修改</a></td>
    </tr>
<?php endforeach; ?>

	