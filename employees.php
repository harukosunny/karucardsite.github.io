<?php

$connect = mysqli_connect("localhost", "postges", "b1c3x39cur4z2", "postgres");
$query = "SELECT * FROM employee ORDER BY name ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>karu</title>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

   
</head>

<body>

    <br /><br />
    <div class="container" style="width:900px;">
        
        <h2 style="text-align: center;">Search Employee Data</h2><br />
        <div class="row">
            <div class="col-md-4">
                <select name="employee_list" id="employee_list" class="form-control row">
                    <option value="">Select Employee</option>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <button type="button" name="search" id="search" class="btn btn-info">Search</button>
            </div>
        </div>
        <br />
        <div class="table-responsive" id="employee_details" style="display:none">
            <table class="table table-bordered">
                <tr>
                    <td width="10%" style="text-align: center;"><b>Name</b></td>
                    <td width="90%"><span id="employee_name"></span></td>
                </tr>
                <tr>
                    <td width="10%" style="text-align: center;"><b>Address</b></td>
                    <td width="90%"><span id="employee_address"></span></td>
                </tr>

                <tr>
                    <td width="10%" style="text-align: center;"><b>Gender</b></td>
                    <td width="90%"><span id="employee_gender"></span></td>
                </tr>
                <tr>
                    <td width="10%" style="text-align: center;"><b>Designation</b></td>
                    <td width="90%"><span id="employee_designation"></span></td>
                </tr>
                <tr>
                    <td width="10%" style="text-align: center;"><b>Age</b></td>
                    <td width="90%"><span id="employee_age"></span></td>
                </tr>
            </table>
        </div>
        <div style="margin-bottom:5px; text-align: center;">
			<a href="http://localhost/project/index.php" class="active font-weight-bold">Back to site</a>
		</div>

    </div>
</body>

</html>

<script src="js/employees.js"></script>