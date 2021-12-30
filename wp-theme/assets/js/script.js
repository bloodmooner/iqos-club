'use strict';
new Accordion(['.accordion-container'], {
  openOnInit: [2],
  collapse: false
});





$( document ).ready(function() {
  $('a[href^="#"').on('click', function() {

    let href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    });
    return false;
  });
});
