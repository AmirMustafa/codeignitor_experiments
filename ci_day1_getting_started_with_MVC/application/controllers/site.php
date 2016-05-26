<?php
	class Site extends CI_Controller
	{
		/*function index()					// Printing Hello World
		{
			echo "Hello World";
		}

		function index()					//Loading to view page(here home.php)
		{
			$this->load->view('home');
		}

		function doSomething()				//Printing different method other than index
		{
			echo "Doing Something";
		}*/


		function index()
		{
			$data['myValue'] = "Some String";		// storing data in variable and printing in view.
			$data['anotherValue'] = "Another String";
			$this->load->view('home',$data);
		}

		function about()
		{
			$this->load->view('about');
		}


	}
?>