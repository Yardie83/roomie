<?php

use view\TemplateView;

?>
<?php
foreach ($this->listings as $listing): ?>

<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
<?php echo TemplateView::noHTML($listing->getStreet()); ?>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Available Rooms</h2></div>
            <div class="row articles" style="padding-bottom:5px;">
                <div class="col-md-4 col-md-offset-2 col-sm-6 item"
                     style="width:600px;margin-left:168px;padding-top:3px;padding-bottom:0px;">
                    <a href="#"><img class="img-responsive" src="assets/img/desk.jpg"
                                     style="height:201px;background-position:bottom;margin-left:147px;"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <p class="description">Monthly Price</p>
                    <p class="description">Rooms </p>
                    <p class="description">City </p><a href="#" class="action"><i
                                class="glyphicon glyphicon-circle-arrow-right" style="color:rgb(244,71,107);"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>