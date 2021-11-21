<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- bootstrap icon CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <!--Fontawesone CDN  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <!-- custom css -->
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");

        .xtra_space {
            height: 60px;
            padding: 10px;
        }

        body {
            background-image: url(./image/ken-cheung-KonWFWUaAuk-unsplash.jpg);
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            /* color: rgba(130, 130, 130, 0.5); */
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
        }

        .chkForVal:invalid {
            background: rgb(252, 84, 62);
            color: black;
        }

        .chkForVal:valid {
            background: rgb(21, 182, 75);
            color: white;
        }
    </style>
    <!-- custom css end -->
    <title>Document</title>
</head>

<body>
    <div class="container mt-3 py-2 fw-bold">
        <div class="xtra_space">
            <h4 class="text-center fw-light fs-1" style="font-family: 'Alfa Slab One', cursive;">Admin Control card</h4>

        </div>
        <form id="adminForm" action="testSubmit.php" method="POST" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-group my-3">
                <label for="InputTitle">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter PDF Title Here" />
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <!-- Courses  -->
            <div class="form-group my-3">
                <label for="FormControlSelect">Department Selection</label>
                <select class="form-control chkForVal" id="FormControlSelect1" name="course">
                    <option value="" selected disabled>Select Department</option>
                    <optgroup class="text-dark" label="Diploma">
                        <option class="text-light" value="CST"> Comp. Sci. & Tech.</option>
                        <option class="text-light" value="ECE">Ele.& Comm. Eng.</option>
                    </optgroup>
                    <optgroup class="text-dark" label="B.Tech">
                        <option class="text-light" value="CSE">Comp. Sci. & Eng.</option>
                        <option class="text-light" value="ECE">Elect. Comm. Eng.</option>
                        <option class="text-light" value="EE">Ele.Eng.</option>
                    </optgroup>
                    <optgroup class="bg-dark" label="10(+1) & (+2)">
                        <option class="bg-success" value="CSE">Madhyamik</option>
                        <option class="bg-success" value="ECE">Ele.& Comm. Eng.</option>
                    </optgroup>
                </select>
            </div>

            <div class="d-flex justify-content-evenly">

                <!-- semester  -->
                <div class="form-group my-3" style="width: 400px;">
                    <label for="FormControlSelect2">Semester Selection</label>
                    <select class="form-control chkForVal" id="FormControlSelect2" name="semester">
                        <option value="" selected disabled>Select semester</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                    </select>
                </div>

                <!-- semester year  -->
                <div class="form-group my-3" style="width: 400px;">
                    <label for="FormControlSelect2">Year Selection</label>
                    <select class="form-control year chkForVal" id="FormControlSelect" name="year">
                        <option value=" " selected disabled>Select year</option>
                        <?php
                        echo "Select Course Current Year : ";
                        $year = date("Y");
                        $count = 5;
                        for ($i = 0; $i < $count; $i++) {
                            echo  '<option value="' . $year . '">' . $year . '</option>';

                            $year = $year - 1;

                            echo '<script>console.log(' . $year . ')</script>';
                        }

                        ?>
                    </select>
                </div>
            </div>
            <!-- PDF file  -->
            <div class="form-group my-3">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file form-control" id="FormControlFile" id="file" name="file" accept=".pdf" required />
            </div>

            <button type="submit" class="btn btn-primary submitBtn" name="submit" value="SUBMIT">Submit</button>
        </form>
        <div id="alertBox" class="text-center mt-3"></div>
    </div>

    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- ajax script  -->
    <script src="./js/ajax-script.js"></script>
</body>

</html>