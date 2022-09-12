<div class="container">
	<div class="card">
		<div class="card-header">Create Siswa</div>
		<div class="card-body">
			<?php
			if (validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php 
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>siswa/save">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				
				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for=""></label>
				</div>
			</form>
		</div>
	</div>
</div>
