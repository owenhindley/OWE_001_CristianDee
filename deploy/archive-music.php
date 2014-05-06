<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
<body>

	<div id="siteContainer">


		<?php include("siteTitle.php"); ?>

		<div id="postContent">

			<!-- Content -->
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

				<div class="post music" id="postId">

					<div class="postTitle">
						<h1><?php echo $post->post_title; ?></h1>
					</div>
					<!-- <div class="postDate">
						<h3><?php the_time('d / m / y') ?></h3>
					</div> -->

					<div class="postContent">
						
						<?php the_content(); ?>  
					</div>
				</div>


			<?php endwhile; ?>

			<?php else : ?>
			<!-- Error message if no posts -->
			<?php endif; ?>

		</div>


	</div>


	<?php include("socialFooter.php"); ?>


	<?php include("facebookInclude.php"); ?>

</body>
</html>