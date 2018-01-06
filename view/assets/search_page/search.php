<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search_page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="font-family:'Source Sans Pro', sans-serif;margin-bottom:50px;margin-top:50px;">Search a room</h1>
            <form>
                <div class="form-group">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-2 col-md-offset-4 col-sm-offset-1 col-xs-offset-1">
                            <label class="control-label" style="font-family:'Source Sans Pro', sans-serif;">Room mate gender </label>
                        </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="genderradio">Male</label>
                            </div>
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="genderradio">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-2 col-md-offset-4 col-sm-offset-1 col-xs-offset-1">
                            <label class="control-label" style="font-family:'Source Sans Pro', sans-serif;">City </label>
                        </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <input class="form-control" type="text" placeholder="City">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-6 col-xs-2 col-xs-offset-6">
                            <button class="btn btn-primary" type="submit" style="width:150px;">Search </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>