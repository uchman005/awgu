<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Priests</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li><a href="./user/priests/addpriest" class=" btn btn-success btn-sm">Add New</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Priests in Awgu Diocese</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search Priest">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Date Of Ordination</th>
                                <th>Parish</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `users` WHERE `role`='priest'";
                            $i = 0;
                            $priests = mysqli_query($Core->dbCon, $sql);
                            while ($priest = mysqli_fetch_object($priests)) : $i++
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $priest->name ?></td>
                                    <td><?= $priest->dod ?></td>
                                    <td><?= $priest->parish ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn btn-outline-success btn-sm">Edit</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-outline-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>