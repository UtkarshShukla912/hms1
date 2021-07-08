<!DOCTYPE html>


<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="Home.css"/>
<link rel="stylesheet" type="text/css" href="dhtmlxcalendar.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<script src="dhtmlxcalendar.js"></script>
	
<style>
		#calendar,
		#calendar2,
		 	
</style>
	<script>
		var myCalendar;
		function doOnLoad() 
			{
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2",]);
			}
	</script>
</head>
<body onload="doOnLoad()", style="color: rgb(14, 10, 248);">
<div id="holder"> <img src="https://upload.wikimedia.org/wikipedia/en/b/b8/Hotel_Plaza_Grandelogo.jpg" width="200px" height="100px",/></a>
	 <div id="header">
     
	<ul>
    	<li><a href="login.html">Login</a></li>
    	<li><a href="overview.html">Overview</a></li>
    	<li><a href="Restaurant.html">Restaurant</a></li>
    	<li><a href="book.html">Booking</a></li>
        <li><a href="HOME.html">Home</a></li>
    	</ul>
    </div><!--header -->
	<br> 
    <div id="ab">
    <div id="check">
    <br>
	<form action="check.php" method="post">
		<div style="position:relative;height:80px;">
		<label for="in">Check in:</label> &nbsp;&nbsp;&nbsp;&nbsp;
            		<input id="calendar" name="in" placeholder="2015-06-02" required="" type="text"> <br><br>
		
		<label for="in">Check out:</label> &nbsp;&nbsp;
            		<input id="calendar2" name="out" placeholder="2015-06-05" required="" type="text"> <br><br>
		
		</div>
			Room Type:
                <select name="room">
                    <option value="A/C">A/C</option>
        			<option value="Non-A/C">Non-A/C</option>
                </select>
                <select name="type">
                    <option value="single">Single</option>
					<option value="double">Double</option>
                    <option value="three">Three</option>
                </select>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="submit" value="submit" />
	<input type="reset" name="reset" value="Reset" />
</form>
   </div><!--chack -->
   &nbsp;
   <div id="chat">
    	<form action="" method="post">
				<label for="in">Chat</label> 
					<input id="chat" name="chat" placeholder="message" required=""> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="submit" value="submit" />
				</form>
    </div><!--chat-->
	<br>
	<br>
    <div id="fd"> 
				<form action="feedback.php" method="post">
				<label for="in">Feedback</label> 
					<input id="fd" name="feed" placeholder="Type message" required=""> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="submit" value="submit" />
				</form>
	</div><!--fd-->
	</div><!--ab-->
        <br clear="all"/>
 	<div id="ac">
    	<h1>A/C</h1>
    		<div id="a">
            <br><br><br><br>
        		&nbsp;&nbsp;	
           		Single Rs.2000
          	 	<br>&nbsp;&nbsp;&nbsp;
                <a href="overview.html"><input type="submit" value="View"></a>
           	<a href="book.html"><input type="submit" value="Booking"></a>
        	</div><!--a-->
        	<div id="b">
          		<br><br><br><br>
           		&nbsp;&nbsp;&nbsp;
				Double Rs.3000
           		 <br>&nbsp;&nbsp;&nbsp;
                <a href="overview.html"><input type="submit" value="View"></a>
           		<a href="book.html"><input type="submit" value="Booking"></a>
        	</div><!--b-->
        	<div id="c">
        		<br><br><br><br>
                &nbsp;&nbsp;
                Three Rs.5000
                <br>&nbsp;&nbsp;&nbsp;
               <a href="overview.html"><input type="submit" value="View"></a>
               <a href="book.html"><input type="submit" value="Booking"></a>	
        	</div><!--c-->
          </div><!--ac-->
   
    <div id="offer">
    	<h1><center>Special Offers</center> </h1>
        	<div id="a1"><p>&nbsp;</p>
            <br><br>
      			  Single Bed<br>
      			  Three Booking<br>For <b>5</b>% discount
    		</div><!--a1-->
            <div id="b1"><p>&nbsp;</p><br>
           <br>
      			  Double Bed<br>
      			  Three Booking<br> For <b>10</b>% discount
    		</div><!--b1-->
            <div id="c1"><p>&nbsp;</p><br>
            <br>
      			  Three Bed<br>
      			  Three Booking<br> For <b>15</b>% discount
    		</div><!--c1-->
    </div><!--offer-->
    <div id="nonac">
    	<h1>Non-A/C</h1>
        	<div id="a2">
            	&nbsp;<p>&nbsp;</p>
        		&nbsp;&nbsp;	
           		Single Rs.1000
          	 	<br>&nbsp;&nbsp;&nbsp;
                <a href="overview.html"><input type="submit" value="View"></a>
           		<a href="book.html"><input type="submit" value="Booking"></a>	
        	</div><!--a2-->
        	<div id="b2">
          		&nbsp;<p>&nbsp;</p>
                &nbsp;&nbsp;
				Double Rs.2000
           		 <br>&nbsp;&nbsp;&nbsp;
                <a href="overview.html"><input type="submit" value="View"></a>
           		 <a href="book.html"><input type="submit" value="Booking"></a>
        	</div><!--b2-->
        	<div id="c2">
        	&nbsp;<p>&nbsp;</p>
                &nbsp;&nbsp;
                Three Rs.3500
                <br>&nbsp;&nbsp;&nbsp;
                <a href="overview.html"><input type="submit" value="View"></a>
                <a href="book.html"><input type="submit" value="Booking"></a>	
        	</div><!--c2-->
    </div><!--nonac-->
	
</div><!--holder -->
</body>
</html>
