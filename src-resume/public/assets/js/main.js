function pdfVersion() {
    var resume = document.getElementById('resume');
    html2pdf(resume, {
        filename: 'sayfessyd - resume.pdf',
        image: {
            type: 'jpeg',
            quality: 0.98
        },
        html2canvas: {
            dpi: 192,
            letterRendering: true
        },
        jsPDF: {
            unit: 'in',
            format: 'a4',
            orientation: 'portrait'
        }
    });
}


jQuery(document).ready(function ($) {


    /*======= Skillset *=======*/


    $('.level-bar-inner').css('width', '0');

    $(window).on('load', function () {

        $('.level-bar-inner').each(function () {

            var itemWidth = $(this).data('level');

            $(this).animate({
                width: itemWidth
            }, 800);

        });

    });



});