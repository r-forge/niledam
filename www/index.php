
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p> The <strong>project summary page</strong> can be found <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>, <strong>the package</strong> can be downloaded <a href="http://r-forge.r-project.org/R/?group_id=1724">here</a> or by typing:
<pre>install.packages("NiLeDAM", repos="http://R-Forge.R-project.org")</pre>
in <b>R</b>.
</p>

<p>Afraid by R? I made for you a graphical interface that does not require any specific knowledge in R programming. It is based on <a href="http://www.rstudio.com/shiny/">shiny</a> and can be used simply by visiting <a href="http://glimmer.rstudio.com/tuxette/niledam/">this link</a>.</p>

To cite the package, please use:
<ul>
<li>
Villa-Vialaneix N., Montel Jean-Marc and Seydoux-Guillaume Anne-Magali (2013) <em>NiLeDAM: Monazite Datation for the NiLeDAM team</em>. R package version 0.1.
</li>
<li>Montel J.M., Foret S., Veschambre M., Nicollet C., Provost A. (1996) Electron microprobe dating of monazite. <em>Chemical Geology</em>, <strong>131</strong>, 37-53.</li>
<li>Seydoux-Guillaume A.M., Montel J.M., Bingen B., Bosse V., de Parseval P., Paquette J.L., Janots E., Wirth R. (2012) Low-temperature alteration of monazite: fluid mediated coupled dissolution-precipitation, irradiation damage and disturbance of the U-Pb and Th-Pb chronometers. <em>Chemical Geology</em>, <strong>330-331</strong>, 140-158.</li>
</ul>

</body>
</html>
