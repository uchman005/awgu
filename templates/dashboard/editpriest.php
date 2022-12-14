<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Priest</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"> Priest</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="./users/edit" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Name">Full Name</label>
                                    <input type="text" class="form-control" value="<?=$priest->name?>" placeholder="Enter fullname" name="name" required >
                                </div>
                                <input type="hidden" name="id" value="<?=$priest->id?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" value="<?=$priest->email?>" class="form-control" id="email" placeholder="Enter email" required >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" value="<?=$priest->password?>" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
                                </div>
                                <div class="form-group">
                                    <label for="date">Date of Ordination</label>
                                    <input type="date" class="form-control" value="<?=$priest->dod?>" placeholder="Enter date" name="dod">
                                </div>
                                <div class="form-group">
                                    <label for="parish">Parish</label>
                                    <input type="text" class="form-control" value="<?=$priest->parish?>" placeholder="Enter parish" name="parish" required >
                                </div>
                            
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>