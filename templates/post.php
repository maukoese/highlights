

		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1><?php echo( $post -> name ); ?></h1>
					<p><?php echo( $post -> subtitle ); ?></p>
				</header>
			</section>

		<!-- Three -->
			<section id="three" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="<?php echo( $post -> avatar ); ?>" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2><?php echo( $post -> name ); ?></h2>
						</header>
						<article>
							<?php echo( $post -> details ); ?>
						</article>
					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>


		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Add Comment</h2>
					</header>
					<form method="post" action="#">
						<div class="row uniform">
							<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
							<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
							<div class="12u$"><textarea name="message" id="message" placeholder="Comment" rows="4"></textarea></div>
							<div class="12u$">
								<ul class="actions">
									<li><input type="submit" value="Send Message" class="special" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>