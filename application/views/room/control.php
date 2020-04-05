<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>

</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <h2 class="" style="margin-top: 10px; margin-bottom: 20px">Lamp Controller</h2>
                
                                <!-- Living room -->

                <div class="card ml-auto mr-auto mt-auto alert-success" style="margin-top: 10px; margin-bottom:10px;">                
                    <h5 class="card-title float-left" style="padding: 10px">Living Room(<?= $on?>)</h5>
                    <div class="card-body badge-success" id="">
                        <a href="<?=base_url();?>lamp/turnon/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn On
                                <!-- <?php echo $id?> -->
                            </div>
                        </a>
                        <a href="<?=base_url();?>lamp/turnoff/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn Off
                                <!-- <?php echo $title?> -->
                            </div>
                        </a>
                    </div>
                </div>

                    <!-- bath room -->

                <div class="card ml-auto mr-auto mt-auto  alert-success" style="margin-top: 10px; margin-bottom:10px">
                <h5 class="card-title float-left" style="padding: 10px">Bath Room(<?= $on?>)</h5>
                    <div class="card-body badge-success" id="">
                        <a href="<?=base_url();?>lamp/turnon/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn On
                                <!-- <?php echo $id?> -->
                            </div>
                        </a>
                        <a href="<?=base_url();?>lamp/turnoff/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn Off
                                <!-- <?php echo $title?> -->
                            </div>
                        </a>
                    </div>
                </div>

                <!-- dining room -->

                <div class="card ml-auto mr-auto mt-auto alert-success" style="margin-top: 10px; margin-bottom:10px">
                <h5 class="card-title float-left" style="padding: 10px">Bedroom(<?= $on?>)</h5>
                    <div class="card-body badge-success" id="">
                        <a href="<?=base_url();?>lamp/turnon/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn On
                                <!-- <?php echo $id?> -->
                            </div>
                        </a>
                        <a href="<?=base_url();?>lamp/turnoff/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn Off
                                <!-- <?php echo $title?> -->
                            </div>
                        </a>
                    </div>
                </div>

                <!-- bed room -->

                <div class="card ml-auto mr-auto mt-auto alert-success" style="margin-top: 10px; margin-bottom:10px">
                <h5 class="card-title float-left" style="padding: 10px">Dining Room(<?= $on?>)</h5>
                    <div class="card-body badge-success" id="">
                        <a href="<?=base_url();?>lamp/turnon/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn On
                                <!-- <?php echo $id?> -->
                            </div>
                        </a>
                        <a href="<?=base_url();?>lamp/turnoff/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn Off
                                <!-- <?php echo $title?> -->
                            </div>
                        </a>
                    </div>
                </div>

                <!-- kitchen -->

                <div class="card ml-auto mr-auto mt-auto alert-success" style="margin-top: 10px; margin-bottom:10px">
                <h5 class="card-title float-left" style="padding: 10px">Kitchen(<?= $on?>)</h5>
                    <div class="card-body badge-success" id="">
                        <a href="<?=base_url();?>lamp/turnon/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn On
                                <!-- <?php echo $id?> -->
                            </div>
                        </a>
                        <a href="<?=base_url();?>lamp/turnoff/<?= $id?>">
                            <div style=" padding: 50px; color: whitesmoke" >
                                Turn Off
                                <!-- <?php echo $title?> -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/myapp/semester4/jobsheet9/group3/index.php/lamp_api"></script>
</body>
</html>