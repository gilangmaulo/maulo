$(function() {

	$('.tombolTambahData').on('click', function(){
		$('#judulModalLabel').html('Tambah Data Izin');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost/sainsabsensi/public/izin/tambah');
	});

	$('.tampilModalEdit').on('click', function() {

		$('#judulModalLabel').html('Edit Data Izin');
		$('.modal-footer button[type=submit]').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/sainsabsensi/public/izin/edit');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/sainsabsensi/public/izin/getedit',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('#id_karyawan').val(data.id_karyawan);
				$('#tanggal').val(data.tanggal);
				$('#tipe_izin').val(data.tipe_izin);
				$('#lama_izin').val(data.lama_izin);
				$('#id').val(data.id);
			}

		});

	});

});