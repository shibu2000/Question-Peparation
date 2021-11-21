<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!--  -->
    <!-- custom CSS-indexCSS  -->
    <link rel="stylesheet" href="./css/indexCSS.css">
    <!--  -->
    <title>Document</title>
</head>

<body id="index">
    <header class="header border">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-warning fw-bolder fs-4" style="font-family: 'Ephesis', cursive;">questionPeparation</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="container-fluid" id="contentMain">
        <div class="container-sm text-center shadow" id="heading">
            Welcome <span id="headingLoop"></span>
        </div>
        <div class="container-sm d-flex my-3">
            <div class="card-group">
                <div class="card mx-3">
                    <img src="./image/emile-perron-xrVDYZRGdw4-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                    </div>
                </div>
                <div class="card">
                    <img src="./image/ken-cheung-KonWFWUaAuk-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card mx-3">
                    <img src="./image/emile-perron-xrVDYZRGdw4-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-sm text-center py-3">
            <button type="button" class="btn btn-outline-danger getStarted_btn" style="font-size: 40px;">Get Started</button>
        </div>
        <div class="container-sm fs-6" style="text-align: justify;">
            <div class="textContainer">
                Our website is for students, where students can understand the questions patterns, types by revising prevous questions papers.
                <br>
                Questions have long been used as a teaching tool by teachers and preceptors to assess students’ knowledge, promote comprehension, and stimulate critical thinking. Well-crafted questions lead to new insights, generate discussion, and promote the comprehensive exploration of subject matter. Poorly constructed questions can stifle learning by creating confusion, intimidating students, and limiting creative thinking. Teachers most often ask lower-order, convergent questions that rely on students’ factual recall of prior knowledge rather than asking higher-order, divergent questions that promote deep thinking, requiring students to analyze and evaluate concepts. This review summarizes the taxonomy of questions, provides strategies for formulating effective questions, and explores practical considerations to enhance student engagement and promote critical thinking. These concepts can be applied in the classroom and in experiential learning environments.

                <p>
                    Questions have long been used as a teaching tool by teachers and preceptors to assess students’ knowledge, promote comprehension, and stimulate critical thinking. Well-crafted questions lead to new insights, generate discussion, and promote the comprehensive exploration of subject matter. Poorly constructed questions can stifle learning by creating confusion, intimidating students, and limiting creative thinking. Teachers most often ask lower-order, convergent questions that rely on students’ factual recall of prior knowledge rather than asking higher-order, divergent questions that promote deep thinking, requiring students to analyze and evaluate concepts. This review summarizes the taxonomy of questions, provides strategies for formulating effective questions, and explores practical considerations to enhance student engagement and promote critical thinking. These concepts can be applied in the classroom and in experiential learning environments.
                </p>

                <p>
                    You dont always need a good coaching institute to do well. Hard work has no substitute.

                    Coming back to your question , yes it will be very helpful to study previous years papers as they will give you a fair idea of the following:
                </p>

                <p>
                    Marking scheme
                    How questions are going to be asked from different topic
                    You will also get a fair idea of your weaknesses so you can work harder on those topics
                    Helps to gain confidence
                    Best way to learn time management during exams
                </p>
            </div>
        </div>
        <div class="container-sm py-3 courseListView">
            <div class="card-header text-center fs-4">SELECT BRANCH</div>
            <div class="row row-list1 pt-3 bg-light mt-3">
                <ul class="list-group list-group-horizontal-sm justify-content-around">
                    <li class="list-group-item list-group-itemssss">Diploma</li>
                    <li class="list-group-item">B.Tech</li>
                    <li class="list-group-item">Madhyamik</li>
                    <li class="list-group-item">H.Secondary</li>
                </ul>
            </div>
            <div class="row row-list2 py-5 bg-primary">

            </div>
        </div>
    </div>
    <div id="mainContainer"></div>
    <div class="card bg-dark">
        <div class="card-header"></div>
        <div class="card-body" style="height: 30vh;"></div>
        <div class="card-footer"></div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- JQuery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/indexjs.js"></script>
</body>

</html>