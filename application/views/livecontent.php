<a href="http://localhost/Livecontent/get">获取数据</a>
<div>
	<h3>新增数据</h3>
	<form action="/livecontent/insert" method="post">
		<p>
			masterid：
			<input type="text" name="masterid"></p>
		<p>
			chatcontent：
			<input type="text" name="chatcontent"></p>
		<p>
			chatname：
			<input type="text" name="chatname"></p>
		<p>
			chatuserid：
			<input type="text" name="chatuserid"></p>
		<p>
			<input type="submit" value="添加"></p>
	</form>
</div>

<div>
	<h3>更新数据</h3>
	<form action="/livecontent/replace" method="post">
		<input type="hidden" name="chatid" value="9">
		<p>
			chatid：
			<input type="text" name="chatid"></p>
		<p>
		<p>
			masterid：
			<input type="text" name="masterid"></p>
		<p>
			chatcontent：
			<input type="text" name="chatcontent"></p>
		<p>
			chatname：
			<input type="text" name="chatname"></p>
		<p>
			chatuserid：
			<input type="text" name="chatuserid"></p>
		<p>
			<input type="submit" value="修改"></p>
	</form>
</div>

<div>
	<h3>删除数据</h3>
	<form action="/livecontent/delete" method="post">
		<p>
			chatid：
			<input type="text" name="chatid"></p>
		<p>
			<input type="submit" value="删除"></p>
	</form>
</div>