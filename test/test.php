<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .containerMain {
        display: flex;
      }

      .container__sidebar {
        width: 25%;
        height: 100vh;
      }

      .container__main {
        /* Take the remaining width */
        flex: 1;

        /* Make it scrollable */
        overflow: auto;
        height: 100vh;
      }
    </style>
  </head>

  <body id="body">
    <div class="containerMain">
      <!-- Sidebar -->
      <aside class="container__sidebar bg-secondary">
        <ul class="list-group">
          <a
            href="#"
            id="anItem"
            class="
              list-group-item list-group-item-action
              px-4
              py-3
              bg-secondary
              text-light
            "
            >An item</a
          >
          <a
            href="#"
            class="
              list-group-item list-group-item-action
              px-4
              py-3
              bg-secondary
              text-light
            "
            >A second item</a
          >
          <a
            href="#"
            id="thirdItem"
            class="
              list-group-item list-group-item-action
              px-4
              py-3
              bg-secondary
              text-light
            "
            >A third item</a
          >
          <a
            href="#"
            class="
              list-group-item list-group-item-action
              px-4
              py-3
              bg-secondary
              text-light
            "
            >A fourth item</a
          >
          <a
            href="#"
            class="
              list-group-item list-group-item-action
              px-4
              py-3
              bg-secondary
              text-light
            "
            >And a fifth one</a
          >
        </ul>
      </aside>

      <!-- Main -->
      <main class="container__main bg-info">
        <div id="displayAjax"></div>
      </main>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
    <!-- JQuery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#thirdItem").on("click", function (e) {
          e.preventDefault();
          $.ajax({
            method: "POST",
            url: "display1.php",
            success: function (response) {
              $('#body').html(response);
            },
          });
        });
        $("#anItem").on("click", function (e) {
          e.preventDefault();
          $.ajax({
            method: "POST",
            url: "display2.php",
            dataType: 'JSON',
            type:"GET",
            success: function (data) {
              // var htmlData = data.html;
              // var response = data.response;
              // console.log(htmlData);
              $('#displayAjax').html(data.html);
              console.log(data.response);
            },
          });
        });
      });
    </script>
    <script>
      // Start of changing page contect on clicking course details
  // $(document).on(
  //   "click",
  //   ".row-list2 .list-group .list-group-item",
  //   function (e) {
  //       pageurl = $(this).attr('href');
  //       $.ajax({
  //         url: pageurl + '?rel=tab',
  //         success: function(data) {
  //           $('body').html(data);
  //         }
  //       });
  //       if (pageurl != window.location) {
  //         window.history.pushState({
  //           path: pageurl
  //         }, '', pageurl);
  //       }
  //       return false;
  //     });
  //     $(window).bind('popstate', function() {
	// 			$.ajax({
	// 				url: location.pathname + '?rel=tab',
	// 				success: function(data) {
	// 					$('#body').html(data);
	// 				}
	// 			});
	// 		});

    </script>
    <script>
      <?php
                    //Getting the todays date
                    $todayDate = date("Y");
                    // calculating the difference between today's date with uploaded date
                    $interval = abs(strtotime($todayDate) - strtotime($uploadTimeDate));

                    $yearsDiff = floor($interval / (365 * 60 * 60 * 24)); //calculating Year Difference
                    $monthsDiff = floor(($interval - $yearsDiff * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24)); //Months difference
                    $daysDiff = floor(($interval - $yearsDiff * 365 * 60 * 60 * 24 - $monthsDiff * 30 * 60 * 60 * 24) / (60 * 60 * 24)); //days difference

                    // echo $yearsDiff . " year(s) and " . $monthsDiff . " month(s) and " . $daysDiff . " days(s)";


                    ?>
                    <small class="text-muted" style="font-size: 14px; font-family: 'Kaushan Script', cursive;">Last Updated on <?php
                                                                                                                                //Showing the last uploaded time in the form of years||months||days
                                                                                                                                if ($yearsDiff > 0) {
                                                                                                                                    echo $yearsDiff . " year(s) ago";
                                                                                                                                } else {
                                                                                                                                    if ($monthsDiff < 12 && $monthsDiff > 0) {
                                                                                                                                        echo $monthsDiff . " month(s) ago";
                                                                                                                                    } else {
                                                                                                                                        echo $daysDiff . " day(s) ago";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                ?></small>
    </script>
  </body>
</html>
