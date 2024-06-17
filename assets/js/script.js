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

// flash data1
const flashdata1 = $('.flash-data1').data('flashdata1');
if (flashdata1) {
    new Swal({
        title: 'Data People',
        text: 'Berhasil ' + flashdata1,
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

// delete button
$('.delete').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

   new Swal({
    title: "Apakah anda yakin",
    text: "data people akan didelete",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#007BFF",
    cancelButtonColor: "#d33",
    confirmButtonText: "Delete Data!"
   }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });; 
});