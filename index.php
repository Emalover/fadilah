<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Rumah Sakit Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('rumah sakit/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NAMA</th>
						<th>UMUR</th>
						<th>ALAMAT</th>
						<th>NO.ANTRIAN</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($rumah sakit as $r){ ?>
                    <tr>
						<td><?php echo $r['ID']; ?></td>
						<td><?php echo $r['NAMA']; ?></td>
						<td><?php echo $r['UMUR']; ?></td>
						<td><?php echo $r['ALAMAT']; ?></td>
						<td><?php echo $r['NO.ANTRIAN']; ?></td>
						<td>
                            <a href="<?php echo site_url('rumah sakit/edit/'.$r['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('rumah sakit/remove/'.$r['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
