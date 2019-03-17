<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lan
	<head>
		<title>Eduversity Education Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
                
                <style>
                    #output_image{
                      width: 100px;
                      height: 100px;
                    }
                </style>
                <script type='text/javascript'>
                 function preview_image(event)
                 {
                     var reader = new FileReader();
                     reader.onload = function ()
                     {
                         var output = document.getElementById('output_image');
                         output.src = reader.result;
                     }
                     reader.readAsDataURL(event.target.files[0]);
                 }
                </script>
	</head>
	<?php include_once './includes/global_css.php'; ?>
	<body>


		<!-- header -->
		<header>
			<?php include_once './includes/header.php'; ?>
		</header>
		<!-- //header -->
		<!-- inner banner -->
		<?php include_once './includes/inner_banner.php'; ?>
		<!-- inner banner -->

		<!-- breadcrumbs -->
		<?php include_once './includes/breadcrumbs.php'; ?>	
		<!-- //breadcrumbs -->

		<!-- contact -->
			<?php include_once './includes/contact1.php'; ?>	
		<!-- //contact -->
             <?php include_once './includes/contact2.php'; ?>
           
		<!-- footer -->	
		<footer>
			<?php include_once './includes/footer.php'; ?>
		</footer>
		<!-- footer -->
		<!-- Login modal -->
		<?php include_once './includes/login.php'; ?>
		<!-- //Login modal -->

		<!-- Register modal -->
		<?php include_once './includes/register.php'; ?>
		<!-- //Register modal -->

		<!-- Gloabl JS Start -->
		<?php include_once './includes/global_js.php'; ?>	
		<!-- Gloabl JS End -->

	</body>
</html>