<?php

$file = $_POST['sql'];

$fields     = '';
$primarykey = '';
$otherkey   = '';
$table      = '';

$contents = explode("\n",$file);
foreach ($contents as $key=>$line) {

	$line = trim($line);

	if (preg_match('/CREATE\sTABLE\sIF\sNOT\sEXISTS\s\`(.*?)\`/i',$line,$tablematch))
	{
		$table .= '$this->dbforge->create_table('."'".$tablematch[1]."'".');'.PHP_EOL;
		continue;
	}

	if (preg_match('/^`(.*?)`\s(.*?),$/i',$line,$aMatch)) {
		$fields .='$this->dbforge->add_field("'.$aMatch[1].' '.$aMatch[2].'");'.PHP_EOL;
	}

	// lets get our keys and such!
	if (preg_match('/PRIMARY\sKEY\s+\(\`(.*?)\`\)/i',$line,$primary)) {
		$primarykey .= '$this->dbforge->add_key('."'".$primary[1]."'".', TRUE);'.PHP_EOL;
	}
	if (preg_match('/KEY\s\`(.*?)\`/i',$line,$indexkey)) {
		$otherkey .= '$this->dbforge->add_key('."'".$indexkey[1]."'".');'.PHP_EOL;
	}
} // end of foreach

/* echo nl2br($fields);
echo nl2br($primarykey);
echo nl2br($otherkey);
echo nl2br($table);*/
?>

<!doctype html>

<!--[if lt IE 7]>
	<html class="nojs ms lt_ie7" lang="en">
<![endif]-->

<!--[if IE 7]>
	<html class="nojs ms ie7" lang="en">
<![endif]-->

<!--[if IE 8]>
	<html class="nojs ms ie8" lang="en">
<![endif]-->

<!--[if gt IE 8]>
	<html class="nojs ms" lang="en">
<![endif]-->

<html lang="en">

<head>
	<?php include_once("header.php"); ?>
</head>

<body class="blueish">

	<div id="main" style="margin-right:15%;margin-left:15%;">
    <div class="one_full" align="center" >
        <h1>SQL Schema to CodeIgniter DBForge Method - Result!</h1>
    </div>

    <div class="one_full">
		<pre>
			<?php
				echo stripslashes($fields);
				echo stripslashes($primarykey);
				echo stripslashes($otherkey);
				echo stripslashes($table);
			?>
		</pre>
			<br/>
    </div>

</div>

</body>
</html>
