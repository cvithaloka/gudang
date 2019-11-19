<?php include "./assets/component/header.php"?>

  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Outlet</th>
                        <th>Barang</th>
                        <th>Qty</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1</td>
                          <td>Cabang Baru</td>
                          <td class="font-weight-bold">Kentang </td>
                          <td> 100pcs </td>
                          <td> 30-09-2019</td>
                          <td>
                            <button type="button" rel="tooltip" id="btnSend" class="btn btn-sm btn-info">
                              <i class="material-icons">send</i>
                          </td>
                        </tr>
                        <tr>
                          <td> 2</td>
                          <td>Barokah Mart</td>
                          <td class="font-weight-bold">Sabun</td>
                          <td> 10 pcs</td>
                          <td> 01-10-2019</td>
                          <td>
                            <button type="button" rel="tooltip" class="btn btn-sm btn-info">
                              <i class="material-icons">send</i>
                          </td>
                        </tr>
                        <tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<?php include "./assets/component/footer.php"?>

<script>
  $(document).ready(function(){
  $("#btnSend").click(function(){
    Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes',
      showCancelButton: true
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Sent!',
          'Barang Telah Dikirim.',
          'success'
        )
      }
    })
  });
});
</script>

</body>

</html>