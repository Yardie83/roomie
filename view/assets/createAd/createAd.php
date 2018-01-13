<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 17:06
 */

use domain\Listing;
use service\AuthServiceImpl;
use view\TemplateView;
use validator\CustomerValidator;
use validator\ListingValidator;

isset($this->listing) ? $listing = $this->listing : $listing = new Listing();
//isset($this->customerValidator) ? $customerValidator = $this->customerValidator : $customerValidator = new CustomerValidator();
isset($this->listingValidator) ? $listingValidator = $this->listingValidator : $listingValidator = new ListingValidator();

?>
<link rel="stylesheet" href="assets/createAd/assets/css/Form-Select---Full-Date---Month-Day-Year.css">
<link rel="stylesheet" href="assets/createAd/assets/css/Pretty-Registration-Form.css">
<link rel="stylesheet" href="assets/createAd/assets/css/styles.css">
<script type="text/javascript" src="assets/createAd/assets/js/checkListingEntries.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 10px">
            <h2 class="text-center"><?php echo isset($this->listing) ? "EDIT YOUR LISTING" : "POST YOUR LISTING"; ?></h2>
        </div>
    </div>
</div>
<div class="row register-form">
    <div class="col-md-8 col-md-offset-3">
        <form class="form-horizontal custom-form" action="update" method="post">
            <div class="form-group">
                <?php
                if (!empty($listing->getId())) {
                    echo '<div class="col-sm-4 label-column">
                    <label class="control-label">Listing ID</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" readonly="" name="id" value="' ?><?php echo $listing->getId();
                    echo '">
                    </label>
                </div>';
                }
                ?>
                <input class="form-control" type="hidden" readonly="" name="userID"
                       value="<?php echo AuthServiceImpl::getInstance()->getCurrentUserId(); ?>">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Street <?php echo TemplateView::noHTML($listing->getStreet()) ?></label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" required="" name="street"
                               value="<?php echo TemplateView::noHTML($listing->getStreet()) ?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Postal Code</label>
                </div>
                <div class="col-sm-6 col-md-6 input-column">
                    <label>
                        <input id="plz" class="form-control" type="text" required="" name="plz"
                               value="<?php echo TemplateView::noHTML($listing->getPlz()) ?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">City </label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" required="" name="city"
                               value="<?php echo TemplateView::noHTML($listing->getCity()) ?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Canton </label>
                </div>
                <div class="col-sm-6 input-column">
                    <!--                    <label>-->
                    <!--                        <input class="form-control" type="text" required="" name="canton"-->
                    <!--                               value="-->
                    <?php //echo TemplateView::noHTML($listing->getCanton()) ?><!--">-->
                    <!--                    </label>-->

                    <label>
                        <select name="canton" class="form-control display-inline-block" required="">

                            <option value="Aargau" selected="">Aargau</option>
                            <option value="Appenzell Ausserrhoden">Appenzell Ausserrhoden</option>
                            <option value="Appenzell Innerrhoden">Appenzell Innerrhoden</option>
                            <option value="Basel-Landschaft">Basel-Landschaft</option>
                            <option value="Basel-Stadt">Basel-Stadt</option>
                            <option value="Bern">Bern</option>
                            <option value="Freiburg">Freiburg</option>
                            <option value="Genf">Genf</option>
                            <option value="Glarus">Glarus</option>
                            <option value="Graubünden">Graubünden</option>
                            <option value="Jura">Jura</option>
                            <option value="Luzern">Luzern</option>
                            <option value="Neuenburg">Neuenburg</option>
                            <option value="Nidwalden">Nidwalden</option>
                            <option value="Obwalden">Obwalden</option>
                            <option value="Schaffhausen">Schaffhausen</option>
                            <option value="Schwyz">Schwyz</option>
                            <option value="Solothurn">Solothurn</option>
                            <option value="St. Gallen">St. Gallen</option>
                            <option value="Tessin">Tessin</option>
                            <option value="Thurgau">Thurgau</option>
                            <option value="Uri">Uri</option>
                            <option value="Waadt">Waadt</option>
                            <option value="Wallis">Wallis</option>
                            <option value="Zug">Zug</option>
                            <option value="Zürich">Zürich</option>
                        </select>
                    </label>


                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">No. of Rooms</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" required="" name="rooms"
                               value="<?php echo TemplateView::noHTML($listing->getNumberofrooms()) ?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Monthly Rent</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" required="" name="price"
                               value="<?php echo TemplateView::noHTML($listing->getPrice()) ?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Square meter</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" required="" name="squareMeters"
                               value="<?php echo TemplateView::noHTML($listing->getSquaremeters()) ?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Description </label>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 input-column">
                    <textarea rows="4" class="form-control" name="description"
                              required=""><?php echo TemplateView::noHTML($listing->getDescription()) ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Available from</label>
                </div>
                <div class="col-md-8 col-sm-6 input-column">
                    <div class="row">
                        <div class="col-sm-12">

                            <label>
                                <select name="moveInDay" class="form-control display-inline-block" required="">

                                    <?php echo '<option value="1" selected="">' ?><?php echo date("d") . '</option>' ?>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </label>
                            <label>
                                <select name="moveInMonth" class="form-control display-inline-block" required="">

                                    <?php echo '<option value="1" selected="">' ?><?php echo date("F") . '</option>' ?>

                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </label>
                            <label>
                                <select name="moveInYear" class="form-control display-inline-block" required="">
                                    <option value="2018" selected="">2018</option>
                                    <option value="2019">2019</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Available until</label>
                </div>
                <div class="col-md-8 col-sm-6 input-column">
                    <div class="row">
                        <div class="col-sm-12">

                            <label>
                                <select name="moveOutDay" class="form-control display-inline-block" required="">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="-" selected="">-</option>
                                </select>
                            </label>
                            <label>
                                <select name="moveOutMonth" class="form-control display-inline-block" required="">

                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                    <option value="-" selected="">-</option>
                                </select>
                            </label>
                            <label>
                                <select name="moveOutYear" class="form-control display-inline-block" required="">
                                    <option value="2018" selected="">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="-" selected="">-</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary submit-button" onclick="checkEntry(document.getElementById('plz').innerHTML"
                    type="submit">Save
            </button>
        </form>
    </div>
</div>