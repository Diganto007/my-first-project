<?php
require 'config.php';


if(isset($_POST['save'])){
    
    //echo "Good";
    
  $urlname = $_POST['urlname'];
  $url = $_POST['url'];
  $target = $_POST['target'];
  $status = $_POST['status'];
  
    $insert = R::dispense('urlinfo');
    $insert->urlname = $urlname;
    $insert->url = $url;
    $insert->target = $target;
    $insert->status = $status;
        
        
    R::store($insert);
    
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Startup</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Startup File!</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                    <form action="" method="post">
                        <input type="text" name="urlname" class="form-control" placeholder="Url Name"><br>
                        <input type="text" name="url" class="form-control" placeholder="Url"><br>
                        <input type="text" name="target" class="form-control" placeholder="Target"><br>
                        <input type="text" name="status"  class="form-control" placeholder="Status"><br>
                        <input type="submit" name="save" value="Save"  class="btn btn-primary form-control"><br>
                    </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Url Name</th>
      <th scope="col">Url</th>
      <th scope="col">Target</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $findall = R::findAll('urlinfo');

        
        foreach($findall as $row)
        {
            
        ?>
    <tr>
      <th scope="row"><?php echo $row->urlname; ?></th>
      <td>
      <a href="<?php echo $row->url; ?>" target="<?php echo $row->target; ?>"><?php echo $row->url; ?></a>
      
      </td>
      <td><?php echo $row->target; ?></td>
      <td><?php echo $row->status; ?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>