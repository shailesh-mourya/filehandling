<!DOCTYPE html>
<html lang="en">
  <head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
    <div class="container my-5">
        <div class="row">
        
      <?php 
      include('config.php');
        $sql="SELECT * FROM `products`;";
        $result=mysqli_query($conn,$sql);
       
        while($row=mysqli_fetch_assoc($result)){ 
          
?>

<div class="col-lg-4">
            <div class="card">
              <img class="card-img-top" src="products/<?php echo "{$row['image']}"; ?>" alt="Title" />
              <div class="card-body">
                <h4 class="card-title"><?php echo "{$row['product_name']}"; ?></h4>
                <p class="card-text"><?php echo "{$row['price']}"; ?></p>
                <p class="card-text"><?php echo "{$row['sell_price']}"; ?></p>
                
              </div>
            </div>
            </div>

<?php
         } ?>

        
        </div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
