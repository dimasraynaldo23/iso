
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newUploadTKModal">Upload Dokumen Tidak Khusus</a>

    <div class="row">
            <div class="col-lg">
          <table class="table table-borderless">
          <thead>
              <tr class = "table-active">
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
                <td>Struktur Organisasi Instalasi</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Visi dan Misi Rumah sakit</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
             <tr>
                <th scope="row">3</th>
                <td>Kebijakan Direktur terkait Instalasi</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>      
              <tr>
                <th scope="row">4</th>
                <td>Kebijakan Mutu</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Laporan Kinerja</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Buku terkait evaluasi dan analisis sasaran mutu yang tidak tercapai</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Bukti kualifikasi terkait pendidikan petugas rekam medis</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Bukti kompetensi petugas rekam medis</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Perjanjian kerja dengan pihak ketiga</td>
                <td></td>
                <td></td>
                 <td>
                  <a href=""class="badge badge-pill badge-danger" onclick="return confirm('are you sure?');">delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Laporan evaluasi kerjasama dengan pihak ketiga</td>
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
<div class="modal fade" id="newUploadTKModal" tabindex="-1" role="dialog" aria-labelledby="newUploadTKLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUploadTKModalLabel">Upload DOkumen Tidak Khusus</h5>
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
            <option>Struktur Organisasi Instalasi</option>
            <option>Visi dan Misi Rumah Sakit</option>
            <option>Kebijakan Direktur terkait Instalasi</option>
            <option>Kebijakan Mutu</option>
            <option>Laporan Kinerja</option>
            <option>Buku terkait evaluasi dan analisis sasaran mutu yang tidak tercapai</option>
            <option>Bukti kualifikasi terkait pendidikan petugas rekam medis</option>
            <option>Bukti kompetensi petugas rekam medis</option>
            <option>Perjanjian kerja dengan pihak ketiga</option>
            <option>Laporan evaluasi kerjasama dengan pihak ketiga</option>
            </select>
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



        