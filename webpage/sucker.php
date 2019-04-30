<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<?php 			
			$file = 'suckers.txt';
			if ($_REQUEST["name"] && $_REQUEST["Section"]!="NULL" && $_REQUEST["ccnumber"]) {?>

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			

			<dt>Name</dt>
			<dd>
				<?= $name=$_REQUEST["name"]; file_put_contents($file,$name.";",FILE_APPEND);?>			
			</dd>


			<dt>Section</dt>
			<dd>
				<?= $section=$_REQUEST["Section"]; file_put_contents($file,$section.";",FILE_APPEND)?>
			</dd>


			<dt>Credit Card</dt>
			<dd><?= 
				
				$ccnum=$_REQUEST["ccnumber"]; 
				file_put_contents($file,$ccnum.";",FILE_APPEND)?>
				(<?= $cc=$_REQUEST["cc"];file_put_contents($file,$cc.";\r\n",FILE_APPEND)?>)

			</dd>

				
			
			<dt>Here all suckers who submitted here: </dt>
			<dd>
				<pre><?=file_get_contents($file);?></pre>
			</dd>

		
		</dl>

			<?php
			} else {
			?>

				<h1>Sorry!</h1>

		<p>You didnt fill out the form properly. <a href="buyagrade.html">Try again?</a></p> 
			<?php }
			
			?>




	</body>
</html>  