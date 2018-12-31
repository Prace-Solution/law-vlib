//  var ul = $('#main-content .inner-wrapper');
//  ul.html("<input type='text' id='in' placeholder='Enter somthing there'>");
// ul.on('click',function(event) {
//
//   console.log(event);
//    console.log(event.currentTarget.baseURI);
//  });

//  ($('#in')).on("keyup",function(event) {

//   console.log(event);
//  });

///////////////////////////////////////////////////////////////////

if (($("#admin-dashboard"))) {

    ($("#admin-dashboard")).on("click", function(event) {

        var material = "admin/admin.dashboard-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your dashboard-ui!");

            })
            .always(function() {
                //  alert( "complete" );
            });;


    });
    ($("#admin-course-add")).on("click", function(event) {

        var material = "admin/admin.course-add-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your course-add-ui!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-course-view")).on("click", function(event) {

        var material = "admin/admin.course-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your dashboard!");

            })
            .always(function() {
                //  alert( "complete" );
            });;


    });
    ($("#admin-course-material-upload")).on("click", function(event) {

        var material = "admin/admin.course-material-upload-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your course-material-upload-ui!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });
    ($("#admin-course-material-view")).on("click", function(event) {

        var material = "admin/admin.course-material-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your course-material-view!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-course-resource-material-upload-ui")).on("click", function(event) {

        var material = "admin/admin.course-resource-material-upload-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your course-resource-upload!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-course-resource-material-view")).on("click", function(event) {

        var material = "admin/admin.course-resource-material-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your course-resource-material-view!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-student-add-ui")).on("click", function(event) {

        var material = "admin/admin.student-add-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your admin-student-add-ui!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-student-undergrad-view")).on("click", function(event) {

        var material = "admin/admin.student-undergrad-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your admin-student-undergrad-view!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });



    ($("#admin-student-postgrad-view")).on("click", function(event) {

        var material = "admin/admin.student-postgrad-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your admin-student-postgrad-view!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-lecturer-view")).on("click", function(event) {

        var material = "admin/admin.lecturer-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your admin-lecturer-view!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-lecturer-add-ui")).on("click ", function(event) {

        var material = "admin/admin.lecturer-add-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your lecturer-add-ui!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });


    ($("#admin-department-add")).on("click", function(event) {

        var material = "admin/admin.department-add-ui";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your department-add-ui!");

            })
            .always(function() {
                //  alert( "complete" );
            });


    });

    ($("#admin-department-view")).on("click", function(event) {

        var material = "admin/admin.department-view";
        //var data  = {material:material};
        jQuery.ajax({
                url: '/view/' + material,
                type: 'GET',
                //  data: data,
                cache: false,
                //  dataType: "json",
                success: function(info) {
                    //$("inner-wrapper").css("cursor","default");

                    $("#inner-wrapper").html(info);
                    console.log(info);
                },


            }).fail(function(error) {
                console.log(error);
                alert("Sorry, we were unable to load your department-view!");

            })
            .always(function() {
                //  alert( "complete" );
            });;


    });


    


    //////////////////////////////////////////////////////////////

    ($("#admin-dashboard")).click();

    /////////////////////////////////////////////////////////////
}