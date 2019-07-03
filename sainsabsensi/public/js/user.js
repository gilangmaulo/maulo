$(function() {

	$('.tombolTambahData').on('click', function(){
		$('#judulModalLabel').html('Tambah Data User');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost/sainsabsensi/public/user/tambah');
	});

	$('.tampilModalEdit').on('click', function() {

		$('#judulModalLabel').html('Edit Data User');
		$('.modal-footer button[type=submit]').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/sainsabsensi/public/user/edit');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/sainsabsensi/public/user/getedit',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('#username').val(data.username);
				$('#password').val(data.password);
				$('#level').val(data.level);
				$('#id').val(data.id);
			}

		});

	});

});