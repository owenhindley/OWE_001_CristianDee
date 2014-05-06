<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
<body>

	<div id="siteContainer">


		<?php include("siteTitle.php"); ?>

		<div id="postContent" class="contact">

			<div class="post">

				<div class="postTitle">
					<h1>Contact</h1>
				</div>	

				<div class="postContent">

					<?php the_post(); ?>
					<?php the_content(); ?>

				</div>

			</div>

		</div>


	</div>


	<?php include("socialFooter.php"); ?>


	<?php include("facebookInclude.php"); ?>

</body>
</html>