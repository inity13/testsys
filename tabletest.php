<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'testsys2'; // Database Name

ini_set('default_charset', 'utf-8');


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
        FROM test_run_log';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html>

<head>
<title>TableTest</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KE-Test-sidebar</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript" charset="utf-8" src="jquery/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="jquery/jquery.min.js"></script>
 
	<script type="text/javascript" charset="utf-8" src="DataTables/datatables.min.js"></script>
	
	<script type="text/javascript" charset="utf-8" src="jquery/tablejquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="jquery/tablejquery2.js"></script>
	<link rel="stylesheet" type="text/css" charset="utf-8" href="DataTables/datatables.min.css"/>

	<!-- Custom styles for this sidebar -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>


<body background="sidebar/hyvakiertaa.jpg">
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="sidebar\index.html">
                        Etusivu
                    </a>
                </li>
                <li>
                    <a href="reportico\">Raportit</a>
                </li>
                <li>
                    <a href="tabletest.php">Kaikki tapaukset</a>
                </li>
                <li>
                    <a href="not_passed.php">Avoinna olevat bugit</a>
                </li>
                <li>
                    <a href="insert_sivu.php">Syötä uusi regressiotapaus</a>
                </li>
                <li>
                    <a href="#">Raportoi testauksesta</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>

	<script>$(document).ready(function() {
	    $('#test_run_log').DataTable();
	} );</script>
	
	<table id="test_run_log" class="display">
<caption class="title">Regressio Testit</caption>
		<thead>
			<tr>
				<th>LogID</th>
				<th>Testauksen syy</th>
				<th>Läpäisty</th>
				<th>Ei läpäisty</th>
				<th>Huomiot</th>
				<th>Aika</th>
				<th>TestID</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['LogID'].'</td>
					<td>'.$row['TestReason'].'</td>
					<td>'.$row['Passed'].'</td>
					<td>'.$row['NotPassed'].'</td>
					<td>'.$row['NotesFromTest'].'</td>
					<td>'.$row['Time'].'</td>
					<td>'.$row['TestID'].'</td>
				</tr>';
		}?>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>