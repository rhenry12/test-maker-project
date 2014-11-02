<?php
/*Webpage class - provides a web page template*/
class Webpage {
	private $title, $nav_links, $company_name, $date;

	function __construct($page_title) {
		$this->title = $page_title;
		$this->nav_links = array(
			"Take a Tour" => "#",
	                        	"Contact" => "contact.php",
	                        	"Register" => "#",
	                        	"Log in" => "#");
		$this->company_name = "Your Website";
		$this->date = new DateInfo;
	}

	public function display_header() {
		echo 
		"<!DOCTYPE html>
		<html lang='en'>
		<head>
		    <meta charset='utf-8'>
		    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
		    <meta name='viewport' content='width=device-width, initial-scale=1'>
		    <meta name='description' content=''>
		    <meta name='author' content=''>

		    <title><?=$this->title?></title>

		    <!-- Bootstrap Core CSS -->
		    <link href='css/bootstrap.min.css' rel='stylesheet'>

		    <!-- Custom CSS -->
		    <link href='css/business-frontpage.css' rel='stylesheet'>

		    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		    <!--[if lt IE 9]>
		        <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
		        <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
		    <![endif]--> 
		</head>";
	}

	public function display_nav() {
		echo
		"<!-- Navigation -->
		    <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
		        <div class='container'>
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class='navbar-header'>
		                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
		                    <span class='sr-only'>Toggle navigation</span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                </button>
		                <a class='navbar-brand' href='index.php'>Home</a>
		            </div>
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		                <ul class='nav navbar-nav'>";
		             foreach($this->nav_links as $link => $href):
		             echo 
		         	      "<li>
		         	          <a href='$href'>$link</a>
		         	      </li>";
		             endforeach;
		             echo
		                "</ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>";
	}
	
	public function display_footer() {
		echo
		"<div class='container'>
		        <hr>
		            <!-- Footer -->
		        <footer>
		            <div class='row'>
		                <div class='col-lg-12'>
		                    <p>Copyright &copy; " . $this->company_name . " ". $this->date->getYear() . "</p>
		                </div>
		            </div>
		            <!-- /.row -->
		        </footer>
		</div><!-- /.container -->

		<!-- jQuery Version 1.11.0 -->
		<script src='js/jquery-1.11.0.js'></script>

		<!-- Bootstrap Core JavaScript -->
		<script src='js/bootstrap.min.js'></script>";
	}
}

class DateInfo {
	private $dtz, $dttm;

	function __construct() {
		$this->dtz = new DateTimeZone('America/New_York');
		$this->dttm = new DateTime('now', $this->dtz);
	}

	public function getDateTimeString() {
		return $this->dttm->format('Y-m-d H:i:s');
	}

	public function getYear() {
		return $this->dttm->format('Y');
	}
}
?>