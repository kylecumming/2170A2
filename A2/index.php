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
						<!-- Creating radio buttons with same names but with different id's and values so only one can be pressed at a time -->
						
						<div>
							<input type="radio" name="search-option" id="search-author-choice" value="author">
							<label for="search-author-choice">Search by author name</label>
						</div>
						<div> 
							<input type="radio" name="search-option" id="search-bookname-choice" value="bookname">
							<label for="search-bookname-choice">Search by book name</label>
						</div>
					</div>
					
				</form>
				
				<section class="space-above-below">
					<h2 class="fw-light">Search Results</h2>
					<hr>
					<!-- UPDATE THIS CODE HERE TO IMPLEMENT FUNCTIONALITY USING DATA FROM THE DATABASE -->
					<?php 
						//Getting input from searchbar
						$radiocheck = $_GET['search-option'];
					//checking if the author radio button was pressed
					if($radiocheck == "author" && $_GET['search-keywords'] != ''){
						//Getting input from searchbar
						$input = $_GET['search-keywords'];
						$querySQL = "SELECT * FROM `simplebooks-inventory` WHERE `AuthorName` LIKE '%$input%'";
						$result = $dbconnection->query($querySQL);
						
						//Checking whether there are any search results from the database
						if($result->num_rows != 0){
							//Loop to print out all database entries which match the search results
							while($row = $result->fetch_assoc()){
								//Variable to increment the id number of the sections
								$i++;
								//Printing out the sections that match the string inputted
								echo "<section id='result$i' class='space-above-below'>\n";
									echo "<h4 class='fw-light'>" . $row[BookName] . "</h4>\n";
									echo "<h5 class='fw-light'>" . $row[AuthorName] . "</h5>\n";
									echo "<p class='text-muted'>" . $row[BookSummary] . "</p>\n";
									echo "<ul class='text-muted list-unstyled'>" .
										"<li>" . "Number of books currently available @ SimpleBooks:" . "<strong>" . $row[QuantityAvailable] . "</strong>" . "</li>" .
									"</ul>\n";
									echo "<button type='button' class='btn btn-primary'>" . "More details" . "&raquo;" . "</button>\n";
								echo "</section>\n";
								
							}
							
						}
						//showing error message if radio button was pressed but no results were found
						else{
							echo "Sorry, no books available for your search. Try searching with another keyword.";
						}
					}
					//checking if the bookname radio button was pressed
					else if($radiocheck == "bookname" && $_GET['search-keywords'] != ''){
						//getting input from search bar
						$input = $_GET['search-keywords'];
						$querySQL = "SELECT * FROM `simplebooks-inventory` WHERE `BookName` LIKE '%$input%'";
						$result = $dbconnection->query($querySQL);
				
						//Checking whether there are any search results from the database
						if($result->num_rows != 0){
							//Loop to print out all database entries which match the search results
							while($row = $result->fetch_assoc()){
								//Variable to increment the id number of the sections
								$i++;
								//Printing out the sections that match the string inputted
								echo "<section id='result$i' class='space-above-below'>\n";
									echo "<h4 class='fw-light'>" . $row[BookName] . "</h4>\n";
									echo "<h5 class='fw-light'>" . $row[AuthorName] . "</h5>\n";
									echo "<p class='text-muted'>" . $row[BookSummary] . "</p>\n";
									echo "<ul class='text-muted list-unstyled'>" .
										"<li>" . "Number of books currently available @ SimpleBooks:" . "<strong>" . $row[QuantityAvailable] . "</strong>" . "</li>" .
									"</ul>\n";
									echo "<button type='button' class='btn btn-primary'>" . "More details" . "&raquo;" . "</button>\n";
								echo "</section>\n";
							}
						}
						//showing error message if radio button was pressed but no results were found
						else{
							echo "Sorry, no books available for your search. Try searching with another keyword.";
						}
					}
					//showing error message if no radio buttons were pressed
					else{
						echo "Please input search keywords to preform a search";
					}
					?>

					<!--
						NOTE --
						1. THE SAMPLE SECTIONS GIVEN BELOW ARE TO SHOW YOU HOW THE OUTPUT IS EXPECTED TO LOOK.
						2. AFTER YOU HAVE CONNECTED YOUR CODE TO THE DATABASE AND HAVE IMPLEMENTED THE SEARCH, THE RESULTS MUST LOOK AS SHOWN BELOW.
						3. THE ID's MUST INCREMENT IN VALUE AS WELL, AS SHOWN BELOW.
						4. AFTER YOU HAVE IMPLEMENTED YOUR SEARCH, YOU CAN COMMENT OR REMOVE THE SAMPLE CODE GIVEN BELOW.
					-->
				</section>

			</div>

		</main>

<?php require "includes/footer.php"; ?>