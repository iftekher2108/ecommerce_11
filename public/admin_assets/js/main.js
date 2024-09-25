/**
 * Main
 */




$(document).ready(function() {


$('.menu-toggle').click(function(){
    $(this).siblings('.menu-sub').slideToggle(200)
})



$('.layout-menu-toggle').click(function(){
    $('#layout-menu').css('transform','translateX(0%)');
})

$('.nav-panel-close').click(function(){
    $('#layout-menu').css('transform','translateX(-100%)');
})






})


  // Accordion active class
  const accordionActiveFunction = function (e) {
    if (e.type == 'show.bs.collapse' || e.type == 'show.bs.collapse') {
      e.target.closest('.accordion-item').classList.add('active');
    } else {
      e.target.closest('.accordion-item').classList.remove('active');
    }
  };

  const accordionTriggerList = [].slice.call(document.querySelectorAll('.accordion'));
  const accordionList = accordionTriggerList.map(function (accordionTriggerEl) {
    accordionTriggerEl.addEventListener('show.bs.collapse', accordionActiveFunction);
    accordionTriggerEl.addEventListener('hide.bs.collapse', accordionActiveFunction);


  });

