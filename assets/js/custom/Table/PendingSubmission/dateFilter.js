"use strict";
var KTAppEcommerceSalesListing = (function () {
  var e,
    t,
    n,
    r,
    o,
    a = (e, n, a) => {
        console.log(123);
      (r = e[0] ? new Date(e[0]) : null),
        (o = e[1] ? new Date(e[1]) : null),
        $.fn.dataTable.ext.search.push(function (e, t, n) {
          var a = r,
            c = o,
            l = new Date(moment($(t[3]).text(), "DD/MM/YYYY")),
            u = new Date(moment($(t[4]).text(), "DD/MM/YYYY"));
            console.log(l);
          return (
            (null === a && null === c) ||
            (null === a && c >= u) ||
            (a <= l && null === c) ||
            (a <= l && c >= u)
          );
        }),
        t.draw();
    }
  return {
    init: function () {
      (e = document.querySelector("#kt_table_widget_4_table")) &&
        ((t = $(e).DataTable({
          info: !1,
          order: [],
          pageLength: 10,
          columnDefs: [
            { orderable: !1, targets: 0 },
            { orderable: !1, targets: 7 },
          ],
        })),
        (() => {
          const e = document.querySelector("#kt_ecommerce_sales_flatpickr");
          n = $(e).flatpickr({
            altInput: !0,
            altFormat: "d/m/Y",
            dateFormat: "Y-m-d",
            mode: "range",
            onChange: function (e, t, n) {
              a(e, t, n);
            },
          });
        })(),
        document
          .querySelector("#kt_ecommerce_sales_flatpickr_clear")
          .addEventListener("click", (e) => {
            n.clear();
          }));
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTAppEcommerceSalesListing.init();
});
