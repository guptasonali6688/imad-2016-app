

<<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="_1.css">


<style> 

div.search {
	display:inline;
	text-align:center;
}
p.s-book {
	font-size:60px;
	padding:0px;
	display:inline;
	color:black;
}

input[type=text] {
    width: 500px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('images/searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=submit] {
	font-size:32px;
	background-color:grey;
	color:white;
}

a {
	text-decoration:none;
	display: block;
    color: white;
    text-align: center;
    padding: 0px;
    text-decoration: none;
	font-size:30px;
	background-color:#33333f;
	}
a:hover {
	background-color:black;


</style>
</head>
<body>

			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="book.html">Download-ebook</a></li>
				<li><a href="feed.html">feedback</a></li>
				<li><a href="search.php">Search</a></li>
				
				<li style="float:right;"><a href="Sign-up.html">Sign-up</a></li>	
			</ul>
		
		<div class="search" >
			<p class="s-book"><a href="#">Search your E-book</a></p>

			<form name="form1" method="get" action="search.php">
				<input type="text" name="query" placeholder="Search..">
				<input type="submit" id="butt" name="submit" value="Search" />
			</form>
		</div>
		
		
	
</body>
</html>

<?php
include 'db-login.php';

	$query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
    
  if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM book_search
            WHERE title LIKE '%$query%' OR text LIKE '%$query%'") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // book_search is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0)
		{ 
			// if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
               echo '<p><h1>'.$results['text'].'</h1></p>';
 
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "<h1>No results</h1>";
        }
         
    }
    else{ // if query length is less than minimum
        //echo "<h1>Minimum length is ".$min_length."</h1>";
    }

?>