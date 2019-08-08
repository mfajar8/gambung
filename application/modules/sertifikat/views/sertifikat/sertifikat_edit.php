<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit sertifikat</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_sertifikat</label>
              <div class="col-sm-10">
                <input type="text" name="id_sertifikat" class="form-control" placeholder="" value="<?php echo $dataedit->id_sertifikat?>" readonly>
              </div>
            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">pembuat</label>
                              <div class="col-sm-10">
                                <input type="text" name="pembuat" class="form-control" value="<?php echo $dataedit->pembuat?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">tanggal_keluar</label>
                              <div class="col-sm-10">
                                <input type="text" name="tanggal_keluar" class="form-control" value="<?php echo $dataedit->tanggal_keluar?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">penerima</label>
                              <div class="col-sm-10">
                                <input type="text" name="penerima" class="form-control" value="<?php echo $dataedit->penerima?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">foto_sertifikat</label>
                              <div class="col-sm-10">
                                <input type="text" name="foto_sertifikat" class="form-control" value="<?php echo $dataedit->foto_sertifikat?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">link_sertifikat</label>
                              <div class="col-sm-10">
                                <input type="text" name="link_sertifikat" class="form-control" value="<?php echo $dataedit->link_sertifikat?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">id_user</label>
                              <div class="col-sm-10">
                                <input type="text" name="id_user" class="form-control" value="<?php echo $dataedit->id_user?>">
                              </div>
                            </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
