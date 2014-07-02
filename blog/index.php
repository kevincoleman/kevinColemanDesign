<?php
include('../common.php');
Head('http://kevincoleman.blogspot.com/feeds/posts/default', 'http://www.kevincolemandesign.com/');
OpenBody('http://www.kevincolemandesign.com/');
?>

<div id="wrap">
<div id="designs-wrap">
<a href="http://feeds.feedburner.com/TheDesignsOfHumanity"><img src="img/rss.png" class="rss" alt="rss" /></a><span class="title">The Designs of Humanity</span><br /><br />
<ul>
<?php

# INSTANTIATE CURL.
$curl = curl_init();

# CURL SETTINGS.
curl_setopt($curl, CURLOPT_URL, "http://feeds.feedburner.com/TheDesignsOfHumanity");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);

# GRAB THE XML FILE.
$xmlDesigns = curl_exec($curl);

curl_close($curl);

# SET UP XML OBJECT.
$xmlObjDesigns = simplexml_load_string( $xmlDesigns );

$tempCounter = 0;

foreach ( $xmlObjDesigns->channel->item as $item )

{                    
    # DISPLAY ONLY 8 ITEMS.
    if ( $tempCounter < 5 )
    {$update = str_replace("border=\"0\"", "", ($item->children("content", true)));

		$postlink = $item->link;

        echo "<li class=\"designs\"><a href=\"$postlink\" class=\"postlink\"><h1>$item->title</h1></a>
		$update</li>
";
    }

    $tempCounter += 1;
}

?>
<li class="designs" title="Subscribe to RSS Feed" style="padding: 0;"><a href="http://kevincoleman.blogspot.com/atom.xml?alt=rss" style="display: block; width: 100%; height: 100%; text-decoration: none;"><img src="img/rss.png" class="rss" alt="rss" style="padding: 10px 0 10px 10px;" /><span style="position: relative; bottom: 13px;"> Subscribe!</span></a></li>
</ul>

</div> <!--designs-wrap-->
</div> <!--wrap-->

<?php
CloseBody();
?>