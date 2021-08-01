<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/webmag/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 01:08:34 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Post page</title>

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<link rel="stylesheet" href="css/font-awesome.min.css">

<link type="text/css" rel="stylesheet" href="css/singlepost.css" />

<style>

	
</style>

</head>
<body>

<header id="header">

	<div id="nav">

		<div id="nav-fixed">
			<div class="container">

				<h3 class="pull-left" id="hide" style="background:lightgrey"><span style="c">Meda</span> <span style="color:goldenrod">360</span></h3>
				<ul class="nav-menu nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="blog_post.php">Post Article</a></li>
				<li class="cat-1"><a href="#">About us</a></li>
				<li class="cat-2"><a href="#">Contacts</a></li>
				</ul>


				<div class="nav-btns">
					<button class="aside-btn"><i class="fa fa-bars"></i></button>
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div class="search-form">
						<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
						<button class="search-close"><i class="fa fa-times"></i></button>
					</div>
				</div>

			</div>
		</div>


		<div id="nav-aside">

			<div class="section-row">
				<ul class="nav-aside-menu">
					<li><a href="index-2.html">Home</a></li>
					<li><a href="blog_post.php">post article</a></li>
					<li><a href="#">Join Us</a></li>
					<li><a href="#">Advertisement</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
			</div>

			<div class="section-row">
				<h3>Follow us</h3>
				<ul class="nav-aside-social">
					<li><a href="https://www.facebook.com/owolabi.hammed.3994"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://ads.twitter.com/mobile/v1/tweets/all"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=${+2347015713905}&text= hello Hammed Owolabi"><i class="fa fa-whatsapp"></i></a></li>
					
				</ul>
			</div>
			<button class="nav-aside-close"><i class="fa fa-times"></i></button>

		</div>

	</div>
	<?php
	require 'db.php';
	$id = $_SESSION['id'];
	$select = "SELECT * FROM posts WHERE id = $id";
	$selected = mysqli_query($connect, $select);
	$row = mysqli_fetch_assoc($selected);
	$postTitle = $row['title'];
	$image = $row['image'];
	$post = $row['post'];
	
	
	
	?>

	<div id="post-header" class="page-header">
		<div class="background-img" style="background-image: url('images/<?php echo $image?>'); background-size:cover'; background-repeat:no-repeat);"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-meta">
							<a class="post-category cat-2" href="category.html">Article</a>
							<span class="post-date">February 2020</span>
						</div>
						<h1><?php echo $postTitle?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>


<div class="section">

	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<div class="section-row sticky-container">
					<div class="main-post">
						<h3><?php echo $postTitle?></h3>
						<p> <?php echo $post?> </p>
						
					</div>
					<div class="post-shares sticky-shares">
						<a href="#" class="https://www.facebook.com/owolabi.hammed.3994"><i class="fa fa-facebook"></i></a>
						<a href="https://ads.twitter.com/mobile/v1/tweets/all" class="share-twitter"><i class="fa fa-twitter"></i></a>
						<a href="https://api.whatsapp.com/send?phone=${+2347015713905}&text= hello Hammed Owolabi" class="share-google-plus"><i class="fa fa-whatsapp"></i></a>
						
					</div>
				</div>
				<?php
					$count = "SELECT id FROM comments";
					$counted = mysqli_query($connect, $select);
					
				?>
			
			<div class="section-row">
				<div class="section-title">
					<h2> Comments</h2>
				</div>
				<?php
			
					$slct = "SELECT * FROM comments WHERE Sid = $id";
					$slctd = mysqli_query($connect, $slct);
					
					
					
					while($comments = mysqli_fetch_assoc($slctd)){
						$cmntName = $comments['name'];
						$cmntMesg = $comments['message'];
                        $cmntdate = $comments['date'];

						echo "
						<div class='post-comments'>
						<div class='media'>
							<div class='media-body'>
								<div class='media-heading'>
									<h4>$cmntName</h4>
									<span class='time'>$cmntdate</span>
									<a href='#' class='reply'>Reply</a>
								</div>
								<p>  $cmntMesg </p>
							</div>
						</div>
						</div>
						
						";
					}
			
				?>
				
			</div>

			
	




			<div class="section-row">
				<div class="section-title">
					<h2>Leave a comment</h2>
					<p>your email address will not be published. required fields are marked *</p>
				</div>
				<form class="post-reply" method="post">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<span>Name *</span>
								<input class="input" type="text" name="name" required>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<span>Email *</span>
								<input class="input" type="email" name="email">
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<span>Website</span>
								<input class="input" type="text" name="website">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<textarea class="input" name="message" placeholder="Message" required></textarea>
							</div>
							<button class="primary-button" name="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
			
			<?php
			
			if(isset($_POST['submit'])){

				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
                 $date = date("d-m-20y");
				
				$insert = "INSERT INTO comments (name, email, message, Sid, date)VALUES('$name', '$email', '$message', '$id', '$date')";
				$query = mysqli_query($connect, $insert);

				if($query){
					echo "<script>alert('comment submitted successfully')</script>";
				}else{
					echo "<script>alert('There was problem submitting your comment')</script>";
					echo mysqli_error($connect);
				}
			}
			?>


		</div>
	</div>
</div>	




<!-- footer section -->
<footer id="footer">

	<div class="container">

		<div class="row">
			
			<div class="col-md-5">
				<div class="footer-widget">
					
					<ul class="footer-nav">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Advertisement</a></li>
					</ul>
					<div class="footer-copyright">
						<span>&copy; 
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Owolabi Hammed الفلانى</a>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="row">
					
					<div class="col-md-6">
						<div class="footer-widget">
							<h3 class="footer-title">About Us</h3>
							<ul class="footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Join Us</a></li>
								<li><a href="#">Contacts</a></li>
							</ul>
						</div>
					</div>
			

					<div class="col-md-5">
						<div class="footer-widget">
							<h3 class="footer-title">Catagories</h3>
							<ul class="footer-links">
								<li><a href="#">Politics</a></li>
								<li><a href="#">Inside stories</a></li>
								<li><a href="#">Articles</a></li>
								<li><a href="#">write up</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>


			<div class="col-md-2">
				<div class="footer-widget">
					
					<ul class="footer-social">
						<li><a href="https://www.facebook.com/owolabi.hammed.3994"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://ads.twitter.com/mobile/v1/tweets/all"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://api.whatsapp.com/send?phone=${+2347015713905}&text= hello Hammed Owolabi"><i class="fa fa-whatsapp"></i></a></li>
						
					</ul>
				</div>
			</div>

		</div>

	</div>

</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/singlepost.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/webmag/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 01:08:35 GMT -->
</html>
