$("#kt_datatable_fixed_columns").DataTable({
    scrollY:        "500px",
    scrollX:        true,
    scrollCollapse: true,
    fixedColumns:   {
     left: 1
    }
   });

   $("#kt_datatable_vertical_scroll").DataTable({
    "scrollY": "100px",
    "scrollCollapse": true,
    "paging": false,
    "dom": "<'table-responsive'tr>"
});