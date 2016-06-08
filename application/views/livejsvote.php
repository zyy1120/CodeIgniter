<a href="http://localhost/livejsvote/get">获取数据</a>
<a href="http://localhost/livejsvote/gets">获取单条数据</a>
<div>
	<h3>新增数据</h3>
	<form action="/livejsvote/insert" method="post">
		<p>
			vote_user：
			<input type="text" name="vote_user"></p>
		<p>
			userid：
			<input type="text" name="userid"></p>
		<p>
		<input type="submit" value="添加"></p>
	</form>
</div>

<div>
	<h3>更新数据</h3>
	<form action="/livejsvote/replace" method="post">
		<p>
		id:
		<input type="text" name="id"></p>
		<p>
			vote_user：
			<input type="text" name="vote_user"></p>
		<p>
			userid：
			<input type="text" name="userid"></p>
		<p>
		<input type="submit" value="修改"></p>
	</form>
</div>

<div>
	<h3>删除数据</h3>
	<form action="/livejsvote/delete" method="post">
		<p>
			id：
			<input type="text" name="id"></p>
		<p>
			<input type="submit" value="删除"></p>
	</form>
</div>

<div>
	<h3>搜索</h3>
	<form action="/livejsvote/search" method="post">
		<p>
			userid：
			<input type="text" name="userid"></p>
		<p>
			<input type="submit" value="搜索"></p>
	</form>
</div>