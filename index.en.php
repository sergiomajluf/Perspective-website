<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Research on Internet usage">
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

			<h1>Perspective</h1>
            <h2>See yourself from a different point of view</h2>
        </header>


        <section id="part-2">
            <header>
                <!-- <h3>What is Perspective</h3> -->
                <p>We are a team of NYU graduate students doing a research project about the Internet, with particular attention paid to participation within social media networks.</p>

            </header>

            <div class="content">
     
 <p><a href="#part-3" title="You are welcome to join us today" class="callToAction scroll" data-speed="300">JOIN US!</a>
</p>

<p><strong>How can you participate?</strong><br />
We are looking for volunteers who will participate in a 2 week study. This project requires the user to have a Google Chrome browser and to download and install a plugin. We will provide simple step-by-step installation instructions after you <a href="#part-3" title="You are welcome to join us today" class="scroll" data-speed="300">sign up</a> for the study. 
</p>



<p><strong>Privacy:</strong><br/>We are monitoring desktop behavior for academic purposes only and are not sharing or profiting from your data in any way. We will be happy to share the results of our research at the end of the study. If you have any questions or concerns, please <a href="mailto:sam926@nyu.edu,ckn220@nyu.edu,ssb425@nyu.edu?subject=Inquiry about Perspective Research Study" class="emailLink">contact us</a>.
</p>

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
		            <p class="status"><strong>Your download is ready.</strong> To install this Chrome Extension following this simple steps:</p>
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
	$('.status').animatecss('fade-in', 250)
	.delay(2000)
	.css('color', '#fff');
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
