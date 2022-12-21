<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Reflection</h1>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">New Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="./bishop/create_message" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="reflectiontitle">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                                </div>
                                <input type="hidden" name="author" value="<?= $Template->storage("accid") ?>">
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea class="form-control" name="body" id="summernote"></textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>