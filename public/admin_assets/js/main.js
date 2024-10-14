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

// preview image
$('.input-image').on('change', function(e) {
    $('.preview-img').attr('src', URL.createObjectURL(e.target.files[0]))
})

$('.preview-img').click(function(){
    $('.input-image').click();
})

// preview image

})

// data table
$('.advance-dt').DataTable({
    responsive: true,
    autoWidth: true,
    buttons: [
        'colvis','excelHtml5','pdfHtml5',
    {
        text: 'Json',
        className: 'buttons-json',
        action: function (e, dt, button, config) {
            var data = dt.buttons.exportData();

            DataTable.fileSave(new Blob([JSON.stringify(data)]), 'Export.json');
        }
    },
    {
        extend:'print',
        exportOptions: {
            columns: ':visible'
        },
        customize: function (win) {
            // $(win.document.body)
            //     .css('font-size', '10pt')
            //     .prepend(
            //         // '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
            //         `<h1 style="position:absolute; top:25%; left:25%;" >iftekher mahmud pervez</h1>`
            //     );

            $(win.document.body).find('img').css({
                'width': '50px', // Adjust as needed
                'height': '50px', // Adjust as needed
                'border-radius': '4px',
            });

            // $(win.document.body)
            //     .find('table')
            //     .addClass('compact')
            //     .css('font-size', 'inherit');

        }

    },
],
layout: {
    top1start: 'buttons',
},
// columnDefs: [
//     {
//         targets: -1,
//         visible: false
//     }
// ],

    lengthMenu: [
        [10,20,50,-1],
        [10,20,50,'All'],
    ],
    pageLength: 10,
    stateSave: true,
    select:true,
});
// data table


// normal data table
$('.normal-dt').DataTable({
    responsive: true,
    autoWidth: true,
    lengthMenu: [
        [10,20,50,-1],
        [10,20,50,'All'],
    ],
    pageLength: 10,
    stateSave: true,
});
// normal data table


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

