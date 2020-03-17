<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link href="<?php echo base_url('assets/css/sweetalert2.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/open-iconic/font/css/open-iconic-bootstrap.css')?>" rel="stylesheet">
    
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.js')?>"></script>
    <script src="<?php echo base_url('assets/js/fontawesome_48ef12f1ae.js')?>"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  
    <title>Gaji</title>
  </head>
  <body>
    <!-- Add Data Modal -->
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addDataLabel">Tambah Data Gaji</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="addDataForm" action="<?php echo base_url('gaji/add'); ?>" method="POST">
              <div class="form-group">
                <label for="kode_penggajian">Kode penggajian:</label>
                <input type="text" class="form-control" placeholder="Masukkan kode penggajian" id="kode_penggajian" name="kode_penggajian" required>
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <select class="form-control" placeholder="Masukkan jabatan" id="id_jabatan" name="id_jabatan">
                  <option disabled selected> Pilih Jabatan </option>
                  <?php foreach ($jabatan as $data) { ?>
                  <option value="<?=$data['id_jabatan']?>"><?=$data['jabatan']?></option> 
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="karyawan">Karyawan:</label>
                <select class="form-control" placeholder="Pilih karyawan" id="id_karyawan" name="id_karyawan">
                  <option disabled selected> Pilih Karyawan </option>
                  <?php foreach ($karyawan as $data) { ?>
                  <option value="<?php echo $data['id_karyawan']; ?>"><?php echo $data['nama']; ?></option> 
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="tgl_penerimaan">Tgl Penerimaan:</label>
                <input type="date" class="form-control" placeholder="Masukkan tgl penerimaan" id="tgl_penerimaan" name="tgl_penerimaan" required>
              </div>
              <div class="form-group">
                <label for="nominal">Nominal:</label>
                <input type="text" class="form-control" placeholder="Pilih jabatan dan karyawan terlebih dahulu" id="nominal" name="nominal" required>
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>            
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Data Modal -->
    <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="editDataLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editDataLabel">Edit Data Gaji</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editDataForm" action="#" method="POST">
              <div class="form-group">
                <label for="edit_kode">Kode:</label>
                <input type="text" class="form-control" placeholder="Masukkan kode penggajian" id="edit_kode" name="edit_kode">
              </div>
              <div class="form-group">
                <label for="edit_nip_karyawan">NIP:</label>
                <input type="text" class="form-control" placeholder="Masukkan nip karyawan" id="edit_nip_karyawan" name="edit_nip_karyawan">
              </div>
              <div class="form-group">
                <label for="edit_nama_karyawan">Nama Karyawan:</label>
                <input type="text" class="form-control" placeholder="Masukkan nama karyawan" id="edit_nama_karyawan" name="edit_nama_karyawan">
              </div>
              <div class="form-group">
                <label for="edit_tgl_penerimaan">Tgl Penerimaan:</label>
                <input type="date" class="form-control" placeholder="Masukkan tgl penerimaan" id="edit_tgl_penerimaan" name="edit_tgl_penerimaan">
              </div>
              <div class="form-group">
                <label for="edit_nominal">Nominal:</label>
                <input type="text" class="form-control" placeholder="Masukkan nominal" id="edit_nominal" name="edit_nominal">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>            
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid h-100">
        <div class="px-3 py-3 pt-md-5 pb-md-4 mt-5 mx-auto text-center">
            <h3>Hai, selamat datang di laman Gaji.</h3>
            <button type="button" class="btn btn-info btn-lg mx-3" data-toggle="modal" data-target="#addData"><i class="fas fa-plus-square mr-2"></i>Tambah Data Gaji</button>
        </div>
        <div class="row justify-content-center align-items-center">        
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="align-middle text-center" scope="col">ID</strong></td>
                    <th class="align-middle text-center" scope="col">Kode</strong></td>
                    <th class="align-middle text-center" scope="col">NIP</strong></td>
                    <th class="align-middle text-center" scope="col">Nama Karyawan</strong></td>
                    <th class="align-middle text-center" scope="col">Tgl Penerimaan</strong></td>
                    <th class="align-middle text-center" scope="col">Nominal</strong></td>
                    <th class="align-middle text-center" scope="col">Option</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($gaji as $key => $value) { ?>
                  <tr>
                    <th class="align-middle text-center" scope="row"><?php echo $value['id_gaji']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['kode_penggajian']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['nip_karyawan']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['nama_karyawan']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['tgl_penerimaan']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['nominal']; ?></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-info edit_data" data-code="<?php echo $value['id_gaji']; ?>"><i class="far fa-edit"></i> Edit</button>
                        <button type="button" class="btn btn-danger delete_data" data-code="<?php echo $value['id_gaji']; ?>"><i class="far fa-trash-alt"></i> Delete</button>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    $( document ).ready(function() {

        let flashdata = "<?php echo $this->session->flashdata('data'); ?>" ;
        let mesg = "<?php echo $this->session->flashdata('mesg'); ?>" ;

        if (flashdata == "success") {
            Swal.fire(
              'Tersimpan',
              'Data tersimpan.',
              'success'
            )
        } else if (flashdata == "fail") {
            Swal.fire({
              html:
                '<i class="icon-notification2 text-danger display-2"></i><br>' +
                '<p class="font-weight-bold" style="font-size: 1.5rem;">'+mesg+'</p>',
            })
        } else {}
    });

    function loading_data()
    {
        Swal.fire({
            html: '<span>Processing..</span>',
            allowOutsideClick:false,
            allowEscapeKey:false,
            showCancelButton: false, // There won't be any cancel button
            showConfirmButton: false, // There won't be any confirm button
            onBeforeOpen: () => {
                $(".swal2-header").remove();
            }
        });
    };

    function show_edit_modal() {
      $('#editData').modal('show');
    };

    function fill_edit_modal_with_response(data_response, callback) {
      $('#edit_kode').val(data_response.kode_penggajian);
      $('#edit_nip_karyawan').val(data_response.nip_karyawan);
      $('#edit_nama_karyawan').val(data_response.nama_karyawan);
      $('#edit_tgl_penerimaan').val(data_response.tgl_penerimaan);
      $('#edit_nominal').val(data_response.nominal);
      $('#editDataForm').attr('action', location.href + '/save_edit/' + data_response.id_gaji);

      callback();
    };

    $(function() {
        $(document).on('click', '.edit_data', function() {
            let id = $(this).attr('data-code');
            $.ajax({
                cache: false,
                url: location.href + '/get_data_gaji/' + id,
                type: "POST",
                dataType: "json",
                beforeSend: function(){
                    loading_data();
                },
                error: function(error){
                    alert(error);
                },
                success: function(data_response){
                  $(".swal2-container").remove(); //This will remove the loading
                  console.log(data_response);
                  if(data_response) {
                    fill_edit_modal_with_response(data_response, show_edit_modal);
                  }
                }
            })
        });
    });

    $(function() {
        $(document).on('click', '.delete_data', function() {
            let id = $(this).attr('data-code');
            Swal.fire({
              title: 'Anda Yakin?',
              text: "Data yang terhapus tidak bisa dikembalikan lagi.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, hapus!',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.value) {
                $.post("gaji/delete/"+id,
                {
                  id: id
                },
                function(data, status){
                  Swal.fire(
                    'Terhapus!',
                    'Data berhasil dihapus.',
                    'success'
                  ).then((result) => {
                    if (result.value) {
                      location.reload();
                    }
                  })
                });
              }
            })
        });
    });

$('#id_jabatan').change(function () {
    var id_jabatan = $(this).val();
    // alert(id_jabatan);
    $.ajax({
        type: 'POST',
        url: location.href + /get_karyawan_by_jabatan/ + id_jabatan,
        dataType: 'json',
        data: {
            'id_jabatan': id_jabatan
        },
        success: function (data_response) {
            // console.log(data_response);
            // console.log("length = "+data_response.length);
            // the next thing you want to do 
            var $karyawan = $('#id_karyawan');
            $karyawan.empty();
            for (var i = 0; i < data_response.length; i++) {
                $karyawan.append('<option id=' + data_response[i].id_karyawan + ' value=' + data_response[i].id_karyawan + '>' + data_response[i].nama + '</option>');
            }

            //manually trigger a change event for the contry so that the change handler will get triggered
            $karyawan.change();
        }
    });
});

$('#id_karyawan').change(function () {
    var id_karyawan = $(this).val();
    $.ajax({
        type: 'POST',
        url: location.href + /hitung_nominal/ + id_karyawan,
        dataType: 'json',
        data: {
            'id_karyawan': id_karyawan
        },
        success: function (data_response) {
            $('#nominal').val(data_response);            
        }
    });
});



</script>