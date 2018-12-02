<?php
function catch_the_image( $id ) {
	$img_url =get_post_meta($id, 'picture', true);
	if($img_url){
		echo $img_url;
	}else{
		echo 'https://placehold.it/418x628?text=BOOKCOVER';
	}
	echo 'https://placehold.it/418x628?text=BOOKCOVER';
}
?>