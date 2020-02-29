
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
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search Books</h3>
            <form method="post" action="#" id="search_form">
              <p>
                  <a href="bookSearch.php"> <img name="search"  type="image" style="width: 50px; height: 50px; border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" /></a>
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Book No</strong></th>
<th><strong>reserve_id</strong></th>
<th><strong>Book ISBN</strong></th>
<th><strong>Member ID</strong></th>
<th><strong>Reserve Date </strong></th>
</tr>
</thead>
<tbody>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$count=1;
$sel_query="Select * from bookReserve ORDER BY reserve_id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["reserve_id"]; ?></td>
<td align="center"><?php echo $row["ISBN"]; ?></td>
<td align="center"><?php echo $row["reader_id"]; ?>
    <td align="center"><?php echo $row["return_date"]; ?></td>
</tr>
<?php $count++; } ?>
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
