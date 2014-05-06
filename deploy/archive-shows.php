<!DOCTYPE html>
<html>
	<?php include("header.php"); ?>
<body>

	<div id="siteContainer">


		<?php include("siteTitle.php"); ?>

		<div id="postContent">

			<div class="post shows" id="postId">

				<div class="postTitle">
					<h1>Shows</h1>
				</div>

			<!-- Content -->
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

				<div class="postContent shows">

					<div class="showTitle">
						<h3><?php echo $post->post_title; ?></h3>
					</div>
					
					<?php the_content(); ?>  
				</div>
				


			<?php endwhile; ?>


			<?php else : ?>
				

					<div class="postContent">
						
						No Current shows.
					</div>

			<?php endif; ?>

			</div>


		</div>


	</div>


	<?php include("socialFooter.php"); ?>


	<?php include("facebookInclude.php"); ?>

</body>
</html>