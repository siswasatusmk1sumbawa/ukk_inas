<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web galery foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    include "layout/header.html";
    ?>

   <main class="flex-shrink" id="body">
      <h1 class="mt-5 text-light-emphasis text-center"> Welcome To Hallo Foto</h1>
      <p class="lead text-dark text-center">Silahkan login jika sudah terdaftar! <code class="small text-danger">Jika belum silahkan register,</code> pada <code class="small text-danger">halaman &gt; yang tersedia</code>.</p>
    
   </main>

   <?php 
    include "layout/footer.html";
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>