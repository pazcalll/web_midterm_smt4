<!-- <?php
var_dump('lamp');
?> -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <h1>Room List</h1>
            <?php if ($this->session->flashdata('flash-data')) {?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data has been <strong><?= $this->session->flashdata('flash-data');?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }?>
            <ul class="list-group">
                <!-- <li class="list-group-item">room1</li> -->
                <?php foreach ($lamp as $l ) {?>
                    <li class="list-group-item"><?= $l['id']?>
                    <!-- <div class="col-8"></div> -->
                        <a href="<?=base_url();?>lamp/controlPage/<?= $l['id']?>" class="btn btn-sm btn-success float-right">Control Lamp</a>
                        <a id="del" href="<?=base_url();?>lamp/row_delete/<?= $l['id']?>" 
                        class="btn btn-sm btn-danger float-right mr-2"
                        onclick="return confirm('This room data is going to be deleted')">Delete Room</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>