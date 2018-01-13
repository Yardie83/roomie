<?php

use view\TemplateView;

?>
<!--<link rel="stylesheet" href="assets/landing/assets/css/Article-List.css">-->
<link rel="stylesheet" href="assets/landing/assets/css/Table-with-search.css">
<link rel="stylesheet" href="assets/landing/assets/css/styles.css">
</head>

<p class="text-center"
   style="font-style:normal;line-height:19px;font-size:36px;height:56px;margin-top:23px;"><?php echo isset($this->result) ? "We found <strong style='color: #f4476b'>" . sizeof($this->listings) . "</strong> rooms for you" : "Available Rooms" ?></p>
<div>
    <?php
    foreach ($this->listings as $listing): ?>
        <div class="container listing">
            <div class="row">
                <div class="col-md-6" style="width:320px;margin-left:0;margin-top:14px;"><img class="center-block"
                                                                                              style="height:137px;width:137px;">
                </div>
                <div class="col-md-6">
                    <div class="table-responsive" style="margin: 0;padding-top:6px;padding-bottom:0;">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td style="font-weight:bold;width:234px;height:41px;">City</td>
                                <td style="height:36px;"><?php echo TemplateView::noHTML($listing->getCity()); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;width:234px;height:41px;">Street</td>
                                <td style="height:36px;"><?php echo TemplateView::noHTML($listing->getStreet()); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">Rooms</td>
                                <td><?php echo TemplateView::noHTML($listing->getNumberOfRooms()); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">Move in date</td>
                                <td><?php echo TemplateView::noHTML($listing->getMoveInDate()); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;width:243px;">Squaremeters</td>
                                <td><?php echo TemplateView::noHTML($listing->getSquaremeters()); ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">Price</td>
                                <td><?php echo TemplateView::noHTML($listing->getPrice()); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2" style="margin-top:5px;">
                    <a href="<?php echo $GLOBALS["ROOT_URL"] . "/search/" . $listing->getId(); ?>">
                        <i class="glyphicon glyphicon-circle-arrow-right"
                           style="width:14px;padding-top:67px;font-size:26px;color:rgb(244,71,107);padding-left:38px;"></i></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="assets/landing/assets/js/Table-with-search.js"></script>
