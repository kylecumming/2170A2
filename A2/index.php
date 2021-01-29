<?php
/*
 * CSCI 2170: ONLINE EDITION, WINTER 2021
 * STARTER CODE FOR ASSIGNMENT 2
 * 
 * This code was customized by Dr. Raghav V. Sampangi (raghav@cs.dal.ca)
 * using the code from the Bootstrap "Album" example available at:
 * https://getbootstrap.com/docs/5.0/examples/album/ (accessed 11 Jan 2021)
 * (Created by: Mark Otto, Jacob Thornton, and Bootstrap contributors)
 * The Album example is (c) Bootstrap, and is free to download and customize.
 *
 */

	require "includes/header.php"; 
	require_once "includes/db.php";
?>

		<main id="pg-main-content">
			<div class="py-5 text-center container">
				<div class="row">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h1 class="fw-light">SimpleSearch for SimpleBooks Inc.</h1>
						<p class="lead text-muted">Search books on this store either by author name or book name. Enter your search keyword, choose the category and click search!</p>
					</div>
				</div>
			</div>

			<div class="container">
				<form class="col-lg-6 col-md-8 mx-auto">
					<input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search-keywords">
					<div class="space-above-below">
						<!-- ADD YOUR RADIO BUTTON CODE HERE -->
					</div>
				</form>
				
				<section class="space-above-below">
					<h2 class="fw-light">Search Results</h2>
					<hr>
					<!-- UPDATE THIS CODE HERE TO IMPLEMENT FUNCTIONALITY USING DATA FROM THE DATABASE -->

					<!--
						NOTE --
						1. THE SAMPLE SECTIONS GIVEN BELOW ARE TO SHOW YOU HOW THE OUTPUT IS EXPECTED TO LOOK.
						2. AFTER YOU HAVE CONNECTED YOUR CODE TO THE DATABASE AND HAVE IMPLEMENTED THE SEARCH, THE RESULTS MUST LOOK AS SHOWN BELOW.
						3. THE ID's MUST INCREMENT IN VALUE AS WELL, AS SHOWN BELOW.
						4. AFTER YOU HAVE IMPLEMENTED YOUR SEARCH, YOU CAN COMMENT OR REMOVE THE SAMPLE CODE GIVEN BELOW.
					-->
					<section id="result1" class="space-above-below">
						<h4 class="fw-light">Book name 1</h4>
						<h5 class="fw-light">Author name 1</h5>
						<p class="text-muted">Book summary</p>
						<ul class="text-muted list-unstyled">
							<li>Number of books currently available @ SimpleBooks: <strong>4</strong></li>
						</ul>
						<button type="button" class="btn btn-primary">More details &raquo;</button>
					</section>
					<section id="result2" class="space-above-below">
						<h4 class="fw-light">Book name 2</h4>
						<h5 class="fw-light">Author name 2</h5>
						<p class="text-muted">Book summary</p>
						<ul class="text-muted list-unstyled">
							<li>Number of books currently available @ SimpleBooks: <strong>6</strong></li>
						</ul>
						<button type="button" class="btn btn-primary">More details &raquo;</button>
					</section>
				</section>

			</div>

		</main>

<?php require "includes/footer.php"; ?>