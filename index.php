<!DOCTYPE html>
<html>

	<head>

		<meta name="viewport" content="width=device,initial-scale=1.0" />
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/jquery.mobile-1.4.4.min.css">
		<script src="js/jquery-2.1.1.min.js"></script>

		<script src="js/jquery.mobile-1.4.5.min.js"></script>
		<script src="js/jquery.fullscreenslides.js"></script>
		<link rel="stylesheet" href="css/pagestyle.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/fullscreenstyle.css" />
	</head>
	<script>
		function myRefresh() {
				
				var i=100;
				var refresh = setTimeout(function() {
					window.location.reload();
					
				}, i);	
			
			
		}
	</script>
	   
	<?php
			require_once 'contentdb.php';
			$con = content();
			if($con){
				mysql_select_db("imgdb",$con);
				mysql_query("set names 'utf-8'");
				
			}else{
				echo mysql_errno();
			}
		?>

		<body class="keBody" >

			<div data-role="page">

				<div data-role="header" data-position="fixed" data-theme="a">
					<h4>智能相册</h4>

					<div data-role = "navbar">
						<ul>
							<li><a href="index.html" data-icon="camera" class="ui-btn-active">我的云相册</a></li>
							<li><a href="index2.html" data-icon="clock" onclick="myRefresh()">幻灯片模式</a></li>
						</ul>
					</div>

				</div>

				<div data-role="content">

					<ul data-role="listview">
						<li>
							<a href="imgdetail.html" onclick="myRefresh()">
								<img src="img/fhn1.png" />
								<h3>fire keeper</h3>
								<p>Data: 2017-4-19</p>
							</a>

						</li>
						<li>
							<a href="#">
								<img src="img/112.png" />
								<h3>fire keeper</h3>
								<p>Data: 2017-4-19</p>
							</a>

						</li>
						<li>
							<a href="#">
								<img src="img/a1.jpg" />
								<h3>在英格兰科茨沃尔德,百老汇大厦</h3>
								<p>Data: 2017-4-19</p>
							</a>

						</li>
						<li>
							<a href="#">
								<img src="img/a2.jpg" />
								<h3>纽约的夜晚,HDR</h3>
								<p>Data: 2017-4-19</p>
							</a>

						</li>
						<li>
							<a href="#">
								<img src="img/a3.jpg" />
								<h3>红松鼠冬天耳塔夫茨与明显</h3>
								<p>Data: 2017-4-19</p>
							</a>

						</li>
						<?php
					$result = mysql_query("select * from image");
					
					while($arr = mysql_fetch_array($result)){
				?>
							<li>
								<a href="imgdetail.html" onclick="myRefresh()">
									<img src="http://115.159.89.252<?php echo echo $arr['url'] ?>" />
									<h3><?php echo $arr['name'] ?></h3>
									<p>Data: 2017-4-19</p>
								</a>

							</li>
							<?php
					}
				?>
					</ul>

				</div>

				<div data-role="footer" data-position="fixed">
					<h4>&nbsp;</h4>
				</div>
			</div>

		</body>

</html>