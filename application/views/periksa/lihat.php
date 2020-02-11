        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-bank"></i>
                  <h3 class="box-title">Menu Pemesiksaan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th>Nama</th>
                        <th>no_telp</th>
                        <th>L/P</th>
                        <th>Alamat</th>
                        <th width="1">AKSI</th>
                      </tr>
                    </thead>
                    
                    <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->nama</td>
                                <td>$r->no_telp</td>
                                <td>$r->jenis_kelamin</td>
                                <td>$r->alamat</td>
                                 ";
                            echo "<td>
                                ".anchor('periksa/tindakan/'.$r->id_pasien,'<i class="fa fa-pencil-square-o"></i> Permeriksaan',array('class'=>'btn btn-danger btn-sm'))."
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
        </section><!-- /.content -->