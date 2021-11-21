$(document).ready(function () {
    $(document).on(
        "click",
        ".row-list2 .list-group .list-group-item",
        function (e) {
          pageurl = $(this).attr("href");
          $.ajax({
            url: pageurl + "?rel=tab",
            success: function (data) {
              $("#mainContainer").html(data);
            },
          });
          if (pageurl != window.location) {
            window.history.pushState(
              {
                path: pageurl,
              },
              "",
              pageurl
            );
          }
          return false;
        }
      );
      $(window).bind("popstate", function () {
        $.ajax({
          url: location.pathname + "?rel=tab",
          success: function (data) {
            $("#mainContainer").html(data);
          },
        });
      });
});
