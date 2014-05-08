<?php 
	
	// Header


?>

<div class="header">

	<div class="siteTitle">
		<h1>Christian Dee</h1>
	</div>

	<div class="mainMenu">

		<ul>
			<li><a href="/home"><h3>Home</h3></a></li>
			<li><a href="/news"><h3>News</h3></a></li>
			<li><a href="/music"><h3>Music</h3></a></li>
			<li><a href="/media"><h3>Media</h3></a></li>
			<?php $hasShowsPosts = get_posts( array('post_type' => 'shows', 'posts_per_page' => -1)); ?>
			<?php if($hasShowsPosts) : ?>
			<li><a href="/shows"><h3>Shows</h3></a></li>
		<?php endif; ?>
			<li><a href="/contact"><h3>Contact</h3></a></li>
		</ul>

	</div>

</div>