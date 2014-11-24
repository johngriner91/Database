<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
  function runMyFunction() {
    $db_host = 'mysql.cs.mtsu.edu';
    $db_user = 'jmg6m';
    $db_pwd = 'From1248';

    $database = 'jmg6m';

    if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

    if (!mysql_select_db($database))
    die("Can't select database");

    // sending query
    $result = mysql_query("SELECT Ssn, Salary FROM EMPLOYEE");
    if (!$result) {
      die("Query to show fields from table failed");
    }

    $fields_num = mysql_num_fields($result);

    echo "<h1>Table: EMPLOYEE</h1>";
    echo "<table border='1'><tr>";
      // printing table headers
      for($i=0; $i<$fields_num; $i++)
      {
        $field = mysql_fetch_field($result);
        echo "<td>{$field->name}</td>";
      }
      echo "</tr>\n";
      // printing table rows
      while($row = mysql_fetch_row($result))
      {
        echo "<tr>";

          // $row is array... foreach( .. ) puts every element
          // of $row to $cell variable
          foreach($row as $cell)
          echo "<td>$cell</td>";

          echo "</tr>\n";
        }
        mysql_free_result($result);
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Project Homepage</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-static">
     <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html" target="ext"><b>Schneider Electric</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      </a>
    </div>
    </div>
  </nav><!-- /.navbar -->

   <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="intro.gif" style="width:400px; height=300px" alt="">
    </header>

  <!-- Begin Body -->
  <div class="container text-center">
  <hr><br>
    <form role="form">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please enter your username">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Keep me logged in</label>
      </div>
  <button type="submit" onclick= class="btn btn-default">Submit</button><br>
  <a href='index.php?hello=true'>Click Here to test db connection</a>
</form>
    <hr>
        <!-- /.container -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; YoMamma 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
