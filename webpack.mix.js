const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
     'my_modules/admin/vendors/bootstrap/css/bootstrap.min.css',
     'my_modules/admin/vendors/jquery-ui/jquery-ui.min.css',
     'my_modules/admin/vendors/jquery-ui/jquery-ui.theme.min.css',
     'my_modules/admin/vendors/simple-line-icons/css/simple-line-icons.css',
     'my_modules/admin/vendors/flags-icon/css/flag-icon.min.css',
     'my_modules/admin/vendors/chartjs/Chart.min.css',
     'my_modules/admin/vendors/morris/morris.css',
     'my_modules/admin/vendors/weather-icons/css/pe-icon-set-weather.min.css',
     'my_modules/admin/vendors/starrr/starrr.css',
     'my_modules/admin/vendors/fontawesome/css/all.min.css',
     'my_modules/admin/vendors/ionicons/css/ionicons.min.css',
     'my_modules/admin/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css',
     'my_modules/admin/vendors/select2/css/select2.min.css',
     'my_modules/admin/vendors/select2/css/select2-bootstrap.min.css',
     'my_modules/admin/vendors/summernote/summernote-bs4.css',
     'my_modules/admin/vendors/materialdesign-webfont/css/materialdesignicons.min.css',
     'my_modules/admin/vendors/datatable/css/dataTables.bootstrap4.min.css',
     'my_modules/admin/vendors/datatable/buttons/css/buttons.bootstrap4.min.css',
     'my_modules/admin/css/fileinput.min.css',
     'my_modules/admin/css/fileinput-rtl.min.css',
     'my_modules/admin/css/main.css',
], 'public/css/all.css')

// .styles([
//      'public/admin/vendors/jquery/jquery-3.3.1.min.js',
//      'public/admin/vendors/jquery-ui/jquery-ui.min.js',
//      'public/admin/vendors/moment/moment.js',
//      'public/admin/vendors/bootstrap/js/bootstrap.bundle.min.js',
//      'public/admin/vendors/slimscroll/jquery.slimscroll.min.js',
//      'public/admin/vendors/datatable/js/dataTables.bootstrap4.min.js',
//      'public/admin/vendors/datatable/jszip/jszip.min.js',
//      'public/admin/vendors/datatable/pdfmake/pdfmake.min.js',
//      'public/admin/vendors/datatable/pdfmake/vfs_fonts.js',
//      'public/admin/vendors/datatable/buttons/js/dataTables.buttons.min.js',
//      'public/admin/vendors/datatable/buttons/js/buttons.bootstrap4.min.js',
//      'public/admin/vendors/datatable/buttons/js/buttons.colVis.min.js',
//      'public/admin/vendors/datatable/buttons/js/buttons.flash.min.js',
//      'public/admin/vendors/datatable/buttons/js/buttons.html5.min.js',
//      'public/admin/vendors/datatable/buttons/js/buttons.print.min.js',
//      'public/admin/js/datatable.script.js',
//      'public/admin/js/app.js',
//      'public/admin/vendors/raphael/raphael.min.js',
//      'public/admin/vendors/morris/morris.min.js',
//      'public/admin/vendors/chartjs/Chart.min.js',
//      'public/admin/vendors/starrr/starrr.js',
//      'public/admin/vendors/jquery-flot/jquery.canvaswrapper.js',
//      'public/admin/vendors/jquery-flot/jquery.colorhelpers.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.saturated.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.browser.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.drawSeries.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.uiConstants.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.legend.js',
//      'public/admin/vendors/jquery-flot/jquery.flot.pie.js',
//      'public/admin/vendors/chartjs/Chart.min.js',
//      'public/admin/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js',
//      'public/admin/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js',
//      'public/admin/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js',
//      'public/admin/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js',
//      'public/admin/vendors/apexcharts/apexcharts.min.js',
//      'public/admin/vendors/select2/js/select2.full.min.js',
//      'public/admin/js/select2.script.js',
//      'public/admin/vendors/summernote/summernote-bs4.js',
//      'public/admin/js/summernote.script.js',
//      'public/admin/vendors/dropzone/dropzone.js',
//      'public/admin/css/fileinput.min.js',
//      'public/admin/js/home.script.js', 
// ], 'public/js/all.js');
 