<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Message</h1>
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
                            <h3 class="card-title">Edit Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="./message/edit" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="reflection_title">Title</label>
                                    <input type="text" class="form-control" value="<?= $message->title ?>" placeholder="Enter title" name="title">
                                </div>
                                <input type="hidden" name="id" value="<?= $message->id ?>">
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="body" id="summernote"><?= $message->body ?></textarea>
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