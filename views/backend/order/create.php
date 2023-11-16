
<?php require_once "../views/backend/header.php";?>

      <!-- CONTENT -->
      <form action ="index.php?option=order&cat=process" method="post" enctype="multipart/form-data">

      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                  <strong class="text-dark text-lg">THÊM ĐƠN HÀNG</strong>
                  </div>
               </div>
            </div>
         </section>
         <section class="content">
            <div class="card">
               <div class="card-header text-right">
                  <a href="index.php?option=order" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                  </a>
                  <button class="btn btn-sm btn-primary" type ="submit"name="THEM">
                     <i class="fa fa-save" aria-hidden="true"></i>
                     Thêm Đơn Hàng
                  </button>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="mb-3">
                           <label>user_id</label>
                           <input type="text" name="user_id" placeholder="Nhâp User_id"  class="form-control">
                        </div>
                        <div class="mb-3">
                              <label>Deliveryaddress</label>
                              <input type="text" placeholder="Nhập deliveryaddress" name="deliveryaddress" class="form-control">
                           </div>
                        <div class="mb-3">
                           <label>deliveryname</label>
                          <textarea name="deliveryname" placeholder="Nhập deliveryname"  class="form-control"></textarea>
                         </div>
                        <div class="mb-3">
                           <label>Deliveryphone</label>
                          <textarea name="deliveryphone"  placeholder="Nhập deliveryphone" class="form-control"></textarea>
                         </div>
                        
                     </div>
                
                     <div class="col-md-3">
                     <div class="mb-3">
                           <label>Deliveryemail</label>
                           <textarea name="deliveryemail" placeholder="Nhập deliveryemail"  class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                           <label>Note</label>
                           <textarea name="note" placeholder="Nhập note"  class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                           <label>Trạng thái</label>
                           <select name="status" class="form-control">
                              <option value="1">Xuất bản</option>
                              <option value="2">Chưa xuất bản</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      </form>
      <?php require_once "../views/backend/footer.php";?>
