require('./bootstrap');

import 'datatables/media/css/jquery.dataTables.css';
import 'datatables';

$(document).ready(function() {
    var students = $('#students').DataTable({
        responsive: true
    });

    var users = $('#users').DataTable({
        responsive: true
    });
});
