<!DOCTYPE html>
<html lang="en">
<head>
  <title>Residence Hall Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<style CSS>
    html,
    body{
        height: 100%;
    }

    #cover {
        background: white url('') center center no-repeat;
        background-size: cover;
        height: 100%;
        text-align: center;
        display: flex;
        align-items: center;
    }

    #cover-caption {
        width: 100%;
    }
</style>

<body>
<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row text-black">
                <div class="col-sm-30 text-center">
                    <h1 class="display-4">Sojourner Truth Apartment Sign In</h1>
                    <div class="info-form">
                        <form action="" class="form-inlin justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter your first name" name=firstName>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter your last name" name=lastName>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Rutgers ID</label>
                                <input type="text" class="form-control" placeholder="Enter your Rutgers ID" name=rutgersID>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Resident's Name</label>
                                <input type="text" class="form-control" placeholder="Enter the resident's name" name=residentName>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Apartment Number</label>
                                <input type="text" class="form-control" placeholder="Enter the apartment number" name=apartmentNumber>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Time</label>
                                <input type="text" class="form-control" placeholder="Enter the current time" name=signInTime>
                            </div>
                            <button type="submit" class="btn btn-success ">Submit</button>
                        </form>
                    </div>
                    <br>

                    <a href="#nav-main" class="btn btn-outline-secondary btn-sm" role="button">
                        Sign Up
                    </a>
                    <a href="#nav-main" class="btn btn-outline-secondary btn-sm" role="button">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>