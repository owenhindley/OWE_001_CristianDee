<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
<body>

	<div id="siteContainer">


		<?php include("siteTitle.php"); ?>

		<div id="postContent" class="homepage">
			<?php the_post(); ?>
			<?php the_content(); ?>

		</div>


	</div>


	<?php include("socialFooter.php"); ?>


	<?php include("facebookInclude.php"); ?>

</body>
</html>