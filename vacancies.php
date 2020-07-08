

<html>

<head>
	<title>karu</title>

	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
	<div class="ftco-cover-1 " style="background-color:#EDDBC3">
		<div class="container">
			<br />

			<h3 style="text-align: center;">Leave a link to the CV (your contacts and email must be in the CV) and the name of the vacancy you want to apply for.</a></h3><br />
			<br />
			<br />
			<div style="margin-bottom:5px; text-align: center;">
				<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<br />
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
						<tr>
							<th>CV Link</th>
							<th>Vacancy</th>
							<th>Details</th>
							<th>Remove</th>
						</tr>
					</table>
				</div>
				<div style="text-align: center;">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
				</div>
			</form>

			<br />
		</div>
		<div id="user_dialog" title="Add Data">
			<div class="form-group">
				<label>Enter CV Link</label>
				<input type="text" name="cv" id="cv" class="form-control" />
				<span id="error_cv" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter Vacancie</label>
				<input type="text" name="vacancie" id="vacancie" class="form-control" />
				<span id="error_vacancie" class="text-danger"></span>
			</div>
			<div class="form-group" style="text-align: center;">
				<input type="hidden" name="row_id" id="hidden_row_id" />
				<button type="button" name="save" id="save" class="btn btn-info">Save</button>
			</div>
		</div>
		<div id="action_alert" title="Action">

		</div>
		<div style="margin-bottom:5px; text-align: center;">
			<a href="http://localhost/project/careers.php" class="active font-weight-bold">Back to site</a>
		</div>
		<div class="container" style="width:500px;">  
                <h2 style="text-align: center;">Additional Contacts</h2><br />                 
                <div class="table-responsive">  
                     <table class="table table-bordered table-hover">  
                          <tr>  
                               
                          </tr>  
                          <?php   
                          $data = file_get_contents("json/contact.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr><td>'.$row["contact"].'</td></tr>';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
	</div>

</body>

</html>




<script src="js/vacancies.js"></script>