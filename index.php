<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Internet usage experiment">
    <meta name="viewport" content="width=device-width">

    <title>Perspective</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,900|Montserrat:700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35407366-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

    <section id="content">
        <header>
            <div class="logo">
                <div class="p-stem"></div>

                <div class="p-eye"></div>
            </div>

			<h1>Perspective</h1>
            <h2>See yourself from a different point of view</h2>
        </header>

        <section id="part-1">
        <header>
	        <h4 class="strong">We all love using social media.</h4>
	        <h4>Each year, the number of hours we spend on YouTube, Facebook, Twitter and other social networking sites grows exponentially. Yet research shows we’ve never been so unhappy. <strong>We want to know why</strong>.
	        </h4>
        </header>
        <div class="content">
			<div id="factQuotes" class="cf">
				<cite class="quotes">2.9 million hours are spent on Facebook each month	</cite>
				<cite class="quotes">190 million is the average number of tweets per day</cite>
				<cite class="quotes">2.9 billion hours are spent monthly on Youtube</cite>
			</div>
        </div>
		<div class="content">
        <p class="center">
        <a href="#part-3" title="You are welcome to join us today" class="callToAction scroll" data-speed="500">JOIN US!</a> or <a href="#part-2" title="Learn more about this project" class="scroll" data-speed="300">Learn more</a>
        </p>
		</div>				

                
        </section>

        <section id="part-2">
            <header>
                <h3>What is Perspective</h3>
            </header>

            <div class="content">
               
<p><strong>Perspective</strong> is a research project on how we use the internet, with particular attention paid to participation within social media networks. Technology has the proven power to influence our behaviors, so we set to the task of investigating to what extent that influence can be measured, experienced and improved upon. 
</p>
<p><strong>Privacy:</strong><br/> We are monitoring social media habits for academic purposes alone. We are not sharing or profiting from your data in any way and we’re not storing your data. If you have any questions or concerns, please contact us. 
</p>
<p><strong>How can you participate?</strong><br />
This project requires the user to have a Google Chrome browser and to download and install a plugin. We have provided steps by steps <a href="#part-4" title="How to Install" class="scroll">installation instructions</a> here. 
</p>


         <a href="#part-3" title="You are welcome to join us today" class="callToAction scroll" data-speed="1000">JOIN US!</a>

            </div>
        </section>

        <section id="part-3">
            <header>
                <h3>Welcome aboard</h3>
            </header>
            
            <div class="content">
            
				<div id="thankYouNote">
					<p><strong>Thank you for joining our team and being part of this study, we are almost done.</strong></p>
					<p>Just input your email so you can download the Chrome Extension. We will never share this address with anyone, or use it for any other purposes than this study. </p>
					
					<form action="download.php" method="post" id="registry" class="myForm">
					<div class='field'>
						<label for="userEmail">My email is </label>
						<input type="email" id="userEmail" name="userEmail" value="" class="myInput">
					</div>
					<div class='action'>
						<input type="submit" id="myButton" class="myButton" name="submit" value="Download the extension" disabled="disabled">
					</div>
					</form>
					
				</div>
	            
	            <div class="downloadInstructions">
		            <p>Your downloaded is ready. To install this Chrome Extension following this simple steps:</p>
		            <ol>
		            	<li>Locate the file you downloaded, and uncompress it by double clicking it's icon<img src="i/extract.png" width="800px"></li>
		            	<li>Now, go back to Chrome, and go to Preferences (<code>⌘+,</code>), then Extensions.</li>
		            	<li>Make sure the developer mode is active.<br /><img src="i/extensions.png" width="800px"></li>
		            	<li>Click the "Load unpacked extension..." button, and select your unzipped folder</li>
		            	<li>Close your browser, and restart Chrome</li>
		            </ol>
		            <p>That's it!. We'll email you further information within a few days. We appreciate you helping with this study.</p>
		         </div>
	            
            </div>

		</section>
			
        <div id="blob-container">
        <canvas></canvas> 
        <img id="bg" src="i/pattern-bg.png"> <img id="blob-1" src="i/blob-1.png"> <img id="blob-2" src="i/blob-2.png"> <img id="blob-3" src="i/blob-3.png"> <img id="blob-4" src="i/blob-4.png"> <img id="blob-5" src="i/blob-5.png"> <img id="blob-6" src="i/blob-6.png"> <img id="blob-7" src="i/blob-7.png"> <img id="blob-8" src="i/blob-10.png"> <img id="blob-9" src="i/blob-7.png">
        </div>
        
    </section>
    
<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script> -->
<script src="js/parallax.js" type="text/javascript"></script>
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
