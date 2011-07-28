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
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>

  <div id="wrapper-builder">

	<div id ="more-info">
	Created by Jesus Manuel Olivas | 
	<a href="http://twitter.com/jmolivas" target="_blank">@jmolivas </a> <br/>
	<a id="more" href="#">more info</a>
	<div id="info">
		<p>
		Based on : <br/>
		googleCard – google+ hovercard style box in PHP <br/>
		<a href="http://plusdevs.com/googlecard-googleplus-php-scraper/" target="_blank">
		http://plusdevs.com/googlecard-googleplus-php-scraper/
		</a> 
		<br/>
       		</p><p>
		PlusFeed - Unofficial Google+ User Feeds <br/>
		<a href="http://plusfeed.appspot.com/" target="_blank">
		http://plusfeed.appspot.com/ 
		</a>
		<br/>
		</p><p>
		Using the following library to read/post Atom feed <br/>
		<a href="http://www.scriptol.com/rss/atom-reader.php" target="_blank">
		http://www.scriptol.com/rss/atom-reader.php 
		</a>
		<br/>
		</p><p>
		More info see blog post post : <br/>
		<a href="http://jmolivas.com/google-plus-feed" target="_blank">
		http://jmolivas.com/google-plus-feed
		</a> 
		<br/>
		</p>
	</div>
	</div>

	
	<form id="googleplusfeed-form">
		<p>
			<label>Google+ Id : </label>
			<input type="text" id="plus_id" name="plus_id" value="107277908730749548010" />
			<button id="form-submit" type="button">Generate</button>
		</p>
	</form>

    	<div id="googleplusfeed-widget-wrapper">
		<iframe id="googleplusfeed-widget-frame" src="widget.php" border="1">loading...</iframe>
	</div> 
    
  </div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21900600-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</body>
</html>

