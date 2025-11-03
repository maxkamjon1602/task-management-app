<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist/swagger-ui.css">
  <script src="https://unpkg.com/swagger-ui-dist/swagger-ui-bundle.js"></script>
  <title>OpenAPI - Task management application</title>
</head>

<body>
  <div id="swagger"></div>
  <script>
    window.ui = SwaggerUIBundle({
      url: '/openapi.yaml',
      dom_id: '#swagger',
      presets: [SwaggerUIBundle.presets.apis],
    });
  </script>
</body>
</html>
