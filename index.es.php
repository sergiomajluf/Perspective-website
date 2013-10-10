<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Investigación sobre el uso de Internet">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="Perspective App"/>
	<meta property="og:type" content="application"/>
	<meta property="og:url" content="http://perspective-app.herokuapp.com/"/>
	<meta property="og:image" content="http://perspective-app.herokuapp.com/i/perspective-logo.png" />


    <title>Perspective</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,900|Montserrat:700' rel='stylesheet' type='text/css'>
    <link href="css/style-vague.css" rel="stylesheet" type="text/css">


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35407366-2', 'perspective-app.herokuapp.com');
  ga('send', 'pageview');

</script>

</head>

<body>

    <section id="content">
        <header>
            <div class="logo">
                <div class="p-stem"></div>

                <div class="p-eye"></div>
            </div>

			<h1>Perspectiva</h1>
            <h2>Mírate desde un nuevo punto de vista</h2>
        </header>


        <section id="part-2">
            <header>
                <!-- <h3>What is Perspective</h3> -->
                <p>Somos un equipo de estudiantes de posgrado de la Universidad de Nueva York haciendo un proyecto de investigación sobre Internet, con especial atención a la participación en redes sociales.</p>

            </header>

            <div class="content">
     
 <p><a href="#part-3" title="You are welcome to join us today" class="callToAction scroll" data-speed="300">JOIN US!</a>
</p>

<p><strong>¿Cómo puedo participar?</strong><br />
Buscamos voluntarios para participar en un estudio durante 2 semanas. Este proyecto está enfocado en usuarios del navegador Google Chrome, quienes deben descargar e instalar una extensión para este navegador. Te daremos unas sencillas instrucciones pasao a paso una vez que te <a href="#part-3" title="You are welcome to join us today" class="scroll" data-speed="300">registres</a> para este estudio. 
</p>



<p><strong>Privacidad:</strong><br/>Estamos monitoriean comportamientos desde el navegador en computadores de escritorio con fines académicos solamente, y no compartiremos ni utilizaremos tu información de ninguna manera diferente a la de este estudio. Si tienes preguntas o preocupaciones, por favor <a href="mailto:sam926@nyu.edu,ckn220@nyu.edu,ssb425@nyu.edu?subject=Inquiry about Perspective Research Study" class="emailLink">contáctanos</a>.
</p>

            </div>
        </section>

        <section id="part-3">
            <header>
                <h3>¡Bienvenido a bordo!</h3>
            </header>
            
            <div class="content">
            
				<div id="thankYouNote">
					<p><strong>Gracias por unirte al equipo y participar de este estudio, estamos casi listos.</strong></p>
					<p>Sólo ingresa tu email para que puedas descargar la Extensión de Chrome. No compartiremos tu dirección con nadie, ni la usaremos para fines diferentes a este estudio.</p>
					
					<form action="download.php" method="post" id="registry" class="myForm">
					<div class='field'>
						<label for="userEmail">Mi email es </label>
						<input type="email" id="userEmail" name="userEmail" value="" class="myInput">
					</div>
					<div class='action'>
						<input type="submit" id="myButton" class="myButton" name="submit" value="Download the extension" disabled="disabled">
					</div>
					</form>
					
				</div>
	            
	            <div class="downloadInstructions">
		            <p>Tu descarga está lista. Para instalar esta Extensión, sigue estos simples pasos:</p>
		            <ol>
		            	<li>Encuentra el archivo que descargaste, y descomprímelo haciendo doble click sobre él.<img src="i/extract.png" width="800px"></li>
		            	<li>Regresa a Chrome, y abre las Preferencias, y luego la opción Extensiones.</li>
		            	<li>Activa la opción de desarrolladores.<br /><img src="i/extensions.png" width="800px"></li>
		            	<li>Click en "Cargar extensión descomprimida..." y selecciona la carpeta que descomprimiste luego de descargar.</li>
		            	<li>Cierra el navegador y vuelve a abrirlo.</li>
		            </ol>
		            <p>¡Eso es todo! Te enviaremos un email con más información dentro de algunos días. Agradecemos tu participación en este estudios.</p>
		         </div>
	            
            </div>

		</section>
			
        
    </section>
    
<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script> -->
<script src="js/smooth-scroll.js" type="text/javascript"></script>

</script>
<script type="text/javascript">

// http://jsfiddle.net/byrichardpowell/38MGS/1/
// Animate an element by adding a class to it:
// Paramaters: 
// anim: the class name to add
// time: animation duration (optional, fallsback to the class)
// cb: an optional callback function to happen once the animation ends
$.fn.animatecss = function(anim, time, cb) {
    if (time) this.css('-webkit-transition', time / 1000 + 's');
    this.addClass(anim);
    if ($.isFunction(cb)) {
        setTimeout(function() {
            // Ensure that the element is available inside the callback.
            $(this).each(cb);
        }, (time) ? time : 250);
    }
    return this;
};

$(document).ready(function() {
    $('#userEmail').keyup(function() {

        var empty = false;
        $('#userEmail').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('#myButton').attr('disabled', 'disabled');
        } else {
            $('#myButton').attr('disabled', false);
            $('#myButton').animatecss('grey', 250, function() { console.log('callback'); });

        }
    });
});


$('.myForm').on('submit', function() {

	//alert('You submitted the form!');
	$('.downloadInstructions').animatecss('blur-in', 250, function() { console.log('callback'); });
	$('.myForm').animatecss('fade-out', 250, function() { console.log('callback'); });
});

 
      
(function() {

    var quotes = $(".quotes");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(250)
            .delay(4000)
            .fadeOut(250, showNextQuote);
    }
    
    showNextQuote();
    
})();


    </script>
  </section>
</body>
</html>
