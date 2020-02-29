<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";
$status ='';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ISBN=$_REQUEST['isbn'];
$query = "SELECT * from book where isbn='".$ISBN."'";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

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
  <div id="main"><img src="images/owl.png"  width="100" height="100" align="left">
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
        <h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['isbn']) && $_POST['title'])
{
    $ISBN=$_REQUEST['isbn'];
    $Book_title =$_REQUEST['title'];
    $Author_name = $_REQUEST['auther'];
    $Book_qty = $_REQUEST['qty'];
    $update="update book set
Book_title='".$Book_title."', Author_name='".$Author_name."',
 Book_qty='".$Book_qty."' where ISBN='".$ISBN."'";
    if ($conn->query($update) === TRUE) {
        $status = "Record Updated Successfully. </br></br>
<a href='bookview.php'>View Updated  Book Record</a>";
    } else {
        echo "Error: " . $update . "<br>" . $conn->error;
    }}
?>
<div>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<table style="width:100%; border-spacing:0;">
<p><tr><td>Book ISBN:</td><td><input type="text" name="isbn" placeholder="Enter Book ISBN" 
required value="<?php echo $row['ISBN'];?>" /></td></p>
<p><tr><td>Book Title:</td><td><input type="text" name="title" placeholder="Enter Book Title"
required value="<?php echo $row['Book_title'];?>" /></td></p>
<p><tr><td>Auther:</td><td><input type="text" name="auther" placeholder="Enter Auther's Name" 
required value="<?php echo $row['Author_name'];?>" /></td></p>
<p><tr><td>Book Qty:</td><td><input type="text" name="qty" placeholder="Enter Book qty"
required value="<?php echo $row['Book_qty'];?>" /></td></p>
<p><tr><td></td><td><input name="submit" type="submit" value="Update" /> </td></p>
</form>
<p style="color:#FF0000;"><?php echo $status;?></p>
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
