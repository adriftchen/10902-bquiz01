<?php include_once "base.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>卓越科技大學校園資訊系統</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
<style>
	.container{
		border:0.5px solid #ccc;
		box-shadow:0 0 5px #ccc;
		padding:10px 20px 50px 20px;
		margin-top:20px;
	}
	.myhead{
		width:250px;
		height:150px;
		padding:10px;
		border:1px solid #ccc;
		box-shadow:0 0 10px #999;
		display:inline-block;
	}
	.intro{
		width:250px;
		height:150px;
		padding:20px 10px 0 10px;
		display:inline-block;
	}

	.skill .item{
		border-top:3px solid #999;
		width:45%;
		margin:1%;
		display:inline-block;
		vertical-align:top;
	}
	.item .item-header{
		font-size:1.5em;
	}
</style>
</head>

<body>
<div class="container">
<img src="img/<?=$Title->find(['sh'=>1])['img'];?>" class='myhead'>
<p class='intro'><?=$Title->find(['sh'=>1])['text'];?></p>
<hr>
<div class="skill">
<?php
	$skills=$Menu->all(['sh'=>1,'parent'=>0]);

	foreach($skills as $item){
?>
	<div class="item">
		<div class="item-header"><?=$item['text'];?></div>
		
		<ul class="item-desc">
		<?php
			$descs=$Menu->all(['parent'=>$item['id']]);
			foreach($descs as $desc){
		?>
			<li><?=$desc['text'];?></li>
			<?php
			}
			?>
		</ul>
	</div>
<?php
	}
?>
</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body></html>
