<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Rumah Sakit Edit</h3>
            </div>
			<?php echo form_open('rumah sakit/edit/'.$rumah sakit['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="NAMA" class="control-label"><span class="text-danger">*</span>NAMA</label>
						<div class="form-group">
							<input type="text" name="NAMA" value="<?php echo ($this->input->post('NAMA') ? $this->input->post('NAMA') : $rumah sakit['NAMA']); ?>" class="form-control" id="NAMA" />
							<span class="text-danger"><?php echo form_error('NAMA');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="UMUR" class="control-label"><span class="text-danger">*</span>UMUR</label>
						<div class="form-group">
							<input type="text" name="UMUR" value="<?php echo ($this->input->post('UMUR') ? $this->input->post('UMUR') : $rumah sakit['UMUR']); ?>" class="form-control" id="UMUR" />
							<span class="text-danger"><?php echo form_error('UMUR');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ALAMAT" class="control-label"><span class="text-danger">*</span>ALAMAT</label>
						<div class="form-group">
							<input type="text" name="ALAMAT" value="<?php echo ($this->input->post('ALAMAT') ? $this->input->post('ALAMAT') : $rumah sakit['ALAMAT']); ?>" class="form-control" id="ALAMAT" />
							<span class="text-danger"><?php echo form_error('ALAMAT');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NO.ANTRIAN" class="control-label"><span class="text-danger">*</span>NO.ANTRIAN</label>
						<div class="form-group">
							<input type="text" name="NO.ANTRIAN" value="<?php echo ($this->input->post('NO.ANTRIAN') ? $this->input->post('NO.ANTRIAN') : $rumah sakit['NO.ANTRIAN']); ?>" class="form-control" id="NO.ANTRIAN" />
							<span class="text-danger"><?php echo form_error('NO.ANTRIAN');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>