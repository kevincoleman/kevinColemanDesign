<?php

header('Location: design.php'); exit;

if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod'))
{
	header('Location: http://www.kevincolemandesign.com/i/design.php'); exit;
} else {
	header('Location: http://www.kevincolemandesign.com/design.php'); exit;
}
?>