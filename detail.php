<!DOCTYPE html>
<html lang="en">


<?php
require_once 'data.php';
$person = $data[$_GET['id']]
?>

<head>
	<title><?= $person['personal_info']['name'] . "'s Resume"; ?></title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your name's resume">
	<meta name="author" content="Your name">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="<?= $person['personal_info']['img']  ?>" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"></h1>
								<div class="title mb-3"><?= $person['personal_info']['job_title'] ?></div>
								<ul class="list-unstyled">
									<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $person['personal_info']['email'] ?></a></li>
									<li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $person['personal_info']['phone_number'] ?></a></li>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<li class="mb-3"><a class="text-link" href="<?= "https://" . $person['links']['linked_in'] ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $person['links']['linked_in'] ?></a></li>
									<li class="mb-3"><a class="text-link" href="<?= "https://" . $person['links']['github'] ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $person['links']['github'] ?></a></li>
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->

					</div><!--//col-->
				</div><!--//row-->
			</header>
			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<p class="mb-0"><?= $person['personal_info']['summary'] ?></p>
					</div>
				</section><!--//summary-section-->
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<!-- Loop through each resume item and output its data -->
									<?php foreach ($person['resume_items'] as $item) : ?>
										<article class="resume-timeline-item position-relative pb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?= $item['position'] ?></h3>
													<div class="resume-company-name ms-auto"><?= $item['company'] ?></div>
												</div><!--//row-->
												<div class="resume-position-time"><?= $item['time'] ?></div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p><?= $item['desc'] ?></p>
												<?php if (!empty($item['achievements'])) : ?>
													<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
												<?php endif; ?>
												<ul>
													<?php foreach ($item['achievements'] as $achievement) : ?>
														<li><?= $achievement ?></li>
													<?php endforeach; ?>
												</ul>
												<?php if (!empty($item['technologies'])) : ?>
													<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<?php endif; ?>

												<ul class="list-inline">
													<?php foreach ($item['technologies'] as $technology) : ?>
														<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= $technology ?></span></li>
													<?php endforeach; ?>
												</ul>
											</div>
										</article>
									<?php endforeach; ?>
								</div>
							</div>
						</section>
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php foreach ($person['skills']['main'] as $skill => $mastery) : ?>
											<li class="mb-2">
												<div class="resume-skill-name"><?= $skill ?></div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= $mastery ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<?php foreach ($person['skills']['other'] as $skill) : ?>
											<li class="list-inline-item"><span class="badge badge-light"><?= $skill; ?></span></li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php foreach ($person['education'] as $education) : ?>
										<li class="mb-2">
											<div class="resume-degree font-weight-bold"><?= $education['degree'] ?></div>
											<div class="resume-degree-org"><?= $education['university'] ?></div>
											<div class="resume-degree-time"><?= $education['university_timeline'] ?></div>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<?php foreach ($person['awards'] as $award) : ?>
										<li class="mb-2 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name"><?= $award["title"]; ?></div>
											<div class="resume-award-desc"><?= $award["desc"]; ?></div>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<?php foreach ($person['languages'] as $language) : ?>
										<li class="mb-2">
											<span class="resume-lang-name font-weight-bold"><?= $language; ?></span>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php foreach ($person['interests'] as $interest) : ?>
										<li class="mb-1"><?= $interest; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</section>
					</div>
				</div>
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4 justify-content-center">
						<?php foreach ($person['projects'] as $project) : ?>
							<div class="col-md-6 mb-4 d-flex align-items-stretch">
								<div class="card w-100">
									<img src="<?= $project['img']; ?>" alt="<?= $project['title']; ?>" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?= $project['title']; ?></h5>
										<p class="card-text"><?= $project['desc']; ?></p>
										<a href="<?= $project['link']; ?>" class="btn btn-outline-primary">Go to link</a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
			</div>
			</section>
		</div>
		</div>
	</article>
	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= $name ?> </small>
	</footer>
</body>

</html>