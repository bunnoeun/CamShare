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
            <h1>About us</h1>
            <form>
                <table>
                    <tr>
                        <td><label>Title:</label></td>
                        <td><input type="text" name="title"id="title" placeholder="Title of description"></td>
                    </tr>
                    <tr>
                        <td><label>Text of our group:</label></td>
                        <td><input type="text" name="desc" id="desc" placeholder="description about us!"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="file" name="file" value="image"/> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="button" name="upload" value="upload" id="upload" >
                            <input type="button" name="edit" value="edit" id="edit" >
                        </td>
                    </tr>
                </table>
                <table class="tbldata">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr><tr>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>

                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>