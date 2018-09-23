<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>

  <p>another iframe</p>
  <script>
    window.postMessage({source: "dfp"}, "*");
  </script>

</body>
</html>