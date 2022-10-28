function searchFunction2() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue,date;
    input = document.getElementById("kt_datepicker_2");
    date = new Date(input);
    filter = date.value.toUpperCase();
    table = document.getElementById("kt_table_widget_4_table");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }