<!DOCTYPE html>
<html lang="en">

<head>
  <title>JavaJam Coffee House Menu</title>
  <meta charset="utf-8">
  <style>
    body {
      font-family: Verdana, Arial, sans-serif;
      background-color: #e4d297;
    }

    #wrapper {
      background-color: #e2d2b0;
      color: #2e0000;
      margin: auto;
      width: 90%;
      min-width: 900px;
      max-width: 1280px;
      box-shadow: 6px 6px 6px;
    }

    #leftcolumn {
      float: left;
      width: 150px;
    }

    #rightcolumn {
      margin-left: 155px;
      background-color: #f5f5dc;
      color: #2e0000;
    }

    header {
      background-color: #d3b58c;
      ;
      font-size: 150%;
      padding: 10px 0;

    }

    #titleText {
      display: block;
      margin: auto;
    }

    h2 {
      color: #2e0000;
      font-family: arial, sans-serif;
      margin-top: 0;
    }

    .content {
      padding: 20px 20px 20px 20px;
    }

    #floatright {
      margin: 10px;
      float: right;
    }

    footer {
      font-size: 70%;
      text-align: center;
      clear: right;
      padding: 15px;
      background-color: #d3b58c;
      color: black;
    }

    footer a {
      color: #2e0000
    }

    nav ul {
      list-style-type: none;
    }

    nav a {
      text-decoration: none;
      font-weight: bold;
    }

    nav a:link {
      color: #7c5240;
    }

    nav a:visited {
      color: #a8886b;
    }

    nav a:active {
      color: #7c5240;
    }

    nav a:hover {
      color: #e75010;
    }

    table {
      width: 90%;
      margin: auto;
      border-spacing: 3px;
      padding-bottom: 1em;
    }

    tr:nth-of-type(odd) {
      background-color: #d2b48c;
    }

    th,
    td {
      padding: 10px;
    }

    #cheBox {
      background-color:#f5f5dc;
    }

  </style>
</head>

<body>
  <div id="wrapper">
    <header>
      <img src="resources/Caps.PNG" alt="JavaJam Coffee House" id="titleText">
      <!-- soruse is https://static3.depositphotos.com/1008154/254/i/950/depositphotos_2545988-stockafbeelding-kronkelende-weg.jpg. -->
    </header>
    <div id="leftcolumn">
    <nav>
        <ul>
          <li>
            <a href="admin_menu.php">Product Price Update</a>
          </li>
        </ul>
    </div>
    <div id="rightcolumn">
			<div class="content">
				<h2>Click to update product prices: </h2>
				<form action="NewMenu.php" method="post">
        <table class="tablecentered">
						<?php include 'items.php' ?>	
						<tr>
							<td colspan="3"><input type="submit" value="Update" class="submit-button"></td>
						</tr>
					</table>
				</form>
				
			</div>
		</div>
    <footer>
      <small>
        <i>Copyright &copy; 2018 JavaJam Coffee House
          <br>
          <a href="mailto:hongyi@han.com">hongyi@han.com</a>
        </i>

      </small>

    </footer>
  </div>
</body>

</html>