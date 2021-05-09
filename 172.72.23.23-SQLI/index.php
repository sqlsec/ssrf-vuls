<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM users where id='";
$sql .= $_REQUEST["id"]."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SQL 注入系列</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" type="image/png" href="./imgs/15724874583730.png">
    <link href="./attachs/animate.min.css" rel="stylesheet">
    <link href="./attachs/bootstrap.sketchy.min.css" rel="stylesheet">
    <link href="./attachs/reward.css" rel="stylesheet">
    <link href="./attachs/all.css" rel="stylesheet">
    <style>
        .wrapper {
            padding: 0 20px
        }

        .wrapper-content {
            padding: 20px
        }

        .contact-box {
            background-color: #fff;
            border: 1px solid #e7eaec;
            padding: 15px;
            margin-bottom: 20px;
            margin-right: 1px;
            margin-left: 1px;
        }

        .download-button{
            display: flex;
            justify-content: flex-end;
        }
        .version-number{
            position: absolute;
            top: -14px;
            right: -15px;
        }
        
        pre {
         white-space: pre-wrap;
         word-wrap: break-word;
        }
    </style>
    <script src="./attachs/sweetalert.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">简单 GET 型 SQL 注入</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
	    <li class="nav-item active">
                <a class="nav-link" href="https://www.sqlsec.com">国光
                <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
    </div>
    </nav>

    <div class="jumbotron">
        <h1 class="display-3">Hello, SQLI!</h1>
        <p class="lead">欢迎来到人员查询系统，请输入人员 ID 进行查询</p>
        <form class="form-inline my-12 my-lg-12 col-md-12" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="请输入 ID 查询" name="id">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <?php
        if ($row) {
            echo '<p class="lead">';
            echo '<table class="table table-hover">';
            echo '  <thead>';
            echo '      <tr>';
            echo '          <th scope="col">ID</th>';
            echo '          <th scope="col">用户名</th>';
            echo '          <th scope="col">座右铭</th>';
            echo '       </tr>';
            echo '  </thead>';
            echo '  <tbody>';
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['content']."</td>";
            echo '</tbody>';
            echo '</table>';
            echo '</p>';
        } else {
            echo '<h1>'.mysqli_error($conn) .'</h1>';
        }

        mysqli_close($conn);
    ?>
    <script src="./attachs/jquery-2.2.0.min.js"></script>
    <script src="./attachs/bootstrap.min.js"></script>
</body>
</html>
