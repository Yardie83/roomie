<link rel="stylesheet" href="assets/createAd/assets/css/Form-Select---Full-Date---Month-Day-Year.css">
<link rel="stylesheet" href="assets/createAd/assets/css/Pretty-Registration-Form.css">
<link rel="stylesheet" href="assets/createAd/assets/css/styles.css">
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 10px">
            <h2 class="text-center">SEARCH</h2>
        </div>
    </div>
</div>
<div class="row register-form">
    <div class="col-md-7 col-md-offset-3">
        <form class="form-horizontal custom-form" action="search" method="post" style="font-family: 'Helvetica'; padding: 10px 10px 10px 10px">
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Street</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" name="street">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Postal Code</label>
                </div>
                <div class="col-sm-6 col-md-6 input-column">
                    <label>
                        <input class="form-control" type="text" name="plz">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">City </label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" name="city">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">

                    <label class="control-label">Canton </label>

                </div>
                <div class="col-sm-6 input-column">

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
                        <input class="form-control" type="text" name="rooms">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Monthly Rent</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" name="price">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label">Square meter</label>
                </div>
                <div class="col-sm-6 input-column">
                    <label>
                        <input class="form-control" type="text" name="squareMeters">
                    </label>
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
                                <select name="month" class="form-control display-inline-block">
                                    <option value="1" selected="">January</option>
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
                                <select name="day" class="form-control display-inline-block">
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
                                </select>
                            </label>
                            <label>
                                <select name="year" class="form-control display-inline-block">
                                    <option value="2018" selected="">2018</option>
                                    <option value="2019">2019</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary submit-button" type="submit">Search</button>
        </form>
    </div>
</div>