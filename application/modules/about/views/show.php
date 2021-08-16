<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>About</h1>
		</div>

		<div class="section-body">
			<form class="test">
				<input type="text" name="name" class="form-control mb-3">
				<button type="submit" class="btn-cek">cek name</button>
			</form>
			<hr>
			<div id="information">

			</div>
		</div>
	</section>
</div>
<script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
<script>
	$('.btn-cek').on('click', function(e){
		e.preventDefault();
		$.ajax({
			url: "<?php echo site_url('about/About/buttonAjax')?>",
			type: "POST",
			data: $('.test').serialize(),
			dataType: "JSON",

			success: function(obj) {
				$('#information').empty();
				let message = obj.msg;
				var html = ``;
				if(obj.response == 'success') {
					var html = `
						<p class='alert alert-success'>${message}</p>
					`;
				}
				if(obj.response == 'error') {
					var html = `
						<p class='alert alert-danger'>${message}</p>
					`;
				}
				$('#information').append(html);
			}
	});
	});
</script>
