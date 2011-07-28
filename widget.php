<?php
/*
 *	Sample implementation
 */

/**
*	Copyright (C) 2011  jmolivas
*	This is a proof of concept Google plus profile and stream reader
*	http://jmolivas.com/google-plus-feed
*
*	Based on :
*	googleCard – google+ hovercard style box in PHP
*	http://plusdevs.com/googlecard-googleplus-php-scraper/
*       
*	PlusFeed - Unofficial Google+ User Feeds
*	http://plusfeed.appspot.com/
*
*	Using the following library to read/post Atom feed
*	http://www.scriptol.com/rss/atom-reader.php
*
*	This program is free software: you can redistribute it and/or modify
*	it under the terms of the GNU General Public License as published by
*	the Free Software Foundation, either version 3 of the License, or
*	(at your option) any later version.
*
*	This program is distributed in the hope that it will be useful,
*	but WITHOUT ANY WARRANTY; without even the implied warranty of
*	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*	GNU General Public License for more details.
*
*	You should have received a copy of the GNU General Public License
*	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Google Plus Feed</title>
  <meta name="description" content="Google Plus Feed">
  <meta name="author" content="jesus.olivas@gmail.com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>
<body>
<?php
	// read id form URL if not put your default google+ id here :
	$plus_id = isset($_REQUEST["plus_id"])?$_REQUEST["plus_id"]:'107277908730749548010';
	// include our scraper class
	include_once('googleCard.php');
	// initiate an instance of our scraper class
	$plus = new googleCard($plus_id);
	// enable caching (off by default)
	$plus->cache_data = 0;
	// do the scrape
	$data = $plus->googleCard();
?>


  <div id="wrapper">
    	
	<div id="profile-data">
<?php

// if we have data, show the output
if (isset($data) && !empty($data['name']) && !empty($data['count']) && !empty($data['img']))
{
?>
	<div id="plus_card">
		<div id="plus_card_image">
			<a href="<?php echo $data['url']; ?>">
				<?php echo '<img src="' . $data['img'] . '" width="80" height="80" />'; ?>
			</a>
		</div>
		<div id="plus_card_name_add_wrapper">
			<div id="plus_card_name">
				<a href="<?php echo $data['url']; ?>"><?php echo $data['name'] ?></a>
			</div>
			<span id="plus_card_add">
				<a href="<?php echo $data['url']; ?>">Add to circles</a>
			</span>
		</div>
		<div id="plus_card_count">
			<p>In <?php echo $data['count']; ?> people's circles</p>
		</div>
	</div>
<?php
}
// else show an error
else
{
	echo 'Couldn\'t get data from google+';
}
?>
    </div> 
    <div id="feed-items">
      <?php	
	require_once("atomlib.php");
	$url = "http://plusfeed.appspot.com/".$plus_id;
	echo Atom_Links($url, 15);	
      ?>
    </div>

    <p>
	<a href="http://www.scriptol.com/rss/atom-reader.php" target="_blank">Generate Google Plus Feed widget</a>
    </p>

  </div> 

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21456041-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 
</body>
</html>

