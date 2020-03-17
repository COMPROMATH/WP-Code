Put the following code in functions.php file

//Register Widgets here
register_sidebar( array(
'name' => 'Banner Ads',
'id' => 'banner-ads',
'description' => 'Appears in the Banner area',
'before_widget' => '<div id="%1$s" class="widget %2$s custom-ads">',
'after_widget' => '</div>',
'before_title' => '<h5 class="widget-title ads-title">',
'after_title' => '</h5>',
) );


Put the following code in selected file

	<?php
if(is_active_sidebar('banner-ads')){
dynamic_sidebar('banner-ads');
}
?>
