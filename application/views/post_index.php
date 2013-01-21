<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("_header.php") ?>
</head>
<body>

<div id="container">
	<h1>文章列表</h1>

	<table class="table">
		<tr>
			<td>編號</td>
			<td>使用者</td>
			<td>內容</td>
			<td>發表日</td>
		<tr>
		<?php foreach($results as $result){ ?>
			<tr>
				<td class="span1"><?=$result->PostID?></td>
				<td class="span2"><?=htmlspecialchars($result->UserName)?>(<?=htmlspecialchars($result->UserEmail)?>)</td>
				<td class="span6"><?=htmlspecialchars($result->Content)?></td>
				<td class="span1"><?=$result->CreateDate?></td>
			</tr>
		<?php }?>
	</table>
	<a href="<?=site_url("/post/new_")?>" class="btn">發表文章</a>
</div>

<?php include("_footer.php"); ?>

</body>
</html>