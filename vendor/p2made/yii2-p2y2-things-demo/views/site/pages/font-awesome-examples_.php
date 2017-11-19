
		<section id="stacked">
			<h2>Stacked Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="margin-bottom">
						<?= FA::s(FA::_TWITTER, FA::_SQUARE_O, ['class' => 'fa-lg']) ?>
						<code>FA::s(FA::_TWITTER, FA::_SQUARE_O)</code><br>

						<?= FA::s(FA::vs(FA::_FLAG), FA::_CIRCLE, ['class' => 'fa-lg']) ?>
						<code>FA::s(FA::vs(FA::_FLAG), FA::_CIRCLE)</code><br>

						<?= FA::s(FA::vs(FA::_TERMINAL), FA::_SQUARE, ['class' => 'fa-lg']) ?>
						<code>FA::s(FA::vs(FA::_TERMINAL), FA::_SQUARE)</code><br>
					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						To stack multiple icons, use the <code>fa-stack</code> class on the parent, the <code>fa-stack-1x</code>
						for the regularly sized icon, and <code>fa-stack-2x</code> for the larger icon. <code>fa-inverse</code>
						can be used as an alternative icon color. You can even throw <a href="#larger">larger icon</a> classes on the parent
						to get further control of sizing.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="margin-bottom">
						<?= FA::is(
							FA::i(FA::_BAN)->addCssClass('text-danger'),
							FA::i(FA::_CAMERA),
							['class' => 'fa-lg']
						) ?>
						<code>FA::is(FA::i(FA::_BAN)->addCssClass('text-danger'), FA::i(FA::_CAMERA))</code><br>
					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<div class="alert alert-success">
						<ul class="fa-ul">
							<li>
								<?= FA::fw(FA::_INFO_CIRCLE)->li()->size(FA::SIZE_LARGE) ?>
								<em>p2made shortcut</em><br>
								Shortcut for a stack with the larger icon on top. No longer so hacky thanks to updates in @rmrevin's FontAwesome.
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="margin-bottom">
						<?= FA::ban(FA::i(FA::_CAMERA), ['class' => 'fa-lg']) ?>
						<code>FA::ban(FA::i(FA::_CAMERA))</code><br>
					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						<em>p2made shortcut</em><br>
						An even shorter version for the most common use of an inverted stack, a ban icon.
					</p>
				</div>
			</div>
		</section><!-- / Stacked Icons -->

