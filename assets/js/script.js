const flashdata = $('.flash-data').data('flashdata');
if (flashdata) {
    new Swal({
        title: 'Data Mahasiswa',
        text: 'Berhasil ' + flashdata,
        icon: 'success'
    });
}