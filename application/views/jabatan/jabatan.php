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
  
    <title>Jabatan</title>
  </head>
  <body>
    <!-- Add Data Modal -->
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addDataLabel">Tambah Data Jabatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="addDataForm" action="<?php echo base_url('jabatan/add'); ?>" method="POST">
              <div class="form-group">
                <label for="kode">Kode:</label>
                <input type="text" class="form-control" placeholder="Masukkan kode" id="kode" name="kode">
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" placeholder="Masukkan jabatan" id="jabatan" name="jabatan">
              </div>
              <div class="form-group">
                <label for="standar_gaji">Standar Gaji:</label>
                <input type="text" class="form-control" placeholder="Masukkan standar gaji" id="standar_gaji" name="standar_gaji">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <input type="text" class="form-control" placeholder="Masukkan keterangan" id="keterangan" name="keterangan">
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
            <h5 class="modal-title" id="editDataLabel">Edit Data Jabatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editDataForm" action="#" method="POST">
              <div class="form-group">
                <label for="edit_kode">Kode:</label>
                <input type="text" class="form-control" placeholder="Masukkan kode" id="edit_kode" name="edit_kode">
              </div>
              <div class="form-group">
                <label for="edit_jabatan">Jabatan:</label>
                <input type="text" class="form-control" placeholder="Masukkan jabatan" id="edit_jabatan" name="edit_jabatan">
              </div>
              <div class="form-group">
                <label for="edit_standar_gaji">Standar Gaji:</label>
                <input type="text" class="form-control" placeholder="Masukkan standar gaji" id="edit_standar_gaji" name="edit_standar_gaji">
              </div>
              <div class="form-group">
                <label for="edit_keterangan">Keterangan:</label>
                <input type="text" class="form-control" placeholder="Masukkan keterangan" id="edit_keterangan" name="edit_keterangan">
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
            <h3>Hai, selamat datang di laman Jabatan.</h3>
            <button type="button" class="btn btn-info btn-lg mx-3" data-toggle="modal" data-target="#addData"><i class="fas fa-plus-square mr-2"></i>Tambah Data Jabatan</button>
        </div>
        <div class="row justify-content-center align-items-center">        
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="align-middle text-center" scope="col">ID</th>
                    <th class="align-middle text-center" scope="col">Kode</th>
                    <th class="align-middle text-center" scope="col">Jabatan</th>
                    <th class="align-middle text-center" scope="col">Standar Gaji</th>
                    <th class="align-middle text-center" scope="col">Keterangan</th>
                    <th class="align-middle text-center" scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($jabatan as $key => $value) { ?>
                  <tr>
                    <th class="align-middle text-center" scope="row"><?php echo $value['id_jabatan']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['kode']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['jabatan']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['standar_gaji']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['keterangan']; ?></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-info edit_data" data-code="<?php echo $value['id_jabatan']; ?>"><i class="far fa-edit"></i> Edit</button>
                        <button type="button" class="btn btn-danger delete_data" data-code="<?php echo $value['id_jabatan']; ?>"><i class="far fa-trash-alt"></i> Delete</button>
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
      $('#edit_kode').val(data_response.kode);
      $('#edit_jabatan').val(data_response.jabatan);
      $('#edit_standar_gaji').val(data_response.standar_gaji);
      $('#edit_keterangan').val(data_response.keterangan);
      $('#editDataForm').attr('action', location.href + '/save_edit/' + data_response.id_jabatan);

      callback();
    };

    $(function() {
        $(document).on('click', '.edit_data', function() {
            let id = $(this).attr('data-code');
            $.ajax({
                cache: false,
                url: location.href + '/get_data_jabatan/' + id,
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
                $.post("jabatan/delete/"+id,
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
</script>