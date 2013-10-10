
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
