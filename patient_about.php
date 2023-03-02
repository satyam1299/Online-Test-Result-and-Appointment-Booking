<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/user_style.css">
	<style>
	.content1 {
    column-count: 2;
	column-gap:50px;
	font-size: 22px;
	box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
	}
	.content2 {
		column-count: 2;
	column-gap:50px;
	font-size: 22px;
	box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
	}
	.img1 {
		border-radius: 10px 200px 200px 10px;
		box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
	}
	.img2 {
		border-radius: 150px 0px 0px 150px;
		box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
	}
	article {
		text-align: center;
	}
	</style>
</head>
<body>
	<?php include('patient_header.php'); ?>
	
	<!-- this is for donor registraton -->
	<div class="main_content" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">About Us</h3>
		<div class="content1">
			<div>
				<img src="img/aboutimag33.jpg" alt="" class="img1">
			</div>

			<div>
				<article>
					<h3 style="color: #0616BC;">We are Beside you</h3>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt et dolores neque eaque. Labore, dicta similique ipsam odit saepe obcaecati suscipit ducimus, commodi dolores animi sed beatae, quia nulla facilis.lorem 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, doloribus quisquam eaque inventore consectetur sapiente itaque aliquid quae tempore. Eveniet iusto obcaecati magni qui laboriosam saepe unde, totam odio excepturi
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, doloribus quisquam eaque inventore consectetur sapiente itaque aliquid quae tempore. Eveniet iusto obcaecati magni qui laboriosam saepe unde, totam odio excepturi.</p>
				</article>
			</div>
		</div>

		<div class="content2">
			<div>
				<article>
					<h3 style="color:#0616BC;">24/7 hour service</h3>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt et dolores neque eaque. Labore, dicta similique ipsam odit saepe obcaecati suscipit ducimus, commodi dolores animi sed beatae, quia nulla facilis.lorem 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, doloribus quisquam eaque inventore consectetur sapiente itaque aliquid quae tempore. Eveniet iusto obcaecati magni qui laboriosam saepe unde, totam odio excepturi
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, doloribus quisquam eaque inventore consectetur sapiente itaque aliquid quae tempore. Eveniet iusto obcaecati magni qui laboriosam saepe unde, totam odio excepturi.</p>
				</article>
			</div>
			<div>
				<img src="img/aboutimag11.jpg" alt="" class="img2"><br>
			</div>
		</div>
          
    </div>
			
 	<?php include('patient_footer.php'); ?>

	</div><!--  containerFluid Ends -->
</body>
</html>