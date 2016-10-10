	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<link rel="stylesheet" href="../css/app.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body class="admin">
		<!--container  -->
		<div class="container admin-container">
			<h1> Nova Obaveštenja</h1>
			<a href="{{action('PostsController@index')}}" class=" btn btn-primary">back</a>	

			<div id="app">
				<form action="" method="post">
					<ul>
						<li>
							<label for="naslov">Naslov</label> 
							<input type="text" name="naslov" placeholder="Naslov" value="<?php echo !empty($naslov_objave)?$naslov_objave:'';?>">
							<?php if (!empty($naslovError)): ?>
								<span class="error"><?= $naslovError;?></span>
							<?php endif; ?>
						</li>

						<li>
							<label for="text">Obaveštenje</label>
							<textarea v-model ="message" name="text" id="" cols="100" rows="10" placeholder="Text"></textarea>
							<span class="error" v-show= "!message">
								Moraš uneti tekst obaveštenja!
							</span>
						</li>	

						<button class="sova_button admin_button" type="submit" v-show= "message">Objavi</button>
						
					</ul>
				</div><!--/ container -->
			</form>
		</div>  <!--/app -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
		<script>
			new Vue({
				el:'#app',
				data:{
					message:''
				}
			}); 
		</script>

	</body>
	</html>