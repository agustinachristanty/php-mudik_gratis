<?php

    $no=""; $rute =""; $jadwal =""; $jumlah_pnp="";
    
    if(isset($message))
    {
        echo $message;
    }
    
?>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
				<h3 class="card-title">Add New Data Mudik<br></h3>
              </div>
              <!-- /.card-header -->
			  <!-- form start -->
			  <form class="form-horizontal" action="insert_data_mudik" method="post">
                <div class="card-body">
		
				<div class="form-group row">
                    <label for="city" class="col-sm-3 col-form-label">Rute</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="rute" name="rute" value="<?php echo $rute ;?>" 
                      placeholder="Enter the rute">
                    </div>
				</div>

                <div class="form-group row">
                    <label for="ma_start" class="col-sm-3 col-form-label">Jadwal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="jadwal" name="jadwal" value="<?php echo $jadwal ;?>" 
                      placeholder="Enter ...">
                    </div>
				</div>

				<div class="form-group row">
                    <label for="area_group" class="col-sm-3 col-form-label">Jumlah pemumpang</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="jumlah_pnp" name="jumlah_pnp" 
                      value="<?php echo $jumlah_pnp ;?>" placeholder="Enter ...">
                    </div>
				</div>

				<div class="card-footer">
					<button type="submit" class="btn btn-primary" name="insert" value="Insert">Submit</button>
					<a class="col-sm-6" href="dashboard"> Cancel</a>
				</div>    
			</div>
			</form>
        </div>
              <!-- /.card-body -->
    	</div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->
