// flash data
const flashdata = $('.flash-data').data('flashdata');
if (flashdata) {
    new Swal({
        title: 'Data Mahasiswa',
        text: 'Berhasil ' + flashdata,
        icon: 'success',
        confirmButtonColor: "#007BFF"
    });
}

// tombol hapus
$('.hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

   new Swal({
    title: "Apakah anda yakin",
    text: "data mahasiswa akan dihapus",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#007BFF",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus Data!"
   }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });; 
});