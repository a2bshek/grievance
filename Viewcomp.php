<?php
    mysql_connect("*****","*****","*****");
    mysql_select_db("epiz_28433216_raisemyvoice")
?>
<!DOCTYPE HTML>
<HTML lang="en">
	<HEAD>
		<meta charset="UTF-8">
		<title>View Complaints</title>
		<link rel="stylesheet" href="css/Raise.css" type="text/css" />
        	<link rel="stylesheet" href="css/pagination.css" type="text/css" />
        	<link rel = "icon" href = "img/like.png" type = "image/x-icon" />
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	</HEAD>
	<BODY>
		<table class="a">
			<tr>
			    <td height="40" align="center">
				    <img alt="" src="img/logo.png" width="250px" height="200px" align="absmiddle">
                </td>
            </tr>
		</table>
		<div class="topnav">
			<a href="Viewcomp.php" class="active">View Complaints</a>
			<a href="Filecomp.php">File Complaint</a>
			<a href="Index.php">Home</a>
		</div>
    	<table cellpadding="0px" class="a">
		<tr><td style="text-align: center; font-family: sans-serif; font-size: 15px; color: #000000;">
			<b>Raise My Voice is the platform to raise your voice against unjust.<br>This is the place where your problems are solved.
			<br>Solution for the cause of revolt.</b><br>
			</td></tr>
		</table>
        <h1 colspan="100px" class="a">
        <br>View Complaints<br>&emsp;</h1>

        <table width="70%" align="center" bgcolor="" cellpadding="3%" cellspacing="3%" border="">

            <?php 
                include("backend/function.php");
                $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                $limit = 1; //Number of displays
                $startpoint = ($page * $limit) - $limit;
                $statement = "complaints order by user_id asc"; //you have to pass your query over here

                $res=mysql_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
                while($row=mysql_fetch_array($res))
                {
                    echo "  <thead class=' text-primary'>
                                <th>Complaint ID</th>
                                <th>Date</th>
                                <th>Complaint To</th>
                                <th>Complaint</th>
                                <th>Upvote</th>
                            </thead>";
                    
                    echo "<tbody align='center'><td>";
                    echo $row["user_id"];
                    echo"</td><td>";
                    echo $row["date"];
                    echo "</td><td>";
                    echo $row["dep"];
                    echo "</td><td>";
                    echo $row["complaint"];

                    echo "<form method='POST' action = 'like.php'><input type=hidden id= 'user_id' value='";
                    echo $row["user_id"];
                    echo "' />";
                    
                    echo "</td><td>
                        <center>
                            <a><i onclick='upvote()' id='Upvote' cursor:'pointer' value='change' type='submit'>
                            
                            <img src='img/unlike.png' height='50px' width='80px' id='img'>
                            
                            <br><b><span id='addlike'>";

                            echo $row["likes"];
                            echo "</span></b> Upvotes</i></a></form>
                        </center></td></tr></tbody>";
                }
            ?>
        </table>
        <script type="text/javascript">
            function upvote()
            {
                var likes = document.getElementById('addlike').innerHTML;
                
                var Image_Id = document.getElementById('img');
                if (Image_Id.src.match("img/unlike.png")) 
                {
                    Image_Id.src = "img/like.png";
                    likes++;
                    
                    $(document).ready(function()
                    {
                        $('#Upvote').click(function()
                        {
                            $.ajax
                            ({
                                type:'POST', 
                                url:'backend/like.php', 
                                data:
                                {
                                    user_id:$('#user_id').val(), 
                                }
                            });
                        });
                    });
                }
                else 
                {
                    Image_Id.src = "img/unlike.png";
                    likes--;

                    $(document).ready(function()
                    {
                        $('#Upvote').click(function()
                        {
                            $.ajax
                            ({
                                type:'POST', 
                                url:'backend/unlike.php', 
                                data:
                                {
                                    user_id:$('#user_id').val(),
                                }
                            });
                        });
                    });
                    
                }
                document.getElementById('addlike').innerHTML = likes;
            }
        </script>
            
        <br><br>
        <?php
            echo "<div class=pagingg><ul>";
            echo pagination($statement,$limit,$page);
            echo "</ul></div>";
        ?>
    </body>
</html>
