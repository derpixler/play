<?php
/**
 * Feature Name:	Core Plugin File
 * Version:			0.1
 * Author:			renereimann
 * Author URI:		http://www.rene-reimann.de/
 * Licence:
 */

namespace Play;

class Core {

	/**
	 * Contains the Config
	 *
	 * @access  protected
	 * @var     Array
	 */
	protected $config = array();
    
	/**
	 *
	 * @internal param Array $config
	 * @return  Core
	 */
	public function __construct(){

        $dir = dirname( __FILE__ );

		$this->config = array(
			"base_name"     => $dir,
			"view_dir"      => $dir . '/view/',
		);

        $this->load_classes();
        
        $this->game = new Controller\game;
        
        echo "run:\n\n";
	}

	/**
	 * loading all required classes for this plugin
	 *
	 * @access  protected
	 * @return  Void
	 */
	protected function load_classes(){

		$classes = array(
            'controller/game.php',
			'model/query.php'
		);

		foreach( $classes as $class ){
			include_once( __DIR__ . '/' . $class );
		}

	}
    
    
    public function get_viw_dir(){
        echo "get_viw_dir:\n\n";
             
        print_r( $this->config );
        die();
    }

}


new Core;