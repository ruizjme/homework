	<script type="text/javascript">
    // Andy Langton's show/hide/mini-accordion - updated 23/11/2009
    // Latest version @ https://andylangton.co.uk/jquery-show-hide
     
    // this tells jquery to run the function below once the DOM is ready
    $(document).ready(function() {
     
    // choose text for the show/hide link - can contain HTML (e.g. an image)
    var showText='Ans';
    var hideText='Ans';
     
    // initialise the visibility check
    var is_visible = false;
     
    // append show/hide links to the element directly preceding the element with a class of "toggle"
    $('.toggle').prev().append('<div class="toggleLink">'+showText+'  </div>');
     
    // hide all of the elements with a class of 'toggle'
    $('.toggle').hide();
     
    // capture clicks on the toggle links
    $('div.toggleLink').click(function() {
     
    // switch visibility
    is_visible = !is_visible;
     
    // change the link depending on whether the element is shown or hidden
    $(this).html( (!is_visible) ? showText : hideText);
     
    // toggle the display - uncomment the next line for a basic "accordion" style
    //$('.toggle').hide();$('a.toggleLink').html(showText);
    $(this).parent().next('.toggle').toggle('slow');
     
    // return false so any link destination is not followed
    return false;
     
    });

    $(document).keyup(function(objEvent) {
        if (objEvent.keyCode == 76) {
            $('.hlight div.toggleLink').click();
        }
    })

    });
    </script>





