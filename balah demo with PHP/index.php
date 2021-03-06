﻿<?php // The Serve-side BALAH object (PHP)
    require_once ('libs/server_balah.php');
    $balah = new ServerBALAH('n');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br" >
    <head>
        <title>BALAH</title>
        <link type="text/css" rel="stylesheet" href="balah.css">
        <!-- BALAH JS CONSTANTS -->
        <?php $balah->js_header('#main'); ?>
        <!-- Inport JS Libs -->
        <script type="text/javascript" src="libs/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="libs/hashlistener2.js"></script>
        <script type="text/javascript" src="libs/client_balah.js"></script>
    </head>

    <!-- Very, Very Simple BALAH Example -->
    <body>
		<div>
			<h1><span>Bookmarkable Ajax Links And HTTP</span></h1>
			<ul class="menu">
				<li><a href="<?php echo $balah->build_link(''); ?>" title="BALAH Link">Home</a></li>
				<li><a href="<?php echo $balah->build_link('pages/information.php'); ?>" title="BALAH Link">Information</a></li>
				<li><a href="<?php echo $balah->build_link('pages/something.html'); ?>" title="BALAH Link">Other Link</a></li>
				<li><a href="./libs" title="Non-BALAH Link">Download</a></li>
			</ul>
		</div>
        <!-- The default TARGET -->
		<div id='main'><?php $balah->include_httpage('intro.php'); ?></div>
    <div id="footer">By: Marcelo EDEN (<a href="http://on.3den.org">on.3DEN.org</a>)<br/>
    	Copyright © 2007-2009 Marcelo Eden Siqueira.<br />
    </div>
	</body>
</html>
