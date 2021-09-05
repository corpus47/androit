require('./bootstrap');

import 'datatables/media/css/jquery.dataTables.css';
import 'datatables';

$(document).ready(function() {
    $('#students').DataTable({
        responsive: true
    });
});
