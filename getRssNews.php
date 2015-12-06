<!DOCTYPE html>
<html>
<head><title>rss feed</title>
<link type="text/css" rel="stylesheet" href="CSS/rssStyle.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/css/bootstrap.min.css"/>
</head>
<body>
<?php
//some code was retrieved from http://www.w3schools.com/php/php_ajax_rss_reader.asp
 $xml = ("XML/rssfeed.xml");
 $xmlFile = new DOMDocument();
 $xmlFile->load($xml);
 $channel = $xmlFile->getElementsByTagName('channel')->item(0);
 $ch_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
 $ch_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
 

?>
<div class="container-fluid" id="rsswrap" >
	<div class="row" id="rsshead">
		<p><a id="rsshead" href="<?php echo($ch_link); ?>"><?php echo($ch_title); ?></a></p>
	</div>
	<div id="rsscontent" class="row">
<?php
$news = $xmlFile->getElementsByTagName('item');
for($i=0; $i<3; $i++){
	if($i>0){echo("<hr></hr>");}
	$title = $news->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
	$link = $news->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
	$image=$news->item($i)->getElementsByTagName('image')->item(0)->childNodes->item(0)->nodeValue;
	$description = $news->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

?>	
			
			<div id="headlineTitle">
				<p><a href="<?php echo($link); ?>"><?php echo($title); ?></a></p>
			</div>
			<div class="row">
			<div class="col-xs-6">
				<img src="<?php echo($image);?>" class="rssimg"></img>
			</div>
			<div class="col-xs-6">
				<p class="rssdescrip"> <?php echo($description); ?> </p>
				
			</div>
			
		</div>
		
		<?php

		if($i>1){echo("<br/>");}
		}
		?>
	</div>
	</div>
</body>
</html>