<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>功能接口</title>
    <script src="./attachs/sweetalert.min.js"></script>
    <link href="./attachs/bootstrap.sketchy.min.css" rel="stylesheet">
</head>
<body>
    <?php
        header("Content-type: text/html;charset=utf-8");
        error_reporting(0);
        $res = FALSE;
        if (isset($_POST['ip']) && $_POST['ip']) {
            $cmd = "ping -c 4 {$_POST['ip']}";
            exec($cmd, $res);
        }
    ?>

    <div class="container">
    <legend>网络测试功能接口</legend>
        <div class="form-group">
            <form action="#" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="ip" name="ip" placeholder="请输入 IP 地址">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Ping</button>
                </div>
            </div>
                
            </form>
        </div>
    
        <?php
        if ($res) {
            echo "<pre>";
            print_r($res);
            echo "</pre>";
        }
        ?>
    </div>
</body>
</html>