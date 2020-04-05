<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Input Additional Room ID
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) {?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors()?>
                    </div>
                    <?php }?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" id="id">
                        </div>
                        <button type="submit" name="submit" 
                        class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>