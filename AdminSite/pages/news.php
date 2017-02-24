<?php
    $link=mysqli_connect("localhost","root","","camshare","3306");


    $epr='';
    $msg='';
    if(isset($_GET['epr']))
        $epr=$_GET['epr'];
    if($epr=='save'){
        $title=$_POST['title'];
        $text=$_POST['text'];
        $image=$_POST['image'];

        $a_sql=mysqli_query($link,"insert into tblnews(ID,Title,Description,Image) VALUES ('','$title','$text','$image')");
        if($a_sql)
            header("location:news.php");
        else
            $msg='Eorror:'.mysqli_error($link);

    }
?>
<head>
    <title></title>
    <script type="text/javascript" src="../../script/jquery-min.js"></script>
    <script type="text/javascript" src="../JavaScipt/jquery.ba-hashchange.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../style/styleAdminUsers.css"/>
    <script type="text/javascript" src="../JavaScipt/script.js"></script>
</head>
<body>
<div id="layout">
    <h1>CamShare</h1>
    <div id="leftsite">
        <div class="nav">
            <p class="top-title">Main Menu</p>
            <ul>
                <li><a href="../../adminsite.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="documents.php">Documents</a></li>
                <li><a href="aboutus.php">About us</a></li>

            </ul>
        </div>

    </div>
   <div id="rightsite">
 <p class="linesHead">Uploading from Client to Server site, here!...</p>
        <div id="contents">
            <h1>News</h1>
        <form method="post" action="news.php?epr=save">
            <table>
                <tr>
                    <td><label>Title</label></td>
                      <td><input type="text" name="title" id="name"></td>
                </tr>
                <tr>
                    <td><label>Text</label></td>
                    <td><input type="text" name="text" id="text"></td>
                </tr>
                <tr>
                <td><input type="file" name="image" id="image"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="upload" name="save"></td>
                </tr>
        </table>
    </form>
         <table class="tbldata" >
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Text</th>
                <th>Image</th>
            </tr>
             <?php
                $result=mysqli_query($link,"select * from tblnews");
             while($row=mysqli_fetch_object($result)){

             ?>
             <tr>
                 <td><?php echo $row->ID?></td>
                 <td><?php echo $row->Title?></td>
                 <td><?php echo $row->Description?></td>
                 <td><?php echo $row->Image?></td>
             </tr>
             <?php } ?>
         </table>
        </div>
    </div>
</div>
</body>
</html>