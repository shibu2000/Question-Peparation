$(document).ready(function () {
  var heading = ["FRIENDS", "STUDENTS", "MASTERES", "My Dear"];
  classLists = ["text-primary", "text-success", "text-danger", "text-warning"];
  let elem = document.getElementById("heading");
  // console.log(elem);
  elem.classList.add(classLists[0]);
  textSequence(0);
  function textSequence(i) {
    if (heading.length > i) {
      setTimeout(function () {
        elem.classList.remove(classLists[i]);
        document.getElementById("headingLoop").innerHTML = heading[i];
        textSequence(++i);
        elem.classList.add(classLists[i]);
      }, 3000); // 1 second (in milliseconds)
    } else if (heading.length == i) {
      // Loop
      textSequence(0);
      elem.classList.add(classLists[0]);
    }
  }
  // end of header text change autometically //

  // starting of course details

  let flag = 0;
  let temp;
  $(".row-list1 .list-group .list-group-item").css("padding", "20px");
  $(".row-list1 .list-group .list-group-item").css("border-radius", "5px");

  $(function () {
    $(".row-list1 .list-group-item")
      .css("cursor", "pointer")

      .click(function (e) {
        e.preventDefault();
        let listName = $(this).text();
        // console.log(listName);
        let activeClass = e.target;
        if (flag == 0) {
          activeClass.classList.add("active");
          flag = 1;
          temp = activeClass;
          // console.log(temp);
          // console.log("if part");
          // console.log(flag);
        } else {
          temp.classList.remove("active");
          activeClass.classList.add("active");
          temp = activeClass;
          flag = 1;
          // console.log(temp);
          // console.log("else part");
        }

        // console.log(activeClass);
        if (
          listName == "Diploma" ||
          listName == "B.Tech" ||
          listName == "H.Secondary"
        ) {
          $(".row-list2").css("display", "block");

          $.ajax({
            method: "POST",
            data: { listName: listName },
            url: "rowListFetch.php",
            success: function (data) {
              $(".row-list2").html(data);
              $(".row-list2 .list-group .list-group-item").css({
                "padding": "20px",
                "border-radius": "5px",
                "cursor": "pointer",
                "margin-left": "30px",
                "margin-right": "30px",
              });
            },
          });
        } else {
          //for madhyamik
          console.log("Madhyamik");
          if ($(".row-list2").css("display") == "block") {
            $(".row-list2").css("display", "none");
          }
        }
      });
  });
  // end of course details//

  //Start of scroll function while clicking on get started button
  $(".getStarted_btn").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: $(".courseListView").offset().top,
      },
      1000
    );
  });
  // end of scroll function

  // document.ready end here
});
