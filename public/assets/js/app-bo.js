/*global $, document, Chart, LINECHART, data, options, window*/
$(document).ready(function () {

    'use strict';

    // Main Template Color
    var brandPrimary = '#33b35a';

    // ------------------------------------------------------- //
    // Custom Scrollbar
    // ------------------------------------------------------ //
      $( '#sidebar' ).mCustomScrollbar({
        theme: "minimal"
      });

    // ------------------------------------------------------- //
    // Side Navbar Functionality
    // ------------------------------------------------------ //
      $( '#sidebarCollapse' ).on('click', function () {
        $(this).find( 'i' )
          .toggleClass('fa-times')
          .toggleClass('fa-bars');
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });

});