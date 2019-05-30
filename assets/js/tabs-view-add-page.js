$(document).ready(function() {

    // DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse


    // if the tabs are in a narrow column in a larger viewport
    $('.sidebar-tabs').tabCollapse({
        tabsClass: 'visible-tabs',
        accordionClass: 'hidden-tabs'
    });

    // if the tabs are in wide columns on larger viewports
    $('.content-tabs').tabCollapse();

    // initialize tab function
    $('.nav-tabs a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // slide to top of panel-group accordion
    $('.panel-group').on('shown.bs.collapse', function() {
        var panel = $(this).find('.in');
        $('html, body').animate({
            scrollTop: panel.offset().top + (-60)
        }, 500);
    });

});
