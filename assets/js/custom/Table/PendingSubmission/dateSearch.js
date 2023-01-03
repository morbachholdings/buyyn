// function searchFunction2() {
    
//     var input, filter, table, tr, td, i, txtValue,date;
//     input = document.getElementById("kt_datepicker_2");
//     date = new Date(input);
//     filter = date.value.toUpperCase();
//     table = document.getElementById("kt_table_widget_4_table1");
//     tr = table.getElementsByTagName("tr");
  
    
//     for (i = 0; i < tr.length; i++) {
//       td = tr[i].getElementsByTagName("td")[0];
//       if (td) {
//         txtValue = td.textContent || td.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//           tr[i].style.display = "";
//         } else {
//           tr[i].style.display = "none";
//         }
//       }
//     }
//   }
 


$("#kt_daterangepicker_3").daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,
  minYear: 1901,
  maxYear: parseInt(moment().format("YYYY"),12)
}, function(start, end, label) {
  var years = moment().diff(start, "years");
  alert("You are " + years + " years old!");
}
);


  // function searchFunction2() {
  //   var from = $('#datefilterfrom').val();
  //   var to = $('#datefilterto').val();
  
  //   if (!from && !to) { // no value for from and to
  //     return;
  //   }
  
  //   from = from || '1970-01-01'; // default from to a old date if it is not set
  //   to = to || '2999-12-31';
  
  //   var dateFrom = moment(from);
  //   var dateTo = moment(to);
  
  //   $('#kt_table_widget_4_table1 tr').each(function(i, tr) {
  //     var val = $(tr).find("td:nth-child(3)").text();
  //     var dateVal = moment(val, "DD/MM/YYYY");
  //     var visible = (dateVal.isBetween(dateFrom, dateTo, null, [])) ? "" : "none"; // [] for inclusive
  //     $(tr).css('display', visible);
  //   });
  // }
  
  // $('#datefilterfrom').on("change", filterRows);
  // $('#datefilterto').on("change", filterRows);