<?php  if ( ! defined( 'BASEPATH' ) ) {
	exit( 'No direct script access allowed' );
}

class Nicu extends CI_Controller {

	function __construct() {
		parent::__construct();

		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper( 'url' );
		/* ------------------ */

		$this->load->library( 'grocery_CRUD' );

	}
	public function display( $output = null ) {
		$this->load->view( 'our_template.php', (array) $output );
	}

	public function index() {
		echo '<h1>Welcome to the world of Codeigniter</h1>';//Just an example to ensure that we get into the function
		die();
	}

	public function makes() {
		$crud = new grocery_CRUD();
		$crud->set_table( 'makes' );
		$output = $crud->render();
		$this->display( $output );
	}
}
