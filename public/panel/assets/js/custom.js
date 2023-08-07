
function q1(id,route,token,txt1,type=null)
{
  Swal.fire({
    title: txt1,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'نه',
    confirmButtonText: 'آره',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      $_token = token;
      $.ajax({
        headers: { 'X-CSRF-Token' : $_token },
        url: route,
        type: 'DELETE',
        cache: false,
        data: { 'id': id }, //see the $_token
        success: function(data) {
          if(data=='0')
          {
            Swal.fire({
              title: 'عملیات ناموفق',
              text : 'خطا در انجام عملیات',
              icon: 'error',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'باشه'
            });
          }
          else if(data=='1'){
            Swal.fire({
              title: 'عملیات موفق',
              text : 'انجام عملیات با موفقیت انجام شد',
              icon: 'success',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'باشه'
            }).then((result) => {
              if (result.value) {
                location.reload();
              }
            });
          }

        },
        error: function(data) {
          console.log(data);
        }
      });
    }
  });
  // $('.swal2-title').css('font-size','20px');
  // $('.swal2-cancel').addClass('list-actions__item_red');
  // $('.swal2-confirm').addClass('list-actions__item_blue');

}

$(document).ready(function(){
  datatable = $(".datatable1").DataTable({
    'pageLength': 10,
    'ordering': true,
    'paging': true,
    'searching':true
  });

  const filterSearch = document.querySelector('[data-kt-ecommerce-order-filter="search"]');
  filterSearch.addEventListener('keyup', function (e) {
      datatable.search(e.target.value).draw();
  });

});
