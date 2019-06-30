
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <style>
      .save{
        margin-left: 500px;
      }
    </style>

    <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newUploadKModal">Upload Dokumen Khusus</a>

    <div class="row">
            <div class="col-lg">
          <table class="table table-borderless">
          <thead>
              <tr class="table-active">
                <th scope="col">No.</th>
                <th scope="col">Dokumen</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Lampiran</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Standar Operasional Prosedur (SOP)</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bukti Kegiatan</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
             <tr>
                <th scope="row">3</th>
                <td>Jobdesk</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>      
              <tr>
                <th scope="row">4</th>
                <td>Indikator Mutu</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
            </tbody>
          </table>
                        
      </div>
    </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newUploadKModal" tabindex="-1" role="dialog" aria-labelledby="newUploadKLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUploadKModalLabel">Upload DOkumen Khusus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('');  ?>" method="post">
      <div class="modal-body">
          <div class="form-group">
          <input type="text" class="form-control" id="title" name ="title" placeholder="DD / MM / YYYY">
     </div>
        <div class="form-group">
           <select name="" id="" class="form-control">
              <option value="">Select Dokumen</option>
            <option>Standar Operasional Prosedur (SOP)</option>
            <option>Bukti Kegiatan</option>
            <option>Jobdesk</option>
            <option>Indikator Mutu</option>                 </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


      