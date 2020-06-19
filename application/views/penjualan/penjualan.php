        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-newspaper-o"></i>
                  <h3 class="box-title">Menu penjualan customer</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Id customer : <?php echo $customer['nama']?></label><br>
                      <label for="exampleInputPassword1">Nama customer : <?php echo $customer['nama']?></label>
                      
                    </div>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th>penjualan</th>
                        <th>Waktu</th>
                        <th>Kategori</th>
                        <th>Rumah Sakit</th>
                        <th width="1">AKSI</th>
                      </tr>
                    </thead>
                    <?php
                        $id_customer =  $this->uri->segment(3);
                    ?>
                    <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='6'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->penjualan</td>
                                <td>$r->waktu</td>
                                <td>$r->kategori</td>
                                <td>$r->nama</td>
                                ";
                            echo "<td>
                                ".anchor('periksa/pilih_penjualan/'.$r->id_penjualan.'/'.$id_customer,'<i class="fa fa-pencil-square-o"></i> Pilih',array('class'=>'btn btn-danger btn-sm'))."
                                </td>
                            </tr>";
                        }
                    }
                    
                    ?>
                    
                    <tbody>
                     
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
              
            </div><!-- /.col -->
          </div><!-- /.row -->
          <?php
                        $id_customer =  $this->uri->segment(3);
                    ?>
          <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-newspaper-o"></i>
                  <h3 class="box-title">penjualan Yang Dipilih</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <?php echo anchor('periksa/selesai_periksa/'.$id_customer,'<i class="fa fa-file-word-o"></i> Simpan penjualan</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th>penjualan</th>
                        <th>Waktu</th>
                        <th>Kategori</th>
                        <th>Poli</th>
                        <th width="1">AKSI</th>
                      </tr>
                    </thead>
                    
                    <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='6'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($record2->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->penjualan</td>
                                <td>$r->waktu</td>
                                <td>$r->kategori</td>
                                <td>$r->nama</td>
                                ";
                            echo "<td>
                                ".anchor('periksa/hapus_penjualan/'.$r->id_detail_periksa.'/'.$id_customer,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm'))."
                                </td>
                                </tr>
                                <tr>
                                <td colspan='6'>
                                </td>
                                </tr>";
                        }
                    }
                    
                    ?>
                    
                    <tbody>
                     
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
              
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          </div>
        </section><!-- /.content -->