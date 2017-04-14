<div class="container">
    <?php $attributes = array(); ?>
    <?php echo form_open("vehicle/available_vehicles", $attributes); ?>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group row">
                <?php echo form_label("From", "", array('class' => 'col-sm-2')); ?>
                <div class="col-sm-6">
                    <?php echo form_input(array(
                        'type' => 'date',
                        'name' => 'from_date',
                        'id' => 'from_date',
                        'min' => date('Y-m-d'),
                        'value' => date('Y-m-d', $startDate),
                        'class' => 'form-control',
                        'required' => 'true'
                    )) ?>
                </div>
                <div class="col-sm-4">
                    <?php echo form_input(array(
                        'type' => 'time',
                        'name' => 'from_time',
                        'id' => 'from_time',
                        'value' => date('H:00', $startDate),
                        'class' => 'form-control',
                        'required' => 'true'
                    )) ?>
                </div>
            </div>

            <div class="form-group row">
                <?php echo form_label("To", "", array('class' => 'col-sm-2')); ?>
                <div class="col-sm-6">
                    <?php echo form_input(array(
                        'type' => 'date',
                        'name' => 'to_date',
                        'id' => 'to_date',
                        'min' => date('Y-m-d'),
                        'value' => date('Y-m-d', $endDate),
                        'class' => 'form-control',
                        'required' => 'true'
                    )) ?>
                </div>
                <div class="col-sm-4">
                    <?php echo form_input(array(
                        'type' => 'time',
                        'name' => 'to_time',
                        'id' => 'to_time',
                        'value' => date('H:00', $endDate),
                        'class' => 'form-control',
                        'required' => 'true'
                    )) ?>
                </div>
            </div>
        </div>

        <div class="form-group col-sm-4">
            <?php echo form_label("Vehicle Type", "", array('class' => 'col-sm-5')); ?>
            <div class="col-sm-7">
                <?php echo form_dropdown("vehicle_type", $vehicleTypes, $selectedVehicleType, array('class' => 'form-control')) ?>
            </div>
        </div>

        <div class="col-sm-1 col-sm-offset-1">
            <?php echo form_submit(array(
                'value' => 'search',
                'class' => 'btn btn-warning btn-sm'
            )) ?>
        </div>
    </div>
    <?php echo form_close() ?>

    <!--available vehicles-->
    <?php if (count($availableVehicles) > 0): ?>
        <div class="panel panel-green row">
            <div class="panel-heading">Available Vehicles</div>

            <!--panel-->
            <div style="padding: 5px;">
                <!--vehicles-->
                <?php foreach ($availableVehicles as $vehicle): ?>
                    <div class="panel panel-green col-sm-6" style="padding: 5px">
                        <div class="col-md-7" style="text-align: center;">
                            <img src="<?= base_url("uploads/vehicle/$vehicle->image") ?>" style="height: 150px;"
                                 alt="vehicle"
                                 class="img-thumbnail"/>
                            <label style="display: block"><?= $vehicle->vehicleRegNo ?></label>
                        </div>
                        <div class="col-md-5" style="padding: 0">
                            <div style="background-color: forestgreen; width: 100%;">
                                <label style="color: white"><?= $vehicle->model ?></label>
                            </div>
                            <div style="width: 100%;">
                                <label><?= "$vehicle->fuelType $vehicle->vehicleType" ?></label>
                            </div>
                            <div style="width: 100%;">
                                <label>Seats : <?= $vehicle->seatCount ?></label>
                            </div>
                            <div style="width: 100%;">
                                <?php
                                if ($vehicle->ac) {
                                    echo "<label style=\"background-color: lightskyblue\">A/C Vehicle</label>";
                                } else {
                                    echo "<label>No A/C</label>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    <?php else: ?>
        <div class="alert alert-danger fade in">No available vehicles found</div>
    <?php endif; ?>
    <!--end avaible vehicle-->

    <!--unavailable vehicles-->
    <?php if (count($reservedVehicles) > 0): ?>
        <div class="panel panel-yellow row">
            <div class="panel-heading">Reserved Vehicles</div>

            <!--panel-->
            <div style="padding: 5px;">
                <!--vehicles-->
                <?php foreach ($reservedVehicles as $vehicle): ?>
                    <div class="panel panel-yellow col-sm-6" style="padding: 5px">
                        <div class="col-md-7" style="text-align: center;">
                            <img src="<?= base_url("uploads/vehicle/$vehicle->image") ?>" style="height: 150px;"
                                 alt="vehicle"
                                 class="img-thumbnail"/>
                            <label style="display: block"><?= $vehicle->vehicleRegNo ?></label>
                        </div>
                        <div class="col-md-5" style="padding: 0">
                            <div style="background-color: goldenrod; width: 100%;">
                                <label style="color: white"><?= $vehicle->model ?></label>
                            </div>
                            <div style="width: 100%;">
                                <label><?= "$vehicle->fuelType $vehicle->vehicleType" ?></label>
                            </div>
                            <div style="width: 100%;">
                                <label>Seats : <?= $vehicle->seatCount ?></label>
                            </div>
                            <div style="width: 100%;">
                                <?php
                                if ($vehicle->ac) {
                                    echo "<label style=\"background-color: lightskyblue\">A/C Vehicle</label>";
                                } else {
                                    echo "<label>No A/C</label>";
                                }
                                ?>
                            </div>
                            <div class="visible-md-block visible-lg-block" style="padding: 23px;"></div>
                            <div style="height: 30px;">
                                <button class="btn btn-warning btn-sm" style="float: right;">more...</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <!--end unavaible vehicle-->

</div>