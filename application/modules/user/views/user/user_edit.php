<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit user</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_user</label>
              <div class="col-sm-10">
                <input type="text" name="id_user" class="form-control" placeholder="" value="<?php echo $dataedit->id_user?>" readonly>
              </div>
            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">nama</label>
                              <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" value="<?php echo $dataedit->nama?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                              <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">username</label>
                              <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" value="<?php echo $dataedit->username?>">
                              </div>
                            </div><div class="form-group row">
                              <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                              <div class="col-sm-10">
                                <input type="text" name="password" class="form-control" value="<?php echo $dataedit->password?>">
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
