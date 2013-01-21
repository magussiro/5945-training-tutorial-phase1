<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("_header.php") ?>
</head>
<body>

<div id="container">
	<h1>發表文章</h1>

	<form id="post-form" action="<?=site_url("/post/create")?>" method="post" >
		<table class="table">
			<tr>
				<td>* 使用者名稱</td>
				<td><input type="text" name="UserName" value="<?=htmlspecialchars($userName)?>" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="UserEmail" value="<?=htmlspecialchars($userEmail)?>" /></td>
			</tr>
			<tr>
				<td>* 發文內容</td>
				<td><textarea name="Content" ><?=htmlspecialchars($content)?></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" class="btn" value="送出" />
				</td>
			</tr>
		</table>
		<?php if(isset($error)) { ?> 
			<div class="alert alert-error"><?=$error?></div>
		<?php } ?>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="<?=base_url("js/post.js")?>"></script>
<?php include("_footer.php"); ?>
</body>
</html>