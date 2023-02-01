const table_title = [
  {
    title: "組別",
  },
  {
    title: "項次",
  },
  {
    title: "廠牌",
  },
  {
    title: "品名",
  },
  {
    title: "級距",
  },
  {
    title: "決標價",
  },
  {
    title: "契約價",
  },
];

//選單

//如果要於網頁載入後再load data可用 ajax_load_data()，上方的可以先定義空資料 let all_data =[]
/* function ajax_load_data() {
  all_data = [];
  $.ajax({
    url: "http://localhost/json/get_products.php?company_id=80510722",
    success: function (result) {
      console.log(result);
      all_data = result;
      reload_my_datatable();
    },
    error: function () {},
  });
} */

function get_products() {
  const company_id = $("#input2").val();
  console.log(company_id);
  $.ajax({
    url: `http://localhost/json/get_products.php?company_id=${company_id}`,
    success: function (result) {
      $("#company_name").html(result.name);

      reload_my_datatable(result.products);
    },
    error: function () {},
  });
}

$(document).ready(function () {
  let my_datatable = $("#my_datatable").DataTable({
    data: null,
    columns: table_title,
    stripeClasses: [],
    bSortClasses: false,
    deferRender: true,
    responsive: true,
    autoWidth: false,
    columnDefs: [
      {
        targets: 3,
        data: function (row) {
          const a_link = ` `;
          return `<div class='td_name'>${row[3]}</div>`;
        },
      },
    ],
    language: {
      search: "",
      info: "顯示頁_PAGE_ / _PAGES_",
      lengthMenu: "顯示 _MENU_ 項每頁",
      paginate: {
        previous: "前一頁",
        next: "下一頁",
      },
      infoEmpty: "No records available - Got it?",
    },
  });

  //reload_data用，重新載入新資料
  window.reload_my_datatable = function (data) {
    my_datatable.clear();
    my_datatable.rows.add(data);
    my_datatable.draw();
  };
});

$("#get_products_form").submit((e) => e.preventDefault());
