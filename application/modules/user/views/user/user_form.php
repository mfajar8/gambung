<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>"><div class="form-group row">
                <label class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control">
                </div>
              </div><div class="form-group row">
                <label class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control">
                </div>
              </div><div class="form-group row">
                <label class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control">
                </div>
              </div><div class="form-group row">
                <label class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                  <input type="text" name="password" class="form-control">
                </div>
              </div></div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>