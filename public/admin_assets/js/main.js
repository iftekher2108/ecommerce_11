/**
 * Main
 */
    // Global ajax setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



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


// text Editor settings
tinymce.init({
    selector: 'textarea.tinymce',
    license_key: 'gpl',
    plugins: 'preview importcss searchreplace autolink autosave directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount charmap quickbars emoticons accordion',
    editimage_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table ',
    toolbar: "undo redo | bold italic superscript subscript underline strikethrough blocks fontsizeinput fontfamily align numlist bullist | link image | forecolor backcolor removeformat | table media | lineheight outdent indent| charmap emoticons | print |code fullscreen preview |  pagebreak anchor codesample | accordion accordionremove | ltr rtl",
    autosave_ask_before_unload: true,
    autosave_interval: '10s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    // link_list: [{
    //         title: 'My page 1',
    //         value: 'https://www.tiny.cloud'
    //     },
    //     {
    //         title: 'My page 2',
    //         value: 'http://www.moxiecode.com'
    //     }
    // ],
    // image_list: [{
    //         title: 'My page 1',
    //         value: 'https://www.tiny.cloud'
    //     },
    //     {
    //         title: 'My page 2',
    //         value: 'http://www.moxiecode.com'
    //     }
    // ],

    image_class_list: [{
            title: 'Default',
            value: 'default-img'
        },
        {
            title: 'Cube Style',
            value: 'cube-img'
        },
        {
            title: 'Peralax Style',
            value: 'peralax-img'
        },
        {
            title: 'Sun Flower Style',
            value: 'sun-flower-img'
        }
    ],

    importcss_append: true,
    image_title: true,
    automatic_uploads: true,
    images_upload_url: '/api/text-editor-upload',
    file_picker_types: 'image',
    file_picker_callback: (cb, value, meta) => {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // Call the callback to populate the Title field with the file name
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
        };

        input.click();
    },
    //   // Image upload handler
    //   images_upload_handler: function (blobInfo, success, failure) {
    //     var formData = new FormData();
    //     formData.append('file', blobInfo.blob(), blobInfo.filename());

    //     fetch('/admin/text-editor-upload', {
    //         method: 'POST',
    //         headers: {
    //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Include CSRF token
    //         },
    //         body: formData
    //     })
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error('Network response was not ok');
    //         }
    //         return response.json(); // Parse the JSON response
    //     })
    //     .then(json => {
    //         if (!json || typeof json.location !== 'string') {
    //             failure('Invalid JSON response');
    //             return;
    //         }
    //         success(json.location); // Return the URL of the uploaded image
    //     })
    //     .catch(error => {
    //         failure('Image upload failed: ' + error.message);
    //     });
    // },
    height: 600,
    highlight_on_focus: false,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | fontsizeinput | forecolor backcolor quicklink charmap emoticons h2 h3 align quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'wrap',
    contextmenu: 'link image table',
    // skin: useDarkMode ? 'oxide-dark' : 'oxide',
    // content_css: useDarkMode ? 'dark' : 'default',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});

// text Editor settings







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

