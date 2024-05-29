<?php
// session_start();
// include "../model/pdo.php";
// include "../model/binhluan.php";
// $idpro = $_REQUEST['idpro'];
?>
<!-- breadcrumbs-area-start -->
<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="#" class="active">Blog</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->
<!-- blog-main-area-start -->
<div class="blog-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50">
				<div class="single-blog mb-50">
					<div class="blog-left-title">
						<h3>Tìm kiếm</h3>
					</div>
					<div class="side-form">
						<form action="index.php?act=truyen" method="post">
							<input type="text" placeholder="Search...." name="kyw"><br><br>
							<input type="submit" name="timkiem" value="Tìm kiếm">

						</form>
					</div>
				</div>
				<div class="single-blog mb-50">
					<div class="blog-left-title">
						<h3>Thể loại</h3>
					</div>
					<div class="blog-side-menu">
						<ul>
							<?php
							foreach ($dstl as $theloai) {
								extract($theloai);
								$linktl = "index.php?act=truyen&iddm=" . $id;
								echo '<li><a href="' . $linktl . '">' . $name . '</a></li>';
							}
							?>
						</ul>
					</div>
				</div>
				<div class="single-blog mb-50">
					<div class="blog-left-title">
						<h3>Bài viết gần đây</h3>
					</div>
					<div class="blog-side-menu">
						<ul>
							<li><a href="#">Blog image post</a></li>
							<li><a href="#">Post with Gallery</a></li>
							<li><a href="#">Post with audio</a></li>
							<li><a href="#">Post with vedio</a></li>
							<li><a href="#">Post with image</a></li>
						</ul>
					</div>
				</div>
				<div class="single-blog mb-50">
					<div class="blog-left-title">
						<h3>Bình luận</h3>
					</div>
					<div class="blog-side-menu">
						<ul>
							<li><a href="#">admin on Maecenas ultricies</a></li>
							<li><a href="#">admin on Tincidunt malesuada</a></li>
							<li><a href="#">admin on Rhoncus eleifend</a></li>
							<li><a href="#">admin on Quisque fringilla</a></li>
							<li><a href="#">admin on Pellentesque posuere</a></li>
						</ul>
					</div>
				</div>

				<div class="single-blog">
					<div class="blog-left-title">
						<h3>Tags</h3>
					</div>
					<div class="blog-tag">
						<ul>
							<li><a href="#">Asian</a></li>
							<li><a href="#">Brown</a></li>
							<li><a href="#">Euro</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Franch</a></li>
							<li><a href="#">Hat</a></li>
							<li><a href="#">T-Shirt</a></li>
							<li><a href="#">Teen</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">White</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">
				<div class="blog-main-wrapper">
					<div class="author-destils mb-30">
						<div class="author-left">
							<div class="author-img">
								<a href="#"><img src="view/img/author/1.jpg" alt="man" /></a>
							</div>
							<div class="author-description">
								<p>Đăng bởi:
									<a href="#"><span>Admin</span>in</a>
									<a href="#">Sách,</a>
									<a href="#">Sách,</a>
									<a href="#">Sách,</a>
								</p>
								<span>May 15 2017</span>
							</div>
						</div>
						<div class="author-right">
							<span>Chia sẻ:</span>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="blog-img mb-30">
						<img src="view/img/blog/1.jpg" alt="blog" />
					</div>
					<div class="single-blog-content">
						<div class="single-blog-title">
							<h3>Blog image post</h3>
						</div>
						<div class="blog-single-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
							<blockquote class="blockstyle">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</blockquote>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
							<p>dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim. laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
						</div>
					</div>
					<div class="comment-tag">
						<p>03 Comments/Tags: Asian, t-shirt, teen </p>
					</div>
					<div class="sharing-post mt-20">
						<div class="share-text">
							<span>Share this post</span>
						</div>
						<div class="share-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
					<script>
						$(document).ready(function() {
							$("#binhluan").load("view/binhluan/binhluanform.php", {
								idpro: <?= $id ?>
							});
						});
					</script>
					<div class="comment-title-wrap mt-30" id="binhluan">
						<h3>03 Bình luận</h3>
					</div>
	
					
					<div class="comment-input mt-40">
						<!-- <p>We will not publish your email address. Required fields are marked*</p> -->
						<div class="comment-input-textarea mb-30">
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="single-comment-input mb-30">
									<!-- <form action="#">
										<label>Tên*</label>
										<input type="text" placeholder="Tên" />
									</form> -->
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="single-comment-input mb-30">
									<!-- <form action="#">
										<label>Email*</label>
										<input type="text" placeholder="Email" />
									</form> -->
								</div>
							</div>

						</div>
					</div>
					<div class="single-post-button">
						<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
							<input type="hidden" name="idpro" value="<?= $idpro ?>">
							<!-- <input type="submit" name="guibinhluan" value="Gửi bình luận"> -->
						</form>
					</div>
					<?php
					if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
						$noidung = $_POST['noidung'];
						$idpro = $_POST['idpro'];
						$iduser = $_SESSION['user']['id'];
						$ngaybinhluan = date('h:i:sa d/m/Y');
						insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
					}
					?>


				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog-main-area-end -->