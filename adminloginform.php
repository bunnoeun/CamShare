<html>
<head>
    <title>Administrator</title>
    <style>
        #layout{margin: 0 auto; width: 600px;height: 400px;background-color: #8BC34A;}
        h1{color:blue; margin-top: 70px;}
        label.field{color: black;font-size: 19px;}
        #image{width: 200px; height: 200px;float: left; margin-top: 100px;}
        #form{width: 400px;height: 400px; float: right;}
        input{margin-left: 40px;width:250px; height: 30px;padding: 5px;margin: 10px; border-radius: 6px 0px 6px;}
        #submit{width: 80px;height: 30px; background-color: blue;color: white;
            margin-left: 265px;margin-top: 10px;
            font-weight: 900;

        }
        input#submit:hover{
            background-color: #123E97;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="layout">
    <form action="data.php" method="post">
        <div id="image">
            <img src="image/logo-login.png" width="180px" height="180px"><br/>
        </div>
        <div id="form">
            <h1>Admin Form</h1>
            <table>
                <tr>
                    <td><label class="field">Username:</label></td>
                    <td><input type="text" name="txtName" id="name" placeholder="Please input there."><br/></td>
                </tr>
                <tr>
                    <td><label class="field">Password:</label></td>
                    <td> <input type="password" name="txtPassword" id="pass" placeholder="Please input there."><br/></td>
                </tr>
            </table>
            <input type="SUBMIT" name="submit" value="submit" id="submit">
        </div>
    </form>
</div>
</body>
</html>