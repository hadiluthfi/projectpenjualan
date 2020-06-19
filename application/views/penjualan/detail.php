        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-newspaper-o"></i>
                  <h3 class="box-title">Menu Tindakan Pasien</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Id Pasien : <?php echo $pasien['nama']?></label><br>
                      <label for="exampleInputPassword1">Nama Pasien : <?php echo $pasien['nama']?></label>
                      
                    </div>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th>Tindakan</th>
                        <th>Waktu</th>
                        <th>Kategori</th>
                        <th>Rumah Sakit</th>
                      </tr>
                    </thead>
                    <?php
                        $id_pasien =  $this->uri->segment(3);
                    ?>
                    <?php
                    if($tindakan->num_rows()<1)
                    {
                        echo "<tr><td colspan='6'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($tindakan->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->tindakan</td>
                                <td>$r->waktu</td>
                                <td>$r->kategori</td>
                                <td>$r->nama</td>
                                
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