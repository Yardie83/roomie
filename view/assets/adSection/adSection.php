<?php

use view\TemplateView;

?>
<p class="text-center" style="font-style:normal;line-height:19px;font-size:36px;height:56px;margin-top:23px;">Available
    Rooms</p>
<div>
    <div class="container">
        <?php
        foreach ($this->listings as $listing): ?>
        <div class="row">
            <!--                <div class="col-md-6" style="width:320px;margin-left:0px;"><img-->
            <!--                            src=-->
            <?php //echo TemplateView::noHTML($listing->image1()); ?><!-- class="center-block"-->
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
                <div class="btn-group btn-group-sm" role="group">
                    <a class="btn btn-default" role="button" href="listing/edit?id=<?php echo $listing->getId(); ?>"> <i
                                class="fa fa-edit"></i></a>
                    <button class="btn btn-default" type="button" data-target="#confirm-modal" data-toggle="modal"
                            data-href="listing/delete?id=<?php echo $listing->getId(); ?>"><i class="glyphicon glyphicon-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confirm-modal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Delete a <strong>listing</strong>.</h4></div>
                <div class="modal-body">
                    <p>Do you want to delete a listing?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" role="button" href="listing/delete?id=<?php echo $listing->getId(); ?>"> Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

