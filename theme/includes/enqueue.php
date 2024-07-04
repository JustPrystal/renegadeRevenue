<?php

	function enqueue_stuff() {

		$templatedir = get_template_directory_uri();
		$enqueList = [	
			[
				"name" => 'FontAwesome.css', 
				"type" => 'css',
				"path" => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
				"version" => '4.7.0_defer'
			],
			[
				"name" => 'swiper.css', 
				"type" => 'css',
				"path" => 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
				"version" => '11.1.4'
			],
			[
				"name" => 'style.css', 
				"type" => 'css',
				"path" => $templatedir . '/style.css',
				"version" => filemtime(get_theme_file_path('/style.css'))
			],
			
			[
				"name" => 'jquery.js', 
				"type" => 'js',
				"path" => 'https://code.jquery.com/jquery-3.3.1.min.js',
				"version" => '3.3.1',
				"loadInFooter" => false
			],
			[
				"name" => 'swiper.js', 
				"type" => 'js',
				"path" => 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
				"version" => '11.1.4',
				"loadInFooter" => false
			],
			[
				"name" => 'custom.js', 
				"type" => 'js',
				"path" => $templatedir . '/includes/custom.js',
				"version" => '0.0.1',
				"loadInFooter" => false
			]
		];
		
		foreach($enqueList as $asset) {	
			if ($asset['type'] === 'css') {
				wp_enqueue_style( 
					'victor_'.$asset['name'],  	// handle
					$asset['path'], 			// src
					null, 						// deps
					$asset['version'] 			// ver
				);	
			}	
			if ($asset['type'] === 'js') {
				wp_enqueue_script( 
					'victor_'.$asset['name'],  	// handle
					$asset['path'], 			// src
					array(), 					// deps
					$asset['version'], 			// ver
					$asset['loadInFooter']		// in footer
				);	
			}
		}
	} 
	
	add_action( 'wp_enqueue_scripts', 'enqueue_stuff' );
	
	
	// Function to defer or asynchronously load scripts for SEO Performance
	
	function js_async_attr($tag){	
		if (true == strpos($tag, 'defer') ) {
			 return str_replace( ' src', '  defer="defer" src', $tag ); 
		}
		return $tag;
	}
	add_filter( 'script_loader_tag', 'js_async_attr', 1 );


?>
