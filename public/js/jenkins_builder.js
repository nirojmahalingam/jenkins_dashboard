$.fn.display_builds = function () {
  //SET VAR
  var template;
  var build_status;

  //AJAX CALL
  $.ajax({
      url: 'getData',
      cache: false,
      dataType: "json",
      success: function (data) {
        $.each( data, function( key, value ) {
          //build_status: JENKINS return blue for success and red for fail.
          build_status = (data[key].healthReport.color == "blue" ? "fa-5 fa fa-sun-o" : "fa fa-bolt fa-5");

          //SETUP LAYOUT
          template =
          "<div id='"+data[key].name+"' class='col-xs-12 col-md-6 col-lg-4'>"+
            "<div class='multi-stat-box'>" +
              "<div class='header'>" +
                "<div class='left'>"+
                  "<h2>Builds</h2"+
                  "a><i class='fa fa-chevron-dow'></i> </a> </div>"+
                "<div class='right'>"+
                  "<h2>"+data[key].name+"</h2>"+
                "</div>"+
              "</div>"+
              "<div class='content'>"+
                "<div class='left'>"+
                  "<ul>"+
                    "<li> <span class='date'>Second last</span> <span class='value'>"+data[key].builds[0]+"</span> </li>"+
                    "<li> <span class='date'>Third last</span> <span class='value'>"+data[key].builds[1]+"</span> </li>"+
                    "<li> <span class='date'>Four last</span> <span class='value'>"+data[key].builds[2]+"</span> </li>"+
                    "<li> <span class='date'>Fifth last</span> <span class='value'>"+data[key].builds[3]+"</span> </li>"+
                  "</ul>"+
                "</div>"+
                "<div class='right'>"+
                    "<h1>"+data[key].latest_build+
                      "<i id='status_"+data[key].latest_build+"' class='"+build_status+"'></i>"+
                    "</h1>"+
                "</div>"+
              "</div>"+
            "</div>"+
          "</div>";

          //CHECK IF ELEMENT EXIST AND UPDATE OTHERWISE ADD IT TO CONTAINER ELEMENT
          if($( "#"+data[key].name ).length) {
             $( "#"+data[key].name ).parent('.row').html(template);
          }else {
            $('.container .row').append(template);
          }

        });
      }
  });
};
