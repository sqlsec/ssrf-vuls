<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <link href="./attachs/bootstrap.sketchy.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h1>用户登录</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">用户名</label>
                <input type="text" class="form-control" id="username">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密码</label>
                <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary" id="password" onclick="doLogin()">登录</button>
        <br>
        <h2>
        </h2>
        </div>
    </div>
</body>
<script src="./attachs/jquery-2.2.4.min.js" type="text/javascript"></script>
<script type='text/javascript'> 
function doLogin(){
	var username = $("#username").val();
	var password = $("#password").val();
	if(username == "" || password == ""){
		alert("用户名或密码不为空");
		return;
	}
	
	var data = "<user><username>" + username + "</username><password>" + password + "</password></user>"; 
    $.ajax({
        type: "POST",
        url: "doLogin.php",
        contentType: "application/xml;charset=utf-8",
        data: data,
        dataType: "xml",
        anysc: false,
        success: function (result) {
        	var code = result.getElementsByTagName("code")[0].childNodes[0].nodeValue;
        	var msg = result.getElementsByTagName("msg")[0].childNodes[0].nodeValue;
        	if(code == "0"){
                swal("登录失败", "", "error");
        	}else if(code == "1"){
                swal("登录成功", "", "success");
        	}else{
                swal("系统错误", "", "success");
        	}
        },
    }); 
}
</script>
<script src="attachs/sweetalert.min.js"></script>
</html>