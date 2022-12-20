<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bishop</h1>
                    <h4><?= $Self->Toast(); ?></h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li><a href="./user/priests/addreflect" class=" btn btn-success btn-sm">Add New</a></li>
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
                    <h3 class="card-title">Bishop`s Reflections</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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

                                <th>Title</th>
                                <th>Author</th>
                                <th>Body</th>
                                <th>Image1</th>
                                <th>Image2</th>
                                <th>Date Created</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `reflections`";
                            $reflections = mysqli_query($Core->dbCon, $sql);
                            while ($reflection = mysqli_fetch_object($reflections)) :
                            ?>
                                <tr>
                                    <td><?= $reflection->title ?></td>
                                    <td><?php
                                        echo  $author = $Core->GetUserInfo($reflection->user)->name
                                        ?></td>
                                    <td><?= substr($reflection->body, 0, 50) ?>...</td>
                                    <td>
                                        <?php if ($reflection->image1) : ?>
                                            <img width="100px" src="_store/<?= $reflection->image1 ?>">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($reflection->image2) : ?>
                                            <img width="100px" src="_store/<?= $reflection->image2 ?>">
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $reflection->created ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="./reflections/edit/<?= $reflection->id ?>" class="btn btn-outline-success btn-sm">Edit</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="./reflections/delete/<?= $reflection->id ?>" class="btn btn-outline-danger btn-sm">Delete</a>
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