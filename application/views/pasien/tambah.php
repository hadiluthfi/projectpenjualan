        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-bank"></i>
                  <h3 class="box-title">TAMBAH DATA PASIEN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('pasien/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Pasien</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Nama Pasien">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">No Telp</label>
                      <input type="text" name="no_telp" required="" class="form-control" placeholder="Masukan No Telp">
                    </div>
                      <div class="form-group">
                      <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required="">
                          <option>--Pilih Jenis Kelamin--</option>
                            <option value='L'>Laki-Laki</option>";
                            <option value='P'>Perempuan</option>";
                              
                        </select> 
                    </div>
                     <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="ckeditor" name="alamat" placeholder="Isikan Alamat"></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="text" name="username" required="" class="form-control" placeholder="Masukan Username" ">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" name="password" required="" class="form-control" placeholder="Masukan Password" >
                    </div>
                      
                      
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('pasien','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->