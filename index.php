<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' type='text/css' media='screen' href='style.css'>
		<?php wp_head();?>
	</head>
	<body>
		<header>
			<div class="logo">
				<img src="<?php echo get_template_directory_uri();?>/images/sapo.png" alt="Logo" class="logo">
			</div>
			<?php
				$arg = array(
					'theme_location' => 'main-menu',
				);
				wp_nav_menu($arg);
			?>
		</header>
		<main>
			<div class="posts-container">
				<?php
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							?>
							<article class="post">
								<h2><?php the_title(); ?></h2>
								<div><?php the_excerpt(); ?>
								<?php the_post_thumbnail('medium'); ?></div>
							</article>
							<?php
						}
					} else {
						?>
						<p>No posts found.</p>
						<?php
					}
				?>
			</div>
		</main>
		<footer>
			<?php
				$arg = array(
					'theme_location' => 'footer-menu',
				);
				wp_nav_menu($arg);
			?>
		</footer>
		<?php wp_footer();?>
	</body>
</html>