        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA produk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('produk/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                         <input type="hidden" name="id" value="<?php echo $record['id_produk']?>">
                    </div>
                      <div class="form-group">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama produk</label>
                      <input type="text" name="produk" required="" class="form-control" placeholder="Masukan Nama produk" value="<?php echo $record['produk']?>">
                    </div>
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Waktu</label>
                      <input type="number" name="waktu" required="" class="form-control" placeholder="Masukan Nama produk" value="<?php echo $record['waktu']?>">
                    </div>
                     <div class="form-group">
                     <label for="">Kategori</label>
                        <select name="id_kategori" class="form-control" required="">
                            <?php
                            foreach ($kategori as $p)
                            {
                                echo "<option value='$p->id_kategori'";
                                echo $record['id_kategori']==$p->id_kategori?'selected':'';
                                echo">$p->kategori</option>";
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