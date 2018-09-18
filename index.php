<!DOCTYPE html>
<html>
<head>
  <title>inner iframe</title>
</head>
  <body>
    <div>
      inner iframe
    </div>

    <script>
    window.onload = function(){
        window.postMessage("post message here",
            "http://127.0.0.1:8887/main.html");

    }
    </script>
  </body>
</html>
