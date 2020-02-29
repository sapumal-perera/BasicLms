
<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_banner - a page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />

</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">simple<span class="logo_colour">style_banner</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li class="selected"><a href="page.html">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        
<div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>library books.</h3>
            <ul>
             <a href="bookhome.html">Home</a><p><br>
             <a href="bookadd.html">New Books</a><p>
             <a href="bookview.html">View Books</a><p>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>Search Your Book</h1>

          <?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "lms";
          $count =0;
          $status  =false;
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          if(isset($_POST['title'])){
          $Book_title =$_POST['title'];
          $sel_query="Select * from book  where Book_title LIKE '%$Book_title%' ORDER BY isbn desc;";
          $result = mysqli_query($conn,$sel_query);
          if ($conn->query($sel_query)) {
           //  echo '<script>window.alert("found");</script>';
              $status = true;

          } else {
              $status = false;
              //  echo '<script>window.alert("not found");</script>';
          }
          if(mysqli_fetch_assoc($result)){
echo'     <table width="100%" border="1" style="border-collapse:collapse;">
                <thead>
                <tr>
                    <th><strong>Book No</strong></th>
                    <th><strong>Book ISBN</strong></th>
                    <th><strong>Book Title</strong></th>
                    <th><strong>Auther</strong></th>
                    <th><strong>Book Qty</strong></th>
                </tr>
                </thead>
                <tbody>';
 while($row = mysqli_fetch_assoc($result)) { ?>
                  <tr><td align="center"><?php echo $count; ?></td>
                      <td align="center"><?php echo $row["ISBN"]; ?></td>
                      <td align="center"><?php echo $row["Book_title"]; ?></td>
                      <td align="center"><?php echo $row["Author_name"]; ?></td>
                      <td align="center"><?php echo $row["Book_qty"]; ?></td>
                  </tr>
                  <?php $count++; }
              echo    '</tbody>
            </table>';
          } else { echo '<h3>No Books found for that title</h3>';}
          } ?>
		<table style="width:100%; border-spacing:0;">
                  <form name="form" method="post" action=""> 
                  <input type="hidden" name="new" value="1" />
                 <tr><td>Enter Book Title:</td><td><input type="text" name="title" placeholder="Enter Book Title" required /></td>
                  <tr><td></td><td><input name="submit" type="submit" value="Search" /></td>
                </form>

              <br><br>
</tbody>
</table>
      </div>
    </div>
</div>
<div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_banner | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">HTML5 Web Templates</a></p>
    </div>
  </div>
</body>
</html>
