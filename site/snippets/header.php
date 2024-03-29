<header class="sticky mb-5 header">
	<nav class="navbar navbar-expand-sm navbar-dark w-100 justify-content-between pt-3">
		<div class="container d-flex align-items-center">
			<div class="row d-flex">
				<a href="<?= $site->url() ?>" class="navbar-brand">
					<h1 class="h1 moving-text"><?= $site->title() ?></h1>
				</a>
				<div class="title justify-content-start">
					<p id="word"></p>
					<p class="blink">|</p>
				</div>
			</div>
			<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-label="Expand" aria-controls="nav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="nav">
				<!-- use lists for links -->
				<ul class="navbar-nav d-flex align-items-center">
					<?php foreach ($site->children()->listed() as $item): ?>
					<li class="nav-item me-md-5">
						<a <?php e($item->isOpen(), 'aria-current="page", class="text-decoration-underline"') ?> href="<?= $item->url() ?>" class="nav-link">
							<?= $item->title()->esc() ?>
						</a>
					</li>
					<?php endforeach ?>
					<li class="nav-item">
						<a class="nav-link disabled" aria-current="copyright <?= date("Y"); ?>">
							&copy; <?= date("Y"); ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>