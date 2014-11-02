<?php 
require_once("inc/Webpage.class.php");
$contactpage = new Webpage("Journey - Contact Us");
$contactpage->display_header();
echo "<body>\n";
$contactpage->display_nav();
?>
<br>
<br>
<div class="container">
	<hr>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Contact</h3>	
				</div>
				<div class="panel-body">
					<form name="enq" method="post" action="email/" onsubmit="return validation();">
					  <fieldset>
					  	<div class="form-group">
							<input type="text" name="name" id="name" value=""  class="form-control" placeholder="Name" />
						</div>
						<div class="form-group">
					    	<input type="text" name="email" id="email" value="" class="form-control" placeholder="Email" />
					    </div>
					    <div class="form-group">
					    	<label>Subject: </label>
					    		<label class="radio-inline">
					    		<input type="radio" name="optionsradioinline" id="optionsradioinline1" value="option1">
					    		option
				    			</label>

					    		<label class="radio-inline">
					    		<input type="radio" name="optionsradioinline" id="optionsradioinline2" value="option2">
					    		option2
				    			</label>

					    		<label class="radio-inline">
					    		<input type="radio" name="optionsradioinline" id="optionsradioinline3" value="option3">
					    		option3
				    			</label>
					    </div>
					    <div class="form-group">
					    	<textarea rows="11" name="message" id="message" class="form-control" placeholder="Comments"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send!" name="submit" id="submitButton" class="btn btn-default btn-lg" title="Send!" />
						</div>		  
					  </fieldset>
					</form>
				</div>  
			</div>
		</div>
	</div>
</div>


<?php
$contactpage->display_footer();
echo "\n</body>";
?>
