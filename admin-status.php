<?php 
$title = "PLUGIN STATUS"; 
include(GWTB_PLUGIN_DIR . 'layout/header.php'); 

//CPT
echo'<div class="container">';
echo '<h6><b>Custom Post Types</b></h6>';
$cpts = get_option('gwtb-cpt');
if($cpts){
	foreach($cpts as $cpt){
		echo'<p><b>'.$cpt['plural']. '</b> 
		| slug: '. $cpt['slug']. ' 
		| singlular name: ' . $cpt['single'] . ' 
		| plural name: ' . $cpt['plural'] . '
		| icon: ' . $cpt['icon'] . '
		| public: ' . $cpt['public'] . '
		| hierarchial: ' . $cpt['hierarchial'] . '
		| archive: ' . $cpt['archive'] . '
		| title: ' .$cpt['title'] . '
		| editor: ' . $cpt['editor'] . '
		| author: ' . $cpt['author'] . '
		| thumbnail: ' . $cpt['thumbnail'] . '
		| excerpt: ' . $cpt['excerpt'] . '
		| comments: ' .$cpt['comments'] . '
		| page-attributes: ' . $cpt['page-attributes'];
	}
} else {
	echo 'N/A';
}
echo '</div>';
//SHAME!
echo '<br><br>';


//CSS
echo'<div class="container">';
echo '<h6><b>Custom CSS</b></h6>';
$css = get_option('gwtb-css');
if($css){
	echo $css;
} else {
	echo 'N/A';
}
echo '</div>';
//SHAME!
echo '<br><br>';

include(GWTB_PLUGIN_DIR . 'layout/footer.php');
?>
