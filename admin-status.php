<?php 
$title = "PLUGIN STATUS"; 
include(GWTB_PLUGIN_DIR . 'layout/header.php'); 

//CPT
$cpts = get_option('gwtb-cpt');
if($cpts){
	echo'<div class="container">';
	echo '<h5 class="text-center"><b>Custom Post Types</b></h5>';
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

$cpts[$cpt_id]['slug'] = 'new-cpt';
		$cpts[$cpt_id]['id'] = $cpt_id;
		$cpts[$cpt_id]['single'] = 'New CPT';
		$cpts[$cpt_id]['plural'] = 'New CPTs';
		$cpts[$cpt_id]['icon'] = 'dashicons-admin-post';

		$cpts[$cpt_id]['public'] = false;
		$cpts[$cpt_id]['hierarchial'] = false;
		$cpts[$cpt_id]['archive'] = false;

		$cpts[$cpt_id]['title'] = false;
		$cpts[$cpt_id]['editor'] = false;
		$cpts[$cpt_id]['author'] = false;
		$cpts[$cpt_id]['thumbnail'] = false;
		$cpts[$cpt_id]['excerpt'] = false;
		$cpts[$cpt_id]['comments'] = false;
		$cpts[$cpt_id]['page-attributes'] = false;