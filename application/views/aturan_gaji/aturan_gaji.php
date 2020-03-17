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
  
    <title>Aturan Gaji</title>
  </head>
  <body>
    <!-- Add Data Modal -->
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addDataLabel">Tambah Data Aturan Gaji</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="addDataForm" action="<?php echo base_url('aturan_gaji/add'); ?>" method="POST">
              <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <select class="form-control" placeholder="Masukkan jabatan" id="jabatan" name="jabatan">
                  <option disabled selected> Pilih Jabatan </option>
                  <?php foreach ($jabatan as $data) { ?>
                  <option value="<?=$data['id_jabatan']?>"><?=$data['jabatan']?></option> 
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="masa_kerja">Masa Kerja:</label>
                <input type="text" class="form-control" placeholder="Masukkan masa kerja" id="masa_kerja" name="masa_kerja">
              </div>
              <div class="form-group">
                <label for="insentif">Insentif:</label>
                <input type="text" class="form-control" placeholder="Masukkan insentif" id="insentif" name="insentif">
              </div>
              <div class="form-group">
                <label for="bonus">Bonus:</label>
                <input type="text" class="form-control" placeholder="Masukkan bonus" id="bonus" name="bonus">
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
            <h5 class="modal-title" id="editDataLabel">Edit Data Aturan Gaji</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="editDataForm" action="#" method="POST">
              <div class="form-group">
                <label for="edit_jabatan">Jabatan:</label>
                <select class="form-control" placeholder="Masukkan jabatan" id="edit_jabatan" name="edit_jabatan">
                  <option disabled selected> Pilih Jabatan </option>
                  <?php foreach ($jabatan as $data) { ?>
                  <option value="<?=$data['id_jabatan']?>"><?=$data['jabatan']?></option> 
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="edit_masa_kerja">Masa Kerja:</label>
                <input type="text" class="form-control" placeholder="Masukkan masa kerja" id="edit_masa_kerja" name="edit_masa_kerja">
              </div>
              <div class="form-group">
                <label for="edit_insentif">Insentif:</label>
                <input type="text" class="form-control" placeholder="Masukkan insentif" id="edit_insentif" name="edit_insentif">
              </div>
              <div class="form-group">
                <label for="edit_bonus">Bonus:</label>
                <input type="text" class="form-control" placeholder="Masukkan bonus" id="edit_bonus" name="edit_bonus">
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
            <h3>Hai, selamat datang di laman Aturan Gaji.</h3>
            <button type="button" class="btn btn-info btn-lg mx-3" data-toggle="modal" data-target="#addData"><i class="fas fa-plus-square mr-2"></i>Tambah Data Aturan Gaji</button>
        </div>
        <div class="row justify-content-center align-items-center h-100">
          <table class="table table-bordered table-hover">
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>Jabatan</strong></td>
                <td><strong>Masa Kerja</strong></td>
                <td><strong>Insentif</strong></td>
                <td><strong>Bonus</strong></td>
                <td><strong>Option</strong></td>
            </tr>
            <?php foreach ($aturan_gaji as $key => $value) { ?>
            <tr>
                  <td><?php echo $value['id_aturan_gaji']; ?></td>
                  <td><?php echo $value['nama_jabatan']; ?></td>
                  <td><?php echo $value['masa_kerja']; ?></td>
                  <td><?php echo $value['insentif']; ?></td>
                  <td><?php echo $value['bonus']; ?></td>
                  <td>
                       <button type="button" class="btn btn-info edit_data" data-code="<?php echo $value['id_aturan_gaji']; ?>"><i class="far fa-edit"></i> Edit</button>
                        <button type="button" class="btn btn-danger delete_data" data-code="<?php echo $value['id_aturan_gaji']; ?>"><i class="far fa-trash-alt"></i> Delete</button>
                  </td>
            </tr>
            <?php } ?>
          </table>
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
      $('#edit_jabatan').val(data_response.jabatan);
      $('#edit_masa_kerja').val(data_response.masa_kerja);
      $('#edit_insentif').val(data_response.insentif);
      $('#edit_bonus').val(data_response.bonus);
      $('#editDataForm').attr('action', location.href + '/save_edit/' + data_response.id_aturan_gaji);

      callback();
    };

    $(function() {
        $(document).on('click', '.edit_data', function() {
            let id = $(this).attr('data-code');
            $.ajax({
                cache: false,
                url: location.href + '/get_data_aturan_gaji/' + id,
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
                $.post("aturan_gaji/delete/"+id,
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