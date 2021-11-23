<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MultiView</title>
  </head>
  <body>
    <div class='container'>
      <div class='row'>
<?php
        $i = 1;
        $nums = $_GET['views'];
        while($i <= $nums) {
          echo "<div class='col-sm'>
          <h2><span id='header{$i}'>Student {$i}</span> 
            <button class='btn btn-sm btn-primary'
               id='btnLoad{$i}' onClick='loadFrame({$i})'>Load</button>
            <button class='btn btn-sm btn-warning' 
	       id='btnReset{$i}' onClick='resetFrame({$i})'
               disabled>Reset</button>
            <button class='btn btn-sm btn-success' 
	       id='btnOpen{$i}' onClick='openFrame({$i})'
               disabled>Open</button>
          </h2>
          <div style='width:400px;height:300px'>
          <iframe id='inlineFrame{$i}'
            title='Inline Frame Placeholder'
            style='transform:scale(0.5);transform-origin:0 0;'
            width='800' height='600' src='./url-form.html'>
          </iframe>
          </div>
	</div>";
        $i++;
      }
?>
      </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>

