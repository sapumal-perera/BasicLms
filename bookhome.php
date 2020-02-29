<!DOCTYPE HTML>
<html>

<head>
  <title>Library System</title>
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
          <li class="selected"><a href="examples.html">Examples</a></li>
          <li><a href="page.html">A Page</a></li>
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

        <h2>Book Genres</h2>
        <p>the book geners that our library has</p>
        <table style="width:100%; border-spacing:0;">
          <tr><th>Book genre</th><th>Description</th></tr>
          <tr><td>Fantasy</td><td>Fantasy is the genre of possibility.</td></tr>
          <tr><td>Adventure</td><td>Often focuses on both the character's physical journey as well as the journey they go through as a person throughout the novel.</td></tr>
          <tr><td>Romance</td><td>Romance is the center point of the plot. The entire novel moves around the relationship, though other plot points may be present.</td></tr>
          <tr><td>Dystopian</td><td>A book genre in which the current government or society has been destroyed and the book centers around the aftermath.</td></tr>
          <tr><td>Science Fiction</td><td>Novels are those that take place in a futuristic society with advanced technology and occasionally otherworldly beings.</td></tr>
		  <tr><td>Children's Books</td><td>Any book written for an audience between the ages of 0-8 years old.</td></tr> 
        </table>
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
