<?php include "./assets/component/header.php"?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">User</h4>
                  <p class="card-category">Add New User to Warehouse</p>
                </div>
                <br>
                <div class="card-body">
                  <form>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="outletName">Outlet Name</label>
                          <select class="form-control" id="outletName">
                            <option>Warehouse</option>
                            <option>Cabang Baru</option>
                            <option>Barokah Mart</option>
                            <option>Mini Mart</option>
                            <option>Tel Mart</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-Mail</label>
                          <input type="email" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" minlength="8" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="text-center">
                            <button type="submit" id="btnSave" class="btn btn-warning btn-round text-center">Save Outlet</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

<?php include "./assets/component/footer.php"?>

<script>
  $(document).ready(function() {
    $('#outletName').select2();
  });
  
  $("#btnSave").click(function(){
    Swal.fire({
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
    })
  });
</script>

</body>

</html>