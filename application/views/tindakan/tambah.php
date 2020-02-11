        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA TINDAKAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('tindakan/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Tindakan</label>
                      <input type="text" name="tindakan" required="" class="form-control" placeholder="Masukan Nama Tindakan">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Waktu</label>
                      <input type="number" name="waktu" required="" class="form-control" placeholder="Masukan Nama Tindakan">
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
                      <div class="form-group">
                      <label for="">Poli</label>
                        <select name="id_poli" class="form-control" required="">
                          <option>--Pilih Poli--</option>
                            <?php  
                              foreach ($poli as $d) {
                                  echo "<option value='$d->id_poli'>$d->nama</option>";
                              }
                              ?>
                        </select> 
                    </div>
                      
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('tindakan','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->