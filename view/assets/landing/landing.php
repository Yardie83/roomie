<?php

use view\TemplateView;

?>
<p class="text-center" style="font-style:normal;line-height:19px;font-size:36px;height:56px;margin-top:23px;"><?php echo isset($this->result) ? "We found <strong>".sizeof($this->listings). "</strong> rooms for you": "Available Rooms" ?></p>
<div>
    <div class="container">
        <div class="row">
            <?php
            foreach ($this->listings as $listing): ?>
            <!--                <div class="col-md-6" style="width:320px;margin-left:0px;"><img-->
            <!--                            src=--><?php //echo TemplateView::noHTML($listing->image1()); ?><!-- class="center-block"-->
            <!--                            style="height:137px;width:137px;"></div>-->
            <!--                <div class="col-md-6">-->
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <td style="font-weight:bold;">City</td>
                        <td><?php echo TemplateView::noHTML($listing->getCity()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;">Address</td>
                        <td><?php echo TemplateView::noHTML($listing->getStreet()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;">Rooms</td>
                        <td><?php echo TemplateView::noHTML($listing->getNumberOfRooms()); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;width:243px;">Monthly Rent</td>
                        <td><?php echo TemplateView::noHTML($listing->getPrice()); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
