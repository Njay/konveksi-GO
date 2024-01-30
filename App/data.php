<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Pesanan
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tipe</th>
                    <th>Ukuran</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($kon, "SELECT * FROM tb_order");
                    while($order = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width = '5%'><?php echo $no ?></td>
                    <td><?php echo $order['nama'];?></td>
                    <td><?php echo $order['alamat'];?></td>
                    <td><?php echo $order['tipe'];?></td>
                    <td><?php echo $order['ukuran'];?></td>
                    <td><?php echo $order['jumlah'];?></td>
                    <td>
                      <a onclick = "hapus_data(<?php echo $order['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="../App/index.php?page=edit_data&& id=<?php echo $order['id'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                  <?php }?>                    
                  </tbody>                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Isikan Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action ="../Action/tambah_data.php">
              <div class="modal-body">              
                  <div class="form-group">
                    <label for="formGroupExampleInput">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputState">Tipe Baju</label>
                      <select id="tipe" class="form-control" name ="tipe">
                        <option selected>Pilih...</option>
                        <option value= "Kaos Pendek">Kaos Pendek</option>
                        <option value= "Kaos Panjang">Kaos Panjang</option>
                        <option value= "Kemeja Pendek">Kemeja Pendek</option>
                        <option value= "Kemeja Panjang">Kemeja Panjang</option>
                        <option value= "Celana Pendek">Celana Pendek</option>
                        <option value= "Celana Panjang">Celana Panjang</option>
                        <option value= "Gamis">Gamis</option>
                        <option value= "Long Dress">Long Dress</option>

                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Ukuran</label>
                      <select id="ukuran" class="form-control" name="ukuran">
                        <option selected>Pilih</option>
                        <option value ="S">S</option>
                        <option value ="M">M</option>
                        <option value ="L">L</option>
                        <option value ="XL">XL</option>
                        <option value ="XXL">XXL</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Jumlah</label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah">
                    </div>
                  </div>              
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script>
        function hapus_data(data_id) {
          Swal.fire({
            title: "Hapus Data?",
            //showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Hapus",
            confirmButtonColor: "#CD5C5C"
            //denyButtonText: `Don't save`
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location=("../Action/hapus_data.php?id="+data_id);
            }
          });         
        }
      </script>
    <!-- /.content -->
  <!-- /.content-wrapper -->
</body>
</html>
