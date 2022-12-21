var UIIdleTimeout = function() {
    return {
        init: function() {
            var o;
            $("body").append(""), $.idleTimeout("#idle-timeout-dialog", "#idle-timeout-dialog .modal-content button:last", {
                idleAfter: 1,
                timeout: 3e4,
                pollingInterval: 5,
                keepAliveURL: "/keep-alive",
                serverResponseEquals: "OK",
                onTimeout: function() {
                    window.location.href = $('#base').val()+"login/logout"
                },
                onIdle: function() {
                    $("#idle-timeout-dialog").modal("show"), o = $("#idle-timeout-counter"), $("#idle-timeout-dialog-keepalive").on("click", function() {
                        $("#idle-timeout-dialog").modal("hide")
                    })
                },
                onCountdown: function(e) {
                    o.html(e)
                }
            })
        }
    }
}();
jQuery(document).ready(function() {
   //UIIdleTimeout.init()

    var logout_url = window.location.href;
    var arr = logout_url.split("/");
  
     jQuery(document).idleTimeout({
          idleTimeLimit: 60*60,       // 'No activity' time limit in seconds. 1200 = 20 Minutes
         // redirectUrl: arr[0] + "//" + arr[2] +'/courier/admin/login/logout',    // redirect to this url on timeout logout. Set to "redirectUrl: false" to disable redirect
         redirectUrl : $('#base').val()+"login/logout",
          // optional custom callback to perform before logout
          customCallback: false,     // set to false for no customCallback
          // customCallback:    function () {    // define optional custom js function
              // perform custom action before logout
          // },

          // configure which activity events to detect
          // http://www.quirksmode.org/dom/events/
          // https://developer.mozilla.org/en-US/docs/Web/Reference/Events
          activityEvents: 'click keypress scroll wheel mousewheel mousemove', // separate each event with a space

          // warning dialog box configuration
          enableDialog: true,        // set to false for logout without warning dialog
          dialogDisplayLimit: 3*60,   // time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
          dialogTitle: 'Session Expiration Warning',
          dialogText: 'Because you have been inactive, your session is about to expire.',

          // server-side session keep-alive timer
          sessionKeepAliveTimer: 600, // Ping the server at this interval in seconds. 600 = 10 Minutes
          // sessionKeepAliveTimer: false // Set to false to disable pings
        
        });
   
});
       

      // $(document).idleTimeout({
      //     idleTimeLimit: 1,       // 'No activity' time limit in seconds. 1200 = 20 Minutes
      //     redirectUrl: '/logout',    // redirect to this url on timeout logout. Set to "redirectUrl: false" to disable redirect

      //     // optional custom callback to perform before logout
      //     customCallback: false,     // set to false for no customCallback
      //     // customCallback:    function () {    // define optional custom js function
      //         // perform custom action before logout
      //     // },

      //     // configure which activity events to detect
      //     // http://www.quirksmode.org/dom/events/
      //     // https://developer.mozilla.org/en-US/docs/Web/Reference/Events
      //     activityEvents: 'click keypress scroll wheel mousewheel mousemove', // separate each event with a space

      //     // warning dialog box configuration
      //     enableDialog: true,        // set to false for logout without warning dialog
      //     dialogDisplayLimit: 10,   // time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
      //     dialogTitle: 'Session Expiration Warning',
      //     dialogText: 'Because you have been inactive, your session is about to expire.',

      //     // server-side session keep-alive timer
      //     sessionKeepAliveTimer: 600, // Ping the server at this interval in seconds. 600 = 10 Minutes
      //     // sessionKeepAliveTimer: false // Set to false to disable pings
        
      //   });



/*$.idleTimeout('#idletimeout', '#idletimeout a', {
    idleAfter: 5,
    pollingInterval: 2,
    keepAliveURL: 'keep.php',
    serverResponseEquals: 'OK',
    onTimeout: function(){
        $(this).slideUp();
        window.location = "lock-screen.html";
    },
    onIdle: function(){
        $(this).slideDown(); // show the warning bar
    },
    onCountdown: function( counter ){
        $(this).find("span").html( counter ); // update the counter
    },
    onResume: function(){
        $(this).slideUp(); // hide the warning bar
    }
});*/