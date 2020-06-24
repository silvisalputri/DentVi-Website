      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Data User</h4>
              </div>
              <div class="card-body">
              <?php echo form_open_multipart('admin/DataUser/prosesDataUser')?>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputUsername">Username</label>
                        <input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="RealName">Real Name</label>
                        <input name="name" type="text" class="form-control" id="RealName" placeholder="Real Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Gender">Gender</label>
                        <select name="gender" id="Gender" class="form-control">
                            <option selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Date">Date</label>
                        <input type="date" class="form-control" name="date" id="Date">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Age">Age</label>
                        <input type="number" class="form-control" id="Age" name="age">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Telp">No Telp</label>
                        <input name="telp" type="text" class="form-control" id="Telp" placeholder="No Telp">
                    </div>
                    <div class="col-md-6">
                        <label>Picture</label>
                        <input name="picture" type="file" id="Picture" style="width:100%;" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="add">Add Data</button>
                <?php form_close();?>
              </div>
            </div>
          </div>