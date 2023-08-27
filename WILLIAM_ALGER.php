<!DOCTYPE html>
<html lang="en">

<!-- 

	Name: William Alger
	Class: ASE 230
	Date: 8/26/2023
	Type: Assignment 1

	Comments:

	I replaced a lot of the repeated elements with php for-loops. Assign the description at the top and they are rendered at the bottom.
	I thought this made the page a lot more dynamic, and easier to change information later on.

	Usage of chatbots:

	I used GPT-4 a little bit to speed up the tedious process of making the arrays from information needed in the HTML components.
	example converation -> create a key-value array that contains a field for each description used in this <article>
						-> OK, now keeping all of the original classes and formatting, use this array and PHP shorthand to loop through the descriptions and output the results

-->


<?php

// personal info
$name = "Will Alger";
$job_title = "Full Stack Developer";
$email = "algerw@icloud.com";
$phone_number = "502-758-4615";
$summary = "Adaptable CS undergraduate graduating in December 2023 with full-stack experience seeking 
full-time opportunity. Committed to continuous learning and growth in a dynamic and problem-solving environment.";

// links
$linked_in = "linkedin.com/in/williamalger/";
$github = "github.com/will-alger";

// education
$university = "Northern Kentucky University";
$university_timeline = "2020 - 2023";
$degree = "BS in Computer Science";


// skills
$skills = array(
	array("JavaScript", "75%"),
	array("Node.js", "50%"),
	array("Java", "75%"),
	array("C++", "75%"),
	array("Python", "80%"),
	array("HTML/CSS", "80%"),
	array("jQuery", "95%"),
	array("SQL", "60%"),
);
$skills_other = ["Docker", "Git", "Jira", "Azure", "Postman"];

// awards
$awards = array(
	array("name" => "Governors School for Entrepreneurs Scholarship", "desc" => "Tuition award for completing GSE summer workshop program"),
	array("name" => "Nightscout Foundation Scholarship", "desc" => "Academic award towards students in STEM with diabetes")
);

// languages
$languages = ["English", "Spanish (some)"];

// interests
$interests = ["Running", "Cycling", "Lifting weights", "Cooking"];

// projects
$projects = array(
	// 1
	array(
		"name" => "Search Engine for Full-Stack Wiki Application",
		"desc" => "
			- Implemented an inverted-index based search engine for a full-stack wiki app utilizing Python, Flask, 
			and SQLite with real-time indexing to ensure up to date search results.",
		"img" => "assets\images\search.jpg",
		"link" => "",
	),
	// 2
	array(
		"name" => "Linear Feedback Shift Register: Visual Tool ",
		"desc" => "
			- Developed a dynamic LFSR visualizer on GitHub Pages using JavaScript, jQuery, Bootstrap, HTML & CSS
			- Empowers cryptology students to deepen understanding of digital encryption.
			- Visualizes a core concept in action for better learning experience.
		",
		"img" => "assets\images\LFSR.png",
		"link" => "https://github.com/Will-Alger/LFSR",
	)
);

// resume descriptons
$resume_items = [
	// 1
	[
		'position' => 'Software Engineer (intern)',
		'company' => 'Kroger Technology',
		'time' => 'May 2023 - Present',
		'description' => 'Developing and maintaining Node.js applications as part of an authentication and authorization team.',
		'achievements' => [],
		'technologies' => ['JavaScript', 'Node.js', 'jQuery', 'HTML/SASS', 'Azure AD B2C'],
	],
	// 2
	[
		'position' => 'Undergraduate Teaching Assistant',
		'company' => 'Northern Kentucky University',
		'time' => 'Aug 2022 -  Dec 2022',
		'description' => 'Teaching assistant for CSC 425 Advanced Programming Methods class',
		'achievements' => [
			'Supported 30+ students in an upper-level computer science course in C++.',
			'Developed and led interactive class workshops and live coding sessions, breaking down complex programming concepts in C++ into simplified, digestible explanations.',
			'Developed and led interactive class workshops and live coding sessions, breaking down complex programming concepts in C++ into simplified, digestible explanations.'
		],
		'technologies' => ['C++'],
	],
	// 3
	[
		'position' => 'Software Engineer (intern)',
		'company' => 'Kroger Technology',
		'time' => 'May 2022 - Aug 2022',
		'description' => 'Front-End developement of dashboards and associate technology',
		'achievements' => [
			'Implemented a gamification leaderboard widget in Typescript, React, and Redux aimed at boosting employee productivity (piloted in multiple Kroger stores).',
		],
		'technologies' => ['React/Redux', 'TypeScript',  'React', 'HTML/SASS'],
	],
];
?>

<head>
	<title><?= $name . "'s Resume"; ?></title>

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
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="assets/images/profile.jpg" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"></h1>
								<div class="title mb-3"><?= $job_title ?></div>
								<ul class="list-unstyled">
									<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $email ?></a></li>
									<li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $phone_number ?></a></li>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<li class="mb-3"><a class="text-link" href="<?= "https://" . $linked_in ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $linked_in ?></a></li>
									<li class="mb-3"><a class="text-link" href="<?= "https://" . $github ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $github ?></a></li>
									<!-- I don't have a personal website yet... though I do have a cool domain I've been waiting to use for this purpose. (willalger.dev) -->
									<!-- <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li> -->
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
						<p class="mb-0"><?= $summary ?></p>
					</div>
				</section><!--//summary-section-->
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<!-- Loop through each resume item and output its data -->
									<?php foreach ($resume_items as $item) : ?>
										<article class="resume-timeline-item position-relative pb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?= $item['position'] ?></h3>
													<div class="resume-company-name ms-auto"><?= $item['company'] ?></div>
												</div><!--//row-->
												<div class="resume-position-time"><?= $item['time'] ?></div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p><?= $item['description'] ?></p>
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
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->
									<?php endforeach; ?>
								</div><!--//resume-timeline-->
							</div>
						</section><!--//projects-section-->
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php foreach ($skills as $skill) : ?>
											<li class="mb-2">
												<div class="resume-skill-name"><?= $skill[0] ?></div>
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= $skill[1] ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<?php foreach ($skills_other as $skill) : ?>
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
									<li class="mb-2">
										<div class="resume-degree font-weight-bold"><?= $degree ?></div>
										<div class="resume-degree-org"><?= $university ?></div>
										<div class="resume-degree-time"><?= $university_timeline ?></div>
									</li>
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<?php foreach ($awards as $award) : ?>
										<li class="mb-2 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name"><?= $award["name"]; ?></div>
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
									<?php foreach ($languages as $language) : ?>
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
									<?php foreach ($interests as $interest) : ?>
										<li class="mb-1"><?= $interest; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</section><!--//interests-section-->
					</div>
				</div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4 justify-content-center">
						<?php foreach ($projects as $project) : ?>
							<div class="col-md-6 mb-4 d-flex align-items-stretch">
								<div class="card w-100">
									<img src="<?= $project['img']; ?>" alt="<?= $project['name']; ?>" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?= $project['name']; ?></h5>
										<p class="card-text"><?= $project['desc']; ?></p>
										<a href="<?= $project['link']; ?>" class="btn btn-outline-primary">Go to link</a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
			</div>
			</section><!--//projects-section-->
		</div><!--//resume-body-->
		</div>
	</article>
	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= $name ?> </small>
	</footer>
</body>

</html>