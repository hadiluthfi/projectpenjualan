        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-bank"></i>
                  <h3 class="box-title">EDIT DATA POLI</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('poli/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                         <input type="hidden" name="id" value="<?php echo $record['id_poli']?>">
                    </div>
                      <div class="form-group">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Rumah Sakit</label>
                      <input type="text" name="nama" required="" class="form-control" placeholder="Masukan Nama Rumah Sakit" value="<?php echo $record['nama']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Waktu</label>
                      <input type="number" name="waktu" required="" class="form-control" placeholder="Masukan Waktu" value="<?php echo $record['waktu']?>">
                    </div>
                      
                      
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('poli','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->