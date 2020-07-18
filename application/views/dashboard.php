  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>Mudik Gratis di PGN</h1>
   </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">	  
      <div class="col-md-6">	  
      <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
          <?php
            //print_r($data);
            if(isset($data))
            {
             
              foreach($data[0] as $key => $value)
              {
                ${$key} = $value;
               // echo $key." = ".${$key};
              }

            }

          ?>
          </div>
      <div class="box-body">
        <div class="card-body table-responsive p-0" style="height: 462px;">
        <form action="dashboard" method="post" autocomplete="off">
        <table class="table table-head-fixed text-nowrap">
        <h3 class="card-title"><br>Lihat Data Mudik</h3>
				<thead>
					<tr>
						<th>No</th>
						<th>Rute</th>
						<th>Jadwal</th>
						<th>Jumlah penumpang</th>
            <th></th>

        </thead>			
              <tbody>	
              <?php
						foreach($data as $row)
						{				
					?>
					<tr bgcolor="#C0C0C0">
						<td><?php echo $row['no']; ?></td>
						<td><?php echo $row['rute']; ?></td>
						<td><?php echo $row['jadwal']; ?></td>
						<td><?php echo $row['jumlah_pnp']; ?></td>
            <td><button type="submit" class="btn btn-primary" name="delete" value="true">Delete</button></td>					
          </tr>         
          <?php					
						}
					?>   
          </table>          
                <td><button type="submit" class="btn btn-primary" name="update" value="true">Update</button></td>
                <td><button type="submit" class="btn btn-primary" name="insert" value="true">Add New</button></td> 
          </form>
        </div>
        <tbody>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->
      </div>
      </div>
    </section>
    <!-- /.content -->