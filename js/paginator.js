$(document).ready( function () {
    $('#myTable').DataTable({
    });
} );

$.extend( true, $.fn.dataTable.defaults, {
    "searching": false,
    "ordering": false,
    "displayLength": 5,
    "pageLength": false,
    "lengthMenu": false,
    "bInfo": false,
    "bLengthChange": false
} );

