<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
  </head>
  <body>
    <canvas class="webgl">
    </canvas>
    <script type="importmap">
  {
    "imports": {
      "three": "https://unpkg.com/three@<version>/build/three.module.js",
      "three/addons/": "https://unpkg.com/three@"v0.149.0"/examples/jsm/"
    }
  }
</script>
    <script type="module" src="/main.js"></script>
  </body>
</html>
