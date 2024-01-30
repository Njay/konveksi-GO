<?php
    $id = $_GET['id'];
    
    $query = mysqli_query($kon, "SELECT * FROM tb_order WHERE id='$id'");
    $view = mysqli_fetch_array($query);
    
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>
    <form method="get" action ="../Action/update_data.php">
        <div class="modal-body">              
            <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo$view['nama'];?>">
            <input type="text" class="form-control" id="nama" placeholder="ID" name="id" value="<?php echo$view['id'];?>" hidden>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?php echo$view['alamat'];?>">
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Tipe Baju</label>
                <select id="tipe" class="form-control" name ="tipe">
                <option selected value="<?php echo$view['tipe'];?>"><?php echo$view['tipe'];?></option>
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
                <option selected value="<?php echo$view['ukuran'];?>"><?php echo$view['ukuran'];?></option>                
                <option value ="S">S</option>
                <option value ="M">M</option>
                <option value ="L">L</option>
                <option value ="XL">XL</option>
                <option value ="XXL">XXL</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo$view['jumlah'];?>">
            </div>
            </div>              
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" onclick="window.location.href='../App/index.php?page=data'">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

