<?php 

get_header(); 
	if(is_home()){
		get_template_part('index');
	}else{
		$cosmica_home_sections  = get_theme_mod('cosmica_homepage_layout', array('slider', 'projects', 'services', 'blog', 'callout', 'clients'));
		foreach ($cosmica_home_sections as $key => $section) {
		 	get_template_part('template-parts/home', $section);
		}
	}
get_footer();
?>