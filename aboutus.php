<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
								

							Welcome to BookShop.com, where literary journeys come to life! Nestled at the intersection of imagination and knowledge, we are more than just a bookstore – we are a haven for bibliophiles, a sanctuary for storytelling, and a celebration of the written word.

Founded with a passion for literature and a commitment to fostering a community of readers, BookShop.com is more than bricks and mortar; it's a curated space where stories unfold and minds expand. Our shelves are carefully stocked with a diverse collection of books, ranging from timeless classics to contemporary bestsellers, ensuring that every reader finds their next literary adventure.

At BookShop.com, we believe in the transformative power of books. Whether you're seeking an escape into a fictional realm, exploring the depths of human history, or expanding your knowledge in a specific field, our collection is designed to cater to all tastes and interests. Our team of dedicated book enthusiasts is always on hand to offer personalized recommendations, turning every visit into a delightful journey of literary discovery.
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
