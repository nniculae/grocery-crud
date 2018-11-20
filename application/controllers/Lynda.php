<?php  if ( ! defined( 'BASEPATH' ) ) {
	exit( 'No direct script access allowed' );
}

class Lynda extends CI_Controller {

	function __construct() {
		parent::__construct();

		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper( 'url' );
		/* ------------------ */

		$this->load->library( 'grocery_CRUD' );

	}
	public function display( $output = null ) {
		$this->load->view( 'lynda.php', (array) $output );
	}

	public function index() {
		echo '<h1>Welcome to the world of Zes Goes BV</h1>';//Just an example to ensure that we get into the function
		die();
	}

	public function makes() {
		$crud = new grocery_CRUD();
		$crud->set_subject( 'Merk' );
		$crud->set_table( 'makes' );
		$crud->display_as( 'make', 'Merk' );
		$output = $crud->render();
		$this->display( $output );
	}
	public function cars() {

		$crud = new grocery_CRUD();
		$crud->set_subject( 'Auto' );
		$crud->set_relation( 'make_id', 'makes', '{make}' );
		$crud->set_table( 'cars' );
		$crud->display_as( 'make_id', 'Merk' );
		$output = $crud->render();
		$this->display( $output );
	}
}
