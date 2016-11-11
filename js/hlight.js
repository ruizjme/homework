$(document).keyup(function(e) {
    var $hlight = $('div.form.hlight'), $div = $('div.form');
    if (e.keyCode == 74) {
        $hlight.removeClass('hlight').next().addClass('hlight');
        if ($hlight.next().length == 0) {
            $div.eq(0).addClass('hlight')
        }
    } else if (e.keyCode === 75) {
        $hlight.removeClass('hlight').prev().addClass('hlight');
        if ($hlight.prev().length == 0) {
            $div.eq(-1).addClass('hlight')
        }
    }
    $('html, body').animate({scrollTop: $('.hlight').offset().top - 57});
});

// $('.form').click(function() {
//     // alert("Your book is overdue.");
//     // $('div.form.hlight').removeClass('hlight');
//     $(this).addClass('hlight');
//     });