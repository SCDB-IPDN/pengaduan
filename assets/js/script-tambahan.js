$(document).ready(function () 
{
    AOS.init({
        duration: 1000,
    });

    $('#pertabelan').DataTable({
        "language":{
            "decimal":        "",
            "emptyTable":     "No data available in table",
            "info":           "Tampil _START_ dari _END_ of _TOTAL_ entri",
            "infoEmpty":      "Showing 0 to 0 of 0 entries",
            "infoFiltered":   "(filtered from _MAX_ total entries)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Tampil _MENU_ entri",
            "loadingRecords": "Loading...",
            "processing":     "Processing...",
            "search":         "Cari:",
            "zeroRecords":    "No matching records found",
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Selanjutnya",
                "previous":   "Sebelumnya"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });
});