<?php
    if(!empty($_POST)){
		
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6LflyeUgAAAAAEdIEZtLWgQzsUC1qS3qenALTf3x';
		
		if(!$captcha){

			echo '<script>alert("Por favor verifica el captcha");
            window.location.href="index.php";    
            </script>';

			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				if($_POST){
                    $to = 'gustavojaimes1993@gmail.com';
                    
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $asunto = $_POST['asunto'];
                    $mail = $_POST['mail'];
                    $texto = $_POST['texto'];
                    $subject = "Informes clientes";
                    $contenido = "Este mensaje fue enviado por: " . $name ."\nTelefono: " . $phone . "\nAsunto: " . $asunto .  "\nE-mail: " . $mail . "\nNecesito informes sobre: " . $texto;
                    //honey pot field
                    $honeypot = $_POST['firstname'];
                    //check if the honeypot field is filled out. If not, send a mail.
                    if( ! empty( $honeypot ) ){
                        return; //you may add code here to echo an error etc.
                    }else{
                    
                        mail( $to, $subject, $contenido);
                        echo'<script type="text/javascript">
                    alert("Formulario enviado correctamente, Gracias por ponerte en contacto con nosotros.");
                    window.location.href="index.php";
                    </script>';
                    }
                }
				} else {
                   die();
			}
		}
	}

?>

<!DOCTYPE html>
<?=$headGNRL?>

<link rel="icon" href="./img/design/favicon.png">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<body>
<?=$header?>


<!-- banner inicio -->
<div class="uk-text-center inicioabogado" uk-grid>
    <div class="uk-width-1-1@m">
        <div class="imageDiv">
            <img class="banner" src="./img/design/banner11.jpg" alt="">
        </div>
        <div class="imageDiv bottomDiv">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-auto@m"></div>
                <div class="uk-width-expand@m abogado">
                    <h2>Acerca de Valegal</h2>
                    <p>Valegal, S.C., somos una firma de abogados laborales con una
                        práctica legal de más de 20 años en la materia, en la que
                        hemos colaborado con diversos sectores empresariales, en el
                        cumplimiento de la normatividad vigente para encontrar los
                        esquemas más convenientes para la contratación, importación
                        y exportación de talento humano, manejo de temas colectivos
                        con sindicatos, asesoría e implementación de estrategias para
                        identificar, prevenir y resolver contingencias legales durante el
                        desarrollo de las relaciones laborales; así como, defender los
                        intereses de nuestros clientes en procesos jurisdiccionales
                        ante autoridades competentes.
                    </p>
                </div>
                <div class="uk-width-expand@m" uk-grid>
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="uk-transition-scale-up uk-transition-opaque foto" src="./img/design/acerca.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@m"></div>
            </div>
        </div>
    </div>
   
    <div class="uk-width-1-1@m letrero">
        <!-- <p class="uk-flex uk-flex-center experto">¿EN QUÉ SOMOS EXPERTOS?</p> -->
        <p class="uk-flex uk-flex-center uk-margin-remove servicio">¿EN QUÉ SOMOS EXPERTOS?</p>
    </div>
    <div class="uk-width-auto@m"></div>
    
    <div class="uk-width-expand@m carousel-servicios">
         <div uk-slider="center: false; autoplay: true; autoplay-interval: 2000; ">

            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-6@m uk-ligh uk-flex uk-flex-middle uk-flex-center cont-carou">
                <li>
                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center">
                        <img src="./img/design/servicio1.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio2.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio3.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio4.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio5.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio6.png" width="400" height="600" alt="">
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <div class="uk-width-auto@m"></div>
</div>

<section  id="boq">  
    <div class="uk-text-center banner-mail" uk-grid>
        <div class="uk-width-1-1@m">
            <p class="uk-flex uk-flex-center asesoria">Recibe Asesoría</p>
            <p class="uk-flex uk-flex-center datos">Déjanos tus datos y con gusto te brindaremos la asesoría que necesitas.</p>
        </div>
        <div class="uk-width-1-3@m"></div>

        
        <div class="uk-width-expand@m uk-margin-remove email">
            <form form class="form" name="formulario" action="#my-form" method="post" id="my-form" uk-grid>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" name="name" type="text" placeholder="Nombre Completo*" required />
                </div>

                <input style="display: none;" name="firstname" type="text" id="firstname" class="hide-robot">

                <div class="uk-width-1-2@s">
                    <input class="uk-input input" name="phone" type="text" placeholder="Teléfono*" required />
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" name="asunto" type="text" placeholder="Asunto*" required />
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" name="mail" type="text" placeholder="Email*" required />
                </div>
                <div class="uk-margin uk-width-1-1@s">
                    <textarea class="uk-textarea input" name="texto" rows="5" placeholder="Mensaje*" required></textarea>
                </div>

                <div class="g-recaptcha uk-margin-remove" data-sitekey="6LflyeUgAAAAAGDnEiL-4lOkqaynT-cEVCOsSxdK"></div>

                <div class="uk-margin uk-width-1-1@s">
                    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit">ENVIAR</button>
                </div>
            </form>
        </div>
        <div class="uk-width-1-3@m"></div>
    </div>


<!-- Articulos de abogados -->

    <div class="uk-text-center container-cursos equipo mostrar-mas <?=$menos?>" style="<?=$show?>;" uk-grid>
            
        
        <div class="uk-width-1-2@m uk-margin-remove container uk-background-contain uk-background-muted uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./img/design/equipo.png);background-size: cover;background-size: 30em 30em;"></div>



        <div class="uk-width-expand@m articulosRecientes">
            <h1 style=""  class="uk-text-center">Artículos recientes</h1>
            <div class="uk-flex uk-flex-left@m uk-flex-center">
            <?php
                $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                ?>
                <p><?=$diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></p>
                <!-- <p class="admin" class="uk-margin-remove admin" style="padding: 0 1em;">ADMIN</p> -->
            </div>
            <?php
                    $contador = 0;
                    $CONSULTA20 = $CONEXION -> query("SELECT * FROM productos");
                    while($row_CONSULTA20 = $CONSULTA20 -> fetch_assoc()){
                    $id = $row_CONSULTA20['id'];

                    $contador ++;
                    $show = " ";
                    $menos = "";
                    if ($contador > 2) {
                        $show = "display: none";
                        $menos = "mostrar-menos";
                }
                ?>
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin curso-card" style="<?=$show?>" uk-grid>
                <div class="uk-flex-last@s uk-card-media-right uk-cover-container cursos-info">
                    <?=item_inicio7($row_CONSULTA20['id'])?>
                </div>
                
                <div class="cursos-info" style="max-width: 100%; max-height: 13em;">
                    <?php
                        
                        $CONSULTA2 = $CONEXION -> query("SELECT * FROM productospic WHERE producto = $id");
                        $row_CONSULTA2 = $CONSULTA2 ->fetch_assoc();

                    ?>
                    <img style="width: 100%; height: 100%; object-fit: cover;" src="./img/contenido/productos/<?=$row_CONSULTA2['imagen']?>" alt="">
                </div>
            </div>
            <?php } ?>
                <p uk-margin>
                    <a href="<?=$rutaServicios?>" class="mas" class="uk-flex uk-flex-left" style="font-family: PoppinsRegular; color: black; font-weight: bold;">LEER MÁS NOTICIAS <i class='fas fa-arrow-right' style='font-size:24px; color: red;'></i></a>
                </p>
        </div>

        <div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="">
            <a id="WhatsApp-button" href="" target="_blank" class="phoneJs" title="">
                <div class="cbh-ph-circle"></div>
                <div class="cbh-ph-circle-fill"></div>
                <div class="cbh-ph-img-circle1"></div>
            </a>
        </div>

        <div class="uk-width-auto@m"></div>
    </div>
    

<?=$footer?>

</html>