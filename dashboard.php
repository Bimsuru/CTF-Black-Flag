<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="new.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="style.js"></script>

</head>
<style>
    body {
        background-color: #101010;
        background-size: cover;
        background-image: url('2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
       font-family: Arial, Helvetica, sans-serif;
    }
</style>
<style>




    .container{

        width:75%;
        opacity: 0.8;
        
    }

    #jumbo
    {
        border:1px solid #CCC;
        background-color:#101010;


    }

    .cartIcon
    {
        background-color:#999;
        padding:5px 5px 5px 5px;
        border-radius:10px;
        color:#000;

    }

    #image
    {
        background-color:#000;
        color:#fff;

    }
    #image:hover
    {
        background-color:#333;
        border:1px solid #fff;
        color:#fff;
    }

    #h4
    {
        color:#fff;

    }

    .console {

        font-family:Courier;
        color: #007500;
        background: #000000;
        border: 3px double #CCCCCC;
        padding: 10px;
    }
    th {
      font-family: Courier;
      background-color: #000000;
        color: white;
        font-size: 20px;
    }
    .btn {
      background-color: #000000;
      color: #ffffff;
    }
    
 
</style>
<body>

<nav class="navbar navbar-inverse navbar-static-top">


    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                	<li class="active"><a href="dashboard.php">Dashboard</a></li>
                    
                </ul>
            </div>
        </div>
</nav>

<div class="container">
<div class="well"><h1><b> Black Flag Dashboard </b></h1>
	<table class="table">
    <thead>
      <tr>
        <th>Level</th>
        <th>Flag</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level1.html';">Level 1</button></td>
        <td>
        	<form class="form-inline" action="validate.php" method="POST">
			  <div class="form-group">
                <input type=hidden name="level_id" value=1>
                <input type=hidden name="level_code" value="lvl01">
			    <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td><?php
            $cookie_name1="9b578b2948aae985ddfc1b49ef176ff47843af42";
            if(isset($_COOKIE[$cookie_name1])) {
              print 'Captured';
            } else {
              print 'Not Captured';
            }
        ?></td>
      </tr>      
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level2.html';">Level 2</button></td>
        <td>
        	<form class="form-inline" action="validate.php" method="POST">
			  <div class="form-group">
                <input type=hidden name="level_id" value=2>
                <input type=hidden name="level_code" value="lvl02">
			    <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td><?php
            $cookie_name2="bc412778cbcc021cfd479f9e9930298beb25d756";
            if(isset($_COOKIE[$cookie_name2])) {
              print 'Captured';
            } else {
              print 'Not Captured';
            }
        ?></td>
      </tr>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level3.html';">Level 3</button></td>
        <td>
            <form class="form-inline" action="validate.php" method="POST">
              <div class="form-group">
                <input type=hidden name="level_id" value=3>
                <input type=hidden name="level_code" value="lvl03">
                <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form> 
        </td>
        <td><?php
            $cookie_name3="705755fb3e17451653c7825caec1fe9de8bec815";
            if(isset($_COOKIE[$cookie_name3])) {
              print 'Captured';
            } else {
              print 'Not Captured';
            }
        ?></td>
      </tr>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level4.html';">Level 4</button></td>
        <td>
            <form class="form-inline" action="validate.php" method="POST">
              <div class="form-group">
                <input type=hidden name="level_id" value=4>
                <input type=hidden name="level_code" value="lvl04">
                <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form> 
        </td>
        <td><?php
            $cookie_name4="4fdfd3963909a8d869663f1fd6cf78a558ec9912";
            if(isset($_COOKIE[$cookie_name4])) {
              print 'Captured';
            } else {
              print 'Not Captured';
            }
        ?></td>
      </tr>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level5.html';">Level 5</button></td>
        <td>
            <form class="form-inline" action="validate.php" method="POST">
              <div class="form-group">
                <input type=hidden name="level_id" value=5>
                <input type=hidden name="level_code" value="lvl05">
                <input class="form-control" type="text" placeholder="acbf{**************}"class="form" name="flag_unvalidated">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form> 
        </td>
        <td><?php
            $cookie_name5="a1bc2bda417242d32a12ec976c80400454c26ee3";
            if(isset($_COOKIE[$cookie_name5])) {
              print 'Captured';
            } else {
              print 'Not Captured';
            }
        ?></td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 6</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" placeholder="acbf{**************}" class="form" id="email">
			  	<button class="btn btn-default" type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
          <td><?php
              $cookie_name6="";
              if(isset($_COOKIE[$cookie_name6])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level7.html';">Level 7</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" placeholder="acbf{**************}" class="form" id="email">
			  	<button class="btn btn-default" type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
          <td><?php
              $cookie_name7="";
              if(isset($_COOKIE[$cookie_name7])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level8.html';">Level 8</button></td>
        <td>
        	<form class="form-inline" action="validate.php" method="POST">
                <div class="form-group">
                    <input type=hidden name="level_id" value=8>
                    <input type=hidden name="level_code" value="lvl08">
                    <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
			</form> 
        </td>
          <td><?php
              $cookie_name8="690199ec82648a97b512499c2b2c05cb36fda996";
              if(isset($_COOKIE[$cookie_name8])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level9.html';">Level 9</button></td>
        <td>
        	<form class="form-inline" action="validate.php" method="POST">
                <div class="form-group">
                    <input type=hidden name="level_id" value=9>
                    <input type=hidden name="level_code" value="lvl09">
                    <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
			</form> 
        </td>
          <td><?php
              $cookie_name9="f704ff9ceaf3a70e323ece3d4004edc413ba7626";
              if(isset($_COOKIE[$cookie_name9])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level10.html';">Level 10</button></td>
        <td>
            <form class="form-inline" action="validate.php" method="POST">

                <div class="form-group">
                <input type=hidden name="level_id" value=10>
                <input type=hidden name="level_code" value="lvl10">
                <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form> 
        </td>
        <td><?php
            $cookie_name10="327ab1ebb4263a6d20ef5897949b170bc9297e9b";
            if(isset($_COOKIE[$cookie_name10])) {
              print 'Captured';
            } else {
              print 'Not Captured';
            }
        ?></td>

      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='http://localhost/ctf/level11/';">Level 11</button></td>
        <td>
            <form class="form-inline" action="validate.php" method="POST">
                <div class="form-group">
                    <input type=hidden name="level_id" value=11>
                    <input type=hidden name="level_code" value="lvl11">
                    <input class="form-control" type="text" placeholder="acbf{**************}" class="form" name="flag_unvalidated">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </td>
          <td><?php
              $cookie_name11="b0606fb5f65b5b0be6a9834c73218301b87236de";
              if(isset($_COOKIE[$cookie_name11])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level2.html';">Level 12</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" placeholder="acbf{**************}" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
          <td><?php
              $cookie_name5="a1bc2bda417242d32a12ec976c80400454c26ee3";
              if(isset($_COOKIE[$cookie_name5])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level3.html';">Level 13</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" placeholder="acbf{**************}" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
          <td><?php
              $cookie_name5="a1bc2bda417242d32a12ec976c80400454c26ee3";
              if(isset($_COOKIE[$cookie_name5])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level4.html';">Level 14</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" placeholder="acbf{**************}" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
          <td><?php
              $cookie_name5="a1bc2bda417242d32a12ec976c80400454c26ee3";
              if(isset($_COOKIE[$cookie_name5])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level5.html';">Level 15</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" placeholder="acbf{**************}" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
          <td><?php
              $cookie_name5="a1bc2bda417242d32a12ec976c80400454c26ee3";
              if(isset($_COOKIE[$cookie_name5])) {
                  print 'Captured';
              } else {
                  print 'Not Captured';
              }
              ?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

</body>
</html>
