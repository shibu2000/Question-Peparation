// $(window).scroll(function(){
//     var windscroll = $(window).scrollTop();
//     /*
//     Since an average page height is not more than 720px so if windscroll >= 360 then let div appear.
//     */
//    console.log("hello");
//    console.log(windscroll);
//     if (windscroll >= 2000)
//     {
//         $("#footer-div").css('display','block');
//     } else {
//     $("#footer-div").css('display','none');

//     }
// })

$(document).ready(function () {
  console.log("ready!");
  let latestYear = document.getElementById("latestYear");
  // console.log(latestYear);
  latestYear.classList.add("active");
  let temp = latestYear;
  var currentYear = new Date().getFullYear();

  $.ajax({
    method: "POST",
    url: "fetchResultCST.php",
    data: { selectYear: currentYear },
    befoneSend: function () {
      $("#display_1st_sem").html("Please Wait!!");
    },
    success: function (Data) {
      $("#display_1st_sem").html(Data);
    },
  });

  $(document).on("click", ".year-pagination li a", function (e) {
    e.preventDefault();
    // remove activate class, which is initially activated
    temp.classList.remove("active");

    var year = $(this).data("value");
    //Its an alternative way of storing the value from text
    // var year = $(this).text();
    // console.log(year);
    // Storing the parent element of anchor clicked
    let elem = e.target.parentElement;
    // console.log(elem);
    elem.classList.add("active");
    // storing the activated element into temporary
    // So that whenever new clicked occur again,
    // previous active class will be remove and new one will be active
    temp = elem;

    // AJAX to fetch result according to the selected year
    // var formData = selected_value;
    // let selectYear = year;
    // console.log(selectYear);
    $.ajax({
      method: "POST",
      url: "fetchResultCST.php",
      data: { selectYear: year },
      befoneSend: function () {
        // alert('Please Wait');
      },
      success: function (response) {
        // alert('Please Wait');
        // console.log("Successfull");
        console.log(response);
        $("#display_1st_sem").html(response);
        $("html, body").animate(
          {
            scrollTop: $("#display_1st_sem").offset().top,
          },
          1000
        );
      },
    });
  });
});
