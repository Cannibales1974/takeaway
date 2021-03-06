<!DOCTYPE html>
  <html lang="es-ES">
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script>
	  $(document).ready(function(){
			$('.modal').modal();
			$('#modal1').modal('open');
		});
	  </script>
		<nav>
			<div class="nav-wrapper purple darken-4">
			  <a href="#" class="brand-logo">Take Away</a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li class="desplegable">
					<a href="index.html">Inicio</a>
					<ul class="submenu">
						<li><a href="#">Ensaladas</a></li>
						<li><a href="#">Principales</a></li>
						<li><a href="#">Postres</a></li>
						<li><a href="contacto.html">Contacto</a></li>
					</ul>
				</li>
				<li><a href="info.html">Info</a></li>
				<li><a href="fotos.html">Fotos</a></li>
			  </ul>
			</div>
		</nav>
	<!-- Ensaldas -->
	<section id="ensaladas">
		<h2 class="center-align teal darken-4 white-text">Ensaladas</h2>
		<div class="row">
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				<div class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; right: 14px;top:14px">
				<a class="btn-floating btn-large red">
				  <i class="large material-icons">shopping_basket</i>
				</a>
				<ul>
				  <li><a class="btn-floating red center">1x</a></li>
				  <li><a class="btn-floating yellow darken-1 center">2x</a></li>
				  <li><a class="btn-floating green center">3x</a></li>
				  <li><a class="btn-floating blue center">4x</a></li>
				</ul>
			  </div>
				  <img class="activator" src="img/ensalada_capri.jpg">
				</div>
				<div class="card-content">
				
				  <span class="card-title activator grey-text text-darken-4">Ensalda Caprichosa<i class="material-icons right">more_vert</i></span>
				  <p></p>
	
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Ensalada Caprichosa<i class="material-icons right">close</i></span>
				  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/ensalada_cuscus.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Ensalda Cus-Cus<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Ensalada Cus-Cus<i class="material-icons right">close</i></span>
				  <p>¿Te gustan los platos exóticos? Esta ensalada es ideal para los amantes del cuscús. Con una base de caldo de carne muy nutritiva, combinado con verduras y el toque dulce de las pasas. De segundo lo puedes combinar amb alguna de nuestras carnes.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/ensalada_arroz.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Ensalda de Arroz<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Ensalada de Arroz<i class="material-icons right">close</i></span>
				  <p>Deliciosa y refrescante ensalada de arroz, donde añadimos unos taquitos de jamón cocido y verduritas que equilibran el plato.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/ensalada_pasta.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Ensalda de Pasta<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Ensalada de Pasta<i class="material-icons right">close</i></span>
				  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			  </div>			  
			</div>
		</div>
	</section>
	<!-- Principales -->
	<section id="principales">
		<h2 class="center-align indigo darken-4 white-text">Principales</h2>
		<div class="row">
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/focaccia.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Focaccia Italiana<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Focaccia  Italiana<i class="material-icons right">close</i></span>
				  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/tortilla_calabacin.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Tortilla Calabacín<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Tortilla Calabacín<i class="material-icons right">close</i></span>
				  <p>¿Te gustan los platos exóticos? Esta ensalada es ideal para los amantes del cuscús. Con una base de caldo de carne muy nutritiva, combinado con verduras y el toque dulce de las pasas. De segundo lo puedes combinar amb alguna de nuestras carnes.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/croquetas_bacalao.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Croquetas Bacalao<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Croquetas Bacalao<i class="material-icons right">close</i></span>
				  <p>Deliciosa y refrescante ensalada de arroz, donde añadimos unos taquitos de jamón cocido y verduritas que equilibran el plato.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/canelones_espinacas.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Canelonas Espinacas<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Canelones Espinacas<i class="material-icons right">close</i></span>
				  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			  </div>			  
			</div>
		</div>
	</section>
	<!-- Postres -->
	<section id="postres">	
	
		<h2 class="center-align pink darken-4 white-text">Postres</h2>
		<div class="row">
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/crumble.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Crumble Manzana<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Crumble Manzana<i class="material-icons right">close</i></span>
				  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/fresa_arandano.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Fresas con arándanos<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Fresas con arándanos<i class="material-icons right">close</i></span>
				  <p>¿Te gustan los platos exóticos? Esta ensalada es ideal para los amantes del cuscús. Con una base de caldo de carne muy nutritiva, combinado con verduras y el toque dulce de las pasas. De segundo lo puedes combinar amb alguna de nuestras carnes.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/kiwi_naranja.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Kiwi con Naranja<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Kiwi con Naranja<i class="material-icons right">close</i></span>
				  <p>Deliciosa y refrescante ensalada de arroz, donde añadimos unos taquitos de jamón cocido y verduritas que equilibran el plato.</p>
				</div>
			  </div>			  
			</div>
			<div class="col s12 m6 l3">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/muesli.jpg">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">Muesli con Yogurt<i class="material-icons right">more_vert</i></span>
				  <p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title white-text text-darken-4">Muesli con yogurt<i class="material-icons right">close</i></span>
				  <p>Deliciosa combinación gracias a la base vegetal, rica en vitaminas, al jamón dulce y al queso, que aportan proteínas y calcio al plato. El toque dulce del maíz y la zanahoria dan un sabor agradable en boca.</p>
				</div>
			  </div>			  
			</div>
		</div>
	</section>
	
	<!-- footer -->
	<footer class="page-footer purple darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright purple darken-3">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Suscríbete a nuestra Newsletter</h4>
      <form method="post">
	  <div class="input-field">
		<input maxlenght="100" type="email" name="email" id="email">
		<label for="email">Tu correo</label>		
	  </div>
		<button class="btn waves-effect waves-light" type="submit">Suscribirme</button>
	  </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
<?php
//Se comprueba que llegan datos por método POST
if ($_POST) {	
	$email = $_POST['email'];	
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'takeaway');
	mysqli_set_charset($mysqli,"utf8");
	if ($mysqli){
		$sql="INSERT INTO newsletter (email) VALUES ('$email');";
		$query=$mysqli->query($sql);
		if ($query) {
			echo "
			<script>
			$(document).ready(function(){
				$('#modal1').modal('close');
				alert('Gracias por suscribirte!')
			});
			</script>";			
		}
		else 
		{
			echo "Ha habido un problema con el registro del formulario";
		}
		$mysqli->close();
	}
}
?>       
    </body>
  </html>
  