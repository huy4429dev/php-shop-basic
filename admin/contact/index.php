<?php
include('../../autoload/Autoload.php');

//================== check login

if (!Auth::user()) {

    Redirect::url('admin/account/login.php');
}


include('../../layouts/admin/header.php');

?>
<div class="d-flex justify-content-between mb-4">
    <h4>Quản lý liên hệ </h4>
     <a href="#" class="btn btn-primary btn-sm">Thêm mới</a>
</div>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm" >#ID
      </th>
      <th class="th-sm">Họ tên
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Phone
      </th>
      <th class="th-sm">Chủ đề
      </th>
      <th class="th-sm ">Nội dung
      </th>
      <th class="th-sm text-center">Thời gian
      </th>
      <th class="th-sm text-center">Trạng thái</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td >@item.Id</td>
      <td>@item.Name</td>
      <td>@item.Email</td>
      <td>@item.Phone</td>
      <td>@item.Subject</td>
      <td data-toggle="modal" data-target="#basicExampleModal-@item.Id" class="d-flex justify-content-between show-Content">
      <i class="fa fa-eye" aria-hidden="true"></i> 
      </td>
      <td class="text-center">@item.CreatedAt</td>
      <td class="text-center">
         <b  class='badge badge-warning status-Content'>Chưa xem</b>
      </td>
    </tr>
  </tbody>
</table>


<?php 
    include('../../layouts/admin/footer.php');
?>

    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable( 
               {  
                 "order": [[ 0, "desc" ]]
               },
            );
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script>
     // change status contact while click show content 
      
     
      let showContents  = document.querySelectorAll('.show-Content');
      let statusContent = document.querySelectorAll('.status-Content');
      
        showContents.forEach(function(item, index){
          item.addEventListener('click', function() {
          let idContact = this.dataset.target.slice(19);
        
          let url = "/admin/contact/update-status/" +  idContact;
          
          fetch(url)
                  .then(response => response.json())
                  .then(data => {
                    statusContent[index].className = 'badge badge-success status-Content'; 
                    statusContent[index].innerText = 'Đã xem';
                  })
                  .catch(err => {
                      console.log(err);
                  })
          })
        })
    </script>