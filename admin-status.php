<?php 
$title = "PLUGIN STATUS"; 
include(GWTB_PLUGIN_DIR . 'layout/header.php'); 

//CPT
$cpts = get_option('gwtb-cpt');
if($cpts){
	echo'<div class="container">';
	echo '<h6><b>Custom Post Types</b></h6>';
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
	echo '</div>';
}

//SHAME!
echo '<br><br>';

include(GWTB_PLUGIN_DIR . 'layout/footer.php');
?>
