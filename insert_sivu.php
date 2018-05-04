<!DOCTYPE html>
<html>
<head>
		<title>Ke Test - new</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="javascript" href="js/bootstrap.js">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="test">
    <meta name="init" content="test">

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

 <form class="form">

      <h1 class="h3 mb-3 font-weight-normal">Täytä tiedot</h1>
      <label for="TestName" class="sr-only">Testin nimi</label>
      <input type="text-muted" id="TestName" class="form-control" placeholder="Testin nimi" required autofocus>
      <br>
      <label for="TestName" class="sr-only">Kuvaus</label>
      <input type="text-muted" id="Description" class="form-control" placeholder="Kuvaus" required>
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Lähetä</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018 #init</p>
    </form>
<!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>