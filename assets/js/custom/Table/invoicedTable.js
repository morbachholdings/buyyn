var KTTablesWidget6 = (function () {
  var e, t, a;
  const l = () => {
      const e = document.querySelector(
        '[data-kt-table-widget-6="filter_status"]'
      );
      $(e).on("select2:select", function (e) {
        const a = $(this).val();
        "Show All" === a ? t.search("").draw() : t.search(a).draw();
      });
    },
    r = [
      {
        image: "76",
        name: "Go Pro 8",
        description: "Latest  version of Go Pro.",
        cost: "500.00",
        qty: "1",
        total: "500.00",
        stock: "12",
      },
      {
        image: "60",
        name: "Bose Earbuds",
        description: "Top quality earbuds from Bose.",
        cost: "300.00",
        qty: "1",
        total: "300.00",
        stock: "8",
      },
      {
        image: "211",
        name: "Dry-fit Sports T-shirt",
        description: "Comfortable sportswear.",
        cost: "89.00",
        qty: "1",
        total: "89.00",
        stock: "18",
      },
      {
        image: "21",
        name: "Apple Airpod 3",
        description: "Apple's latest earbuds.",
        cost: "200.00",
        qty: "2",
        total: "400.00",
        stock: "32",
      },
      {
        image: "83",
        name: "Nike Pumps",
        description: "Apple's latest headphones.",
        cost: "200.00",
        qty: "1",
        total: "200.00",
        stock: "8",
      },
    ],
    o = () => {
      const e = document.querySelectorAll(
          '[data-kt-table-widget-6="expand_row6"]'
        ),
        t = [3, 1, 3, 1, 2, 1];
      e.forEach((e, a) => {
        e.addEventListener("click", (l) => {
          l.stopImmediatePropagation(), l.preventDefault();
          const o = e.closest("tr"),
            s = ["isOpen", "border-bottom-0"],
            n = [];
          for (var d = 0; d < t[a]; d++) n.push(r[d]);
          if (o.classList.contains("isOpen")) {
            for (
              ;
              o.nextSibling &&
              "subtable_template" ===
                o.nextSibling.getAttribute("data-kt-table-widget-6");

            )
              o.nextSibling.parentNode.removeChild(o.nextSibling);
            o.classList.remove(...s), e.classList.remove("active");
          } else i(n, o), o.classList.add(...s), e.classList.add("active");
        });
      });
    },
    i = (t, l) => {
      t.forEach((r, o) => {
        const i = a.cloneNode(!0),
          s = i.querySelector('[data-kt-table-widget-6="template_image"]'),
          n = i.querySelector('[data-kt-table-widget-6="template_name"]'),
          d = i.querySelector(
            '[data-kt-table-widget-6="template_description"]'
          ),
          m = i.querySelector('[data-kt-table-widget-6="template_cost"]'),
          c = i.querySelector('[data-kt-table-widget-6="template_qty"]'),
          g = i.querySelector('[data-kt-table-widget-6="template_total"]'),
          f = i.querySelector('[data-kt-table-widget-6="template_stock"]'),
          u = s.getAttribute("data-kt-src-path");
        s.setAttribute("src", u + r.image + ".gif"),
          (n.innerText = r.name),
          (d.innerText = r.description),
          (m.innerText = r.cost),
          (c.innerText = r.qty),
          (g.innerText = r.total),
          r.stock > 10
            ? (f.innerHTML =
                '<div class="badge badge-light-success">In Stock</div>')
            : (f.innerHTML =
                '<div class="badge badge-light-warning">Low Stock</div>'),
          1 === t.length || t.length;
        e.querySelector("tbody").insertBefore(i, l.nextSibling);
      });
    },
    s = () => {
      document
        .querySelectorAll('[data-kt-table-widget-6="subtable_template"]')
        .forEach((e) => {
          e.parentNode.removeChild(e);
        });
      e.querySelectorAll("tbody tr").forEach((e) => {
        e.classList.remove("isOpen"),
          e.querySelector('[data-kt-table-widget-6="expand_row6"]') &&
            e
              .querySelector('[data-kt-table-widget-6="expand_row6"]')
              .classList.remove("active");
      });
    };
  return {
    init: function () {
      (e = document.querySelector("#kt_table_widget_6_table")) &&
        ((() => {
          const l = document.querySelector(
            '[data-kt-table-widget-6="subtable_template"]'
          );
          (a = l.cloneNode(!0)).classList.remove("d-none"),
            l.parentNode.removeChild(l),
            (t = $(e).DataTable({
              info: !1,
              order: [],
              lengthChange: !1,
              pageLength: 10,
              ordering: !1,
              paging: !1,
              columnDefs: [
                { orderable: !1, targets: 0 },
                { orderable: !1, targets: 6 },
              ],
            })).on("draw", function () {
              s(), o();
            });
        })(),
        // document
        //   .querySelector('[data-kt-table-widget-6="search"]')
        //   .addEventListener("keyup", function (e) {
        //     t.search(e.target.value).draw();
        //   }),
        l(),
        o());
    },
  };
})();
"undefined" != typeof module && (module.exports = KTTablesWidget6),
  KTUtil.onDOMContentLoaded(function () {
    KTTablesWidget6.init();
  });