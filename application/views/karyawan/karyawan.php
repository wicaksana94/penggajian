  <!-- Add Data Modal -->
  <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addDataLabel">Tambah Data Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addDataForm" action="<?php echo base_url('karyawan/add'); ?>" method="POST">
            <div class="form-group">
              <label for="nip">NIP:</label>
              <input type="text" class="form-control" placeholder="Masukkan NIP" id="nip" name="nip">
            </div>
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input type="text" class="form-control" placeholder="Masukkan nama" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin:</label>
              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option disabled selected> Pilih Jenis Kelamin </option>
                <option>L</option>
                <option>P</option>
              </select>
            </div>
            <div class="form-group">
              <label for="tgl_lahir">Tgl Lahir:</label>
              <input type="date" class="form-control" placeholder="Masukkan tgl lahir" id="tgl_lahir" name="tgl_lahir">
            </div>
            <div class="form-group">
              <label for="telp">Telp:</label>
              <input type="phone" class="form-control" placeholder="Masukkan telp" id="telp" name="telp">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" placeholder="Masukkan email" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" placeholder="Masukkan alamat" id="alamat" name="alamat">
            </div>
            <div class="form-group">
              <label for="masa_kerja">Masa Kerja:</label>
              <input type="text" class="form-control" placeholder="Masukkan masa kerja" id="masa_kerja" name="masa_kerja">
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
          <h5 class="modal-title" id="editDataLabel">Edit Data Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editDataForm" action="#" method="POST">
            <div class="form-group">
              <label for="edit_nip">NIP:</label>
              <input type="text" class="form-control" placeholder="Masukkan NIP" id="edit_nip" name="edit_nip">
            </div>
            <div class="form-group">
              <label for="edit_nama">Nama:</label>
              <input type="text" class="form-control" placeholder="Masukkan nama" id="edit_nama" name="edit_nama">
            </div>
            <div class="form-group">
              <label for="edit_jenis_kelamin">Jenis Kelamin:</label>
              <select class="form-control" id="edit_jenis_kelamin" name="edit_jenis_kelamin">
                <option disabled selected> Pilih Jenis Kelamin </option>
                <option>L</option>
                <option>P</option>
              </select>
            </div>
            <div class="form-group">
              <label for="edit_tgl_lahir">Tgl Lahir:</label>
              <input type="date" class="form-control" placeholder="Masukkan tgl lahir" id="edit_tgl_lahir" name="edit_tgl_lahir">
            </div>
            <div class="form-group">
              <label for="edit_telp">Telp:</label>
              <input type="phone" class="form-control" placeholder="Masukkan telp" id="edit_telp" name="edit_telp">
            </div>
            <div class="form-group">
              <label for="edit_email">Email:</label>
              <input type="email" class="form-control" placeholder="Masukkan email" id="edit_email" name="edit_email">
            </div>
            <div class="form-group">
              <label for="edit_alamat">Alamat:</label>
              <input type="text" class="form-control" placeholder="Masukkan alamat" id="edit_alamat" name="edit_alamat">
            </div>
            <div class="form-group">
              <label for="edit_masa_kerja">Masa Kerja:</label>
              <input type="text" class="form-control" placeholder="Masukkan masa kerja" id="edit_masa_kerja" name="edit_masa_kerja">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>            
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
      <div class="px-3 py-3 pt-md-5 pb-md-4 mt-5 mx-auto text-center">
          <h3>Hai, selamat datang di laman Karyawan.</h3>
          <button type="button" class="btn btn-info btn-lg mx-3" data-toggle="modal" data-target="#addData"><i class="fas fa-plus-square mr-2"></i>Tambah Data Karyawan</button>
      </div>
      <div class="row justify-content-center align-items-center">        
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th class="align-middle text-center" scope="col">ID</th>
                    <th class="align-middle text-center" scope="col">NIP</th>
                    <th class="align-middle text-center" scope="col">Nama</th>
                    <th class="align-middle text-center" scope="col">Jenis Kelamin</th>
                    <th class="align-middle text-center" scope="col">Tgl Lahir</th>
                    <th class="align-middle text-center" scope="col">Telp</th>
                    <th class="align-middle text-center" scope="col">Email</th>
                    <th class="align-middle text-center" scope="col">Alamat</th>
                    <th class="align-middle text-center" scope="col">Masa Kerja</th>
                    <th class="align-middle text-center" scope="col">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($karyawan as $key => $value) { ?>
                <tr>
                    <th class="align-middle text-center" scope="row"><?php echo $value['id_karyawan']; ?></th>
                    <td class="align-middle text-center"><?php echo $value['nip']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['nama']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['jenis_kelamin']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['tgl_lahir']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['telp']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['email']; ?></td>                  
                    <td class="align-middle text-center"><?php echo $value['alamat']; ?></td>
                    <td class="align-middle text-center"><?php echo $value['masa_kerja']; ?></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-info edit_data" data-code="<?php echo $value['id_karyawan']; ?>"><i class="far fa-edit"></i> Edit</button>
                        <button type="button" class="btn btn-danger delete_data" data-code="<?php echo $value['id_karyawan']; ?>"><i class="far fa-trash-alt"></i> Delete</button>
                    </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
  </div>
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
      $('#edit_nip').val(data_response.nip);
      $('#edit_nama').val(data_response.nama);
      $('#edit_jenis_kelamin').val(data_response.jenis_kelamin);
      $('#edit_tgl_lahir').val(data_response.tgl_lahir);
      $('#edit_telp').val(data_response.telp);
      $('#edit_email').val(data_response.email);
      $('#edit_alamat').val(data_response.alamat);
      $('#edit_masa_kerja').val(data_response.masa_kerja);
      $('#editDataForm').attr('action', location.href + '/save_edit/' + data_response.id_karyawan);

      callback();
    };

    $(function() {
        $(document).on('click', '.edit_data', function() {
            let id = $(this).attr('data-code');
            $.ajax({
                cache: false,
                url: location.href + '/get_data_karyawan/' + id,
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
                $.post("karyawan/delete/"+id,
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

