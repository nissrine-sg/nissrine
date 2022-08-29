<?php 
	session_start();
	require 'conn.php';
	$user = $_SESSION['sess_user_name'];

	try{
		$sql = $conn->prepare("select e.username_e, e.nom_e, n.* from note, etudiant e, prof p where n.id_e = n.id_p && e.username_e = '" .$_SESSION['sess_user_name']."' group by (b.id_b)");

		$sql->execute();
	}catch (PDOException $e) {
		echo "Error : ".$e->getMessage();
	}
?><html>
<head>
    <link href="assets/css/tailwind.min.css" rel="stylesheet"/>
    <link href="table.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
		    <!-- ################# Header Starts Here#######################--->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li>Gestion scolarité</li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 nav-img">
                        <img src="assets/images/logo.png" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-9 d-none d-md-block nav-item">
                    <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="login-etudiant.php">Espace etudiant</a></li>
                            <li><a href="login-prof.php">Espace enseignant</a></li>
                            <li><a href="login-dep.php">Espace departement </a></li>
                            <li><a href="login-admin.php">Espace admin</a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header>


    <div id="demo">
		<h1>Liste note</h1>
		<!--<h2>Table of my other Material Design works (list was updated 08.2015)</h2>-->
		<div class="table-responsive-vertical shadow-z-1" style="background-color:white">
			<table id="table" class="table table-hover table-mc-light-blue">
				<thead>
					<tr>
						<th>date de note</th>
						<th>note</th>
						<th>module</th>
						<th>ensaignant</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {	?>
					<tr>
						<td data-title="ID"><?php echo $result['id_n'];?></td>
						<td data-title="Name"><?php echo $result['id_module'];?></td>
						<td data-title="Date"><?php echo $result['date_b'];?></td>
						<td data-title="Status"><?php echo $result['paiement'];?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

    <div id="demo">
		<h1>Liste absence</h1>
		<!--<h2>Table of my other Material Design works (list was updated 08.2015)</h2>-->
		<div class="table-responsive-vertical shadow-z-1" style="background-color:white">
			<table id="table" class="table table-hover table-mc-light-blue">
				<thead>
					<tr>
						<th>date de absence</th>
						<th>heure d'absence</th>
						<th>module</th>
						<th>ensaignant</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {	?>
					<tr>
						<td data-title="ID"><?php echo $result['id_n'];?></td>
						<td data-title="Name"><?php echo $result['id_module'];?></td>
						<td data-title="Date"><?php echo $result['date_b'];?></td>
						<td data-title="Status"><?php echo $result['paiement'];?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	</body>
</html>
