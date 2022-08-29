<?php 
	require 'conn.php';
	session_start();

	if(isset($_POST['submitBtnLogin'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username != "" && $password != "") {
			try {
				$query = "select * from `etudiant` where `username_e`=:username and `password_e`=:password";
				$stmt = $conn->prepare($query);
				$stmt->bindParam('username', $username, PDO::PARAM_STR);
				$stmt->bindValue('password', $password, PDO::PARAM_STR);
				$stmt->execute();
				$count = $stmt->rowCount();
				$row   = $stmt->fetch(PDO::FETCH_ASSOC);
				if($count == 1 && !empty($row)) {
					$_SESSION['sess_user_id']   = $row['id_e'];
					$_SESSION['sess_user_name'] = $row['username_e'];
					header('location:etudiant.php');
				
				} else {
					$msg = "Invalid username and password!";
				}
			} catch (PDOException $e) {
				echo "Error : ".$e->getMessage();
			}
		}else{
			$msg = "Both fields are required!";
		}
	}

	
?>
<html>
	<head>
		<link href="assets/css/tailwind.min.css" rel="stylesheet"/>
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
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
			<div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12" style="margin-top: 100px;">
				<div class="mt-12 flex flex-col items-center">
					<h1 class="text-2xl xl:text-3xl font-extrabold">S'authentifier</h1>
					<div class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">en tant que etudiant</div>
					<div class="w-full flex-1 mt-8">
						<div class="my-12 border-b text-center">
							<div class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">                Saisissez votre nom d'utilisateur et votre mot de passe</div>
						</div>
						<div id="login-error-msg-holder" style="display:none">
							<p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
						</div>
						<form method="POST">
						<div class="mx-auto max-w-xs">
							<input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" type="text" placeholder="username"/ name="username">
							<input class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" type="password" placeholder="Password" name="password"/>
							<button class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none" type="submit" name="submitBtnLogin">
								<svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
									<circle cx="8.5" cy="7" r="4" />
								</svg>
								<span class="ml-3">Login</span>
							</button>
							<span class="loginMsg" style="text-align:center; margin-top:15px;"><?php echo @$msg;?></span>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="flex-1 bg-indigo-100 text-center hidden lg:flex" style="margin-top: 100px;">
				<div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/prof.png');"></div>
			</div>
		</div>
	</body>
</html>
