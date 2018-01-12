<?php
use view\TemplateView;

$listing = $this->listing[0];
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<link rel="stylesheet" href="assets/detailView/assets/css/Lightbox-Gallery.css">
<link rel="stylesheet" href="assets/detailView/assets/css/Map-Clean.css">
<link rel="stylesheet" href="assets/detailView/assets/css/styles.css">
</head>

<body>
<div>
    <div class="container">
        <div class="row" style="margin:0px;margin-top:64px;">
            <div class="col-md-12 col-md-offset-10"><a
                        href="<?php echo $GLOBALS["ROOT_URL"] . "/pdf/" . $listing->getId(); ?>"><i
                            class="glyphicon glyphicon-download-alt"
                            style="margin-right:37px;font-size:26px;color:rgb(244,71,107);margin-left:0px;"></i></a>
            </div>
            </di
            <div class="row">
                <div class="col-md-10" style="width:432px;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-weight:normal;"><strong>Street</strong></th>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getStreet()); ?> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>Postal Code</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getPlz()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>City</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getCity()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>Canton</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getCanton()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>Number of Rooms</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getNumberofrooms()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>Rent</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getPrice()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>Square meters</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getSquaremeters()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>Available from</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getMoveInDate()); ?> </th>
                            </tr>
                            <tr>
                                <td><strong>Available until</strong></td>
                                <th style="font-weight:normal;"><?php echo TemplateView::noHTML($listing->getMoveOutDate()); ?> </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6" style="width:516px; margin-left: 80px; margin-top: 5px">
                    <table>
                        <tr>
                            <td><strong>Description</strong>
                            <p><?php echo TemplateView::noHTML($listing->getPublishedDate()); ?></p>
                            <p style="height:400px;"><?php echo TemplateView::noHTML($listing->getDescription()); ?></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro"></div>
            <div class="row photos">
                <div class="col-lg-3 col-md-4 col-sm-6 item">
                    <a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-responsive"
                                                                              src="assets/detailView/assets/img/desk.jpg"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 item">
                    <a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-responsive"
                                                                                  src="assets/detailView/assets/img/building.jpg"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 item">
                    <a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-responsive"
                                                                              src="assets/detailView/assets/img/loft.jpg"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="map-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Location </h2></div>
        </div>
        <iframe allowfullscreen="" frameborder="0" width="100%" height="450"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCc6umJix_atnmSnjG4S5S6rj4WP492C3Y&amp;q=<?php echo $listing->getStreet() . "+" . $listing->getCity() ?>+Switzerland&amp;zoom=15"></iframe>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
