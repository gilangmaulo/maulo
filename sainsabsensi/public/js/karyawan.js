$(function() {

	$('.tombolTambahData').on('click', function(){
		$('#judulModalLabel').html('Tambah Data Karyawan');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost/sainsabsensi/public/karyawan/tambah');
	});

	$('.tampilModalEdit').on('click', function() {

		$('#judulModalLabel').html('Edit Data Karyawan');
		$('.modal-footer button[type=submit]').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/sainsabsensi/public/karyawan/edit');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/sainsabsensi/public/karyawan/getedit',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('#nama').val(data.nama);
				$('#alamat').val(data.alamat);
				$('#no_telpon').val(data.no_telpon);
				$('#jabatan').val(data.jabatan);
				$('#id').val(data.id);
			}

		});

	});

});