 <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA PENJUALAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('penjualan/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                         <input type="hidden" name="id" value="<?php echo $record['id_penjualan']?>">
                    </div>
                      <div class="form-group">
                    </div>
                     
                      
                      <div class="form-group">
                     <label for="">Customer</label>
                        <select name="id_customer" class="form-control" required="">
                            <?php
                            foreach ($customer as $p)
                            {
                                echo "<option value='$p->id_customer'";
                                echo $record['id_customer']==$p->id_customer?'selected':'';
                                echo">$p->nama</option>";
                            }
                            ?>
                        </select> 
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
                      
                      <div class="form-group">
                     <label for="">Nama Produk</label>
                        <select name="id_produk" class="form-control" required="">
                            <?php
                            foreach ($produk as $p)
                            {
                                echo "<option value='$p->id_produk'";
                                echo $record['id_produk']==$p->id_produk?'selected':'';
                                echo">$p->produk</option>";
                            }
                            ?>
                        </select> 
                    </div>
                      
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('penjualan','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->