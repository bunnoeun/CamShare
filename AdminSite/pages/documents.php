
<html>
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
        <h1>Document</h1>
            <form method="post">
            <table>
                <tr>
                    <td><label>ID:</label></td>
                    <td><input type="text" name="txtid"></td>
                </tr>
                <tr>
                    <td><label>Title:</label></td>
                    <td><input type="text" name="txttitle"></td>
                </tr>
                <tr>
                    <td><label>File Text:</label></td>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                    <td><label>File Image:</label></td>
                    <td><input type="file" name="image"></td>
                </tr>
            </table>
            </form>
            <table class="tbldata">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>File Text</th>
                    <th>File Image</th>
                </tr>
                <tr>
                    <td>00001</td>
                    <td>Hello</td>
                    <td>hty.txt</td>
                    <td>ims.jpg</td>
                </tr>            
                <tr>
                    <td>2</td>
                    <td><div>Hessssssssssssssssssssssssssssssssssssssssllo</div></td>
                    <td>hty.txt</td>
                    <td>ims.jpg</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hello</td>
                    <td>hty.txt</td>
                    <td>ims.jpg</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Hello</td>
                    <td>hty.txt</td>
                    <td>ims.jpg</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Hello</td>
                    <td>hty.txt</td>
                    <td>ims.jpg</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Hello</td>
                    <td>hty.txt</td>
                    <td>ims.jpg</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>