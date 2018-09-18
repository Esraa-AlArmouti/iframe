<!DOCTYPE html>
<html>
<head>
  <title>main page</title>
</head>
  <body>
    <div>
      main page
    </div>
    <iframe src="http://127.0.0.1:8887/localiframe.html" id="localIframe"></iframe>
    <div id="message"></div>


    <script>

      window.addEventListener("message", receiveMessage);

      function receiveMessage(event)
      {
        // Do we trust the sender of this message?
        if (event.origin !== "https://iframedomains.herokuapp.com/"){
          return;
        }
        else{
          message = "I got " + evt.data + " from " + evt.origin;
        }

      document.getElementById('message').innerHTML = message;
      }

    </script>



    <!--<script>
    window.onload = function(){
        window.postMessage("post message here",
            "127.0.0.1:8887/main.html");

    }
    </script>-->
  </body>
</html>
