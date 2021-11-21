<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <!-- custom css -->
  <link rel="stylesheet" href="./css/demo.css" />
  <!-- <link rel="stylesheet" href="./bootstrap-5.1.1/css/bootstrap.min.css"> -->
  <!-- google fonts -->
  <!-- below is for commment header  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

  <!-- Diploma CST heading google font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
  <!--  -->

  <style>
    /* logo font style */
    /* below for comment body  */

    /*  */
    @import url('https://fonts.googleapis.com/css2?family=Ephesis&display=swap');
  </style>
  <title>Question Peparation</title>
</head>
<link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
<link rel="manifest" href="./fav/site.webmanifest">

<body>
  <header class="header border">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand text-warning fw-bolder fs-4" style="font-family: 'Ephesis', cursive;">questionPeparation</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>

  <div class="container_main">
    <!-- Sidebar -->

    <aside class="container_sidebar bg-secondary">
      <ul class="list-group">
        <a href="#" class="list-group-item list-group-item-action px-4 py-3 bg-secondary text-light">An item</a>
        <a href="#" class="list-group-item list-group-item-action px-4 py-3 bg-secondary text-light">A second item</a>
        <a href="#" class="list-group-item list-group-item-action px-4 py-3 bg-secondary text-light">A third item</a>
        <a href="#" class="list-group-item list-group-item-action px-4 py-3 bg-secondary text-light">A fourth item</a>
        <a href="#" class="list-group-item list-group-item-action px-4 py-3 bg-secondary text-light">And a fifth one</a>
      </ul>
    </aside>

    <!-- Main -->
    <main class="container__under_main bg-light fs-5 fw-lighter py-3">
      <div class="p-3">
        <h2 class="title fw-bold" style="    font-family: 'Alfa Slab One', cursive; font-family: 'Nunito Sans', sans-serif;"> Dimploma in computer science and technology</h2>
        <img src="./image/emile-perron-xrVDYZRGdw4-unsplash.jpg" alt="computer" class="img-fluid shadow-sm image-describe">
        <p class=" fw-light">
          <span class="tab"></span>Diploma in Computer Science and Technology is a Diploma level Information Technology course. program prepares students for the challenging tasks by providing courses from the abstraction level up until implementation and deployment. The Diploma in Computer Science and Technology course curriculum covers the subjects such as basic computing, programming, operating systems, networking, database, as well as Mathematics and English. The Diploma in Computer Science and Technology course is career orienting in nature that opens many job opportunities after its successful passing.
        </p>
        <p class="text-success">
          Dimploma in Computer Siensce & Technology is 3 years course and if you enter through lateral entry you will admit directly to the 2nd year this mean, for lateral entry student the course is for 2 year only and there will be the same benifit as regular students. So stay focused and enjoy your Diploma journey.
        </p>
        <p class=" fw-light text-center border border-success shadow-sm">
          <a href="http://webscte.org/Syllabus.html" target="_blank" class="text-decoration-none">Click here</a> to download syllabus from official link
        </p>
        <p class="fw-light">
          <span class="tab"></span>Solving previous year papers is like analyzing yourself …its like checking for your own mistakes also it gives u soo much of confidence.

          Also, I always read previous year papers first to know whats more and leas important areas are

          because see … this syllabus is defined, not many things are changing so examiner ll set paper from this particular set only. what else he 'll ask out of it? and this means hell repeat questions also.

          always solve old papers properly.

          all the best.
        </p>
        <p>
        <h3>Below download last 10 years question papers</h3>
        </p>
      </div>
      <!-- FETCH result from database -->
      <div class="container my-2">
        <div class="row" id="display_1st_sem">

        </div>
      </div>

      <!--  -->
      <!-- pagination -->
      <div>
        <form action="" method="POST" role="form" id="pagiNation">
          <ul class="pagination pagination-sm justify-content-center year-pagination">

            <?php
            $year = date("Y");
            ?>
            <li class="page-item" id="latestYear">
              <a class="page-link" href="#" data-value="<?php echo $year; ?>"><?php echo $year; ?></a>
            </li>
            <?php
            for ($i = $year - 1; $i >= ($year - 4); $i--) {

            ?>
              <li class="page-item">
                <a class="page-link" href="#" data-value="<?php echo $i ?>"><?php echo $i; ?></a>
              </li>
            <?php
            }
            ?>
          </ul>
        </form>
      </div>
      <!-- pagination end -->
      <div id="displayResponse">

      </div>

      <!-- Comment system start from here  -->
      <div class="container">
        <form method="POST" id="comment_form">
          <div class="form-group w-50 comment_sec">
            <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
          </div>
          <div class="form-group w-50 comment_sec">
            <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="3"></textarea>
          </div>

          <div class="form-group w-50 comment_sec">
            <input type="hidden" name="comment_id" id="comment_id" value="0" />
            <input type="submit" name="submit" id="submit" class="btn btn-info float-right" value="Submit" />
          </div>

        </form>
        <span id="comment_message" class="bg-succss text-light"></span>
        <br />
        <div id="display_comment" style="margin: 0 auto;"></div>
      </div>
      <!-- Comment system end here  -->
    </main>
  </div>
  <!--TOtal Container end here-->

  <footer class="bd-footer bg-dark" id="footer-div">
    <div style="height:30vh"></div>
    <h5 class="text-center text-light">Copyright &copy; 2021</h5>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- JQuery script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- custom JS -->
  <script src="./js/fetchAjax.js"></script>
  <script src="./js/diploma_cst.js"></script>


</body>

</html>