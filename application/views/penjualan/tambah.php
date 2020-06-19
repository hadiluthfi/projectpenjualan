        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA PENJUALAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('penjualan/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    </div>
                     <div class="form-group">
                      <label for="">Nama Customer</label>
                        <select name="id_customer" class="form-control" required="">
                          <option>-- Customer --</option>
                            <?php  
                              foreach ($customer as $a) {
                                  echo "<option value='$a->id_customer'>$a->nama</option>";
                              }
                              ?>
                        </select> 
                    </div>

                     <div class="form-group">
                      <label for="">Nama Produk</label>
                        <select name="id_produk" class="form-control" required="">
                          <option> Nama Produk </option>
                            <?php  
                              foreach ($produk as $a) {
                                  echo "<option value='$a->id_produk'>$a->produk</option>";
                              }
                              ?>
                        </select> 
                    </div>

                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      <input type="text" name="waktu" required="" class="form-control" placeholder="Masukan Nama produk">
                    </div>
                     <div class="form-group">
                      <label for="">Kategori</label>
                        <select name="id_kategori" class="form-control" required="">
                          <option>--Pilih Kategori--</option>
                            <?php  
                              foreach ($kategori as $d) {
                                  echo "<option value='$d->id_kategori'>$d->kategori</option>";
                              }
                              ?>
                        </select> 
                    </div>
                      
                      
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('produk','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->