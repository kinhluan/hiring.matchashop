<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MatchaShop.vn tuyển dụng - MatchaShop.vn</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">


        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php#">MatchaShop.vn</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php#apply"><i class="fa fa-upload"></i> Nộp đơn</a></li>
                        <li><a href="index.php#about"><i class="fa fa-shopping-cart"></i> Về chúng tôi</a></li>
                        <li><a href="index.php#contact"><i class="fa fa-comment"></i> Liên hệ</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="starter-template">
                <section id="result">
                    <h3><i class="fa fa-exclamation-triangle"></i> Thông báo</h3>
                    <div class="form-default">
                        <?php
                        $data_post = array();
                        $data_post = $_POST;

                        if (empty($data_post)) {
                            echo '<p class="note">';
                            echo '<strong>Trang này không tồn tại</strong>';
                            echo '</p>';
                            echo '<div class="btn-group-vertical" role="group" aria-label="">';
                            echo '<a class="btn btn-danger" href="index.php">Quay trở về trang đăng ký!</a>';
                            echo '</div>';
                        } else {
                            if (empty($data_post["email"])) {
                                echo '<p class="note">';
                                echo 'Bạn cần phải nhập địa chỉ email để nhận thông báo của chúng tôi';
                                echo '</p>';
                                echo '<div class="btn-group-vertical" role="group" aria-label="">';
                                echo '<a class="btn btn-danger" href="index.php#follow">Quay trở về trang đăng ký!</a>';
                                echo '</div>';
                            } else {
                                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                                } else {
                                    $ip = $_SERVER['REMOTE_ADDR'];
                                }
                                $file = fopen("data/follow.txt", 'a+');
                                $string = $ip . "," . $data_post["email"] . "," . date('Y-m-d H:i:s') . "\n";
                                fwrite($file, $string);
                                fclose($file);
                                echo '<p class="note">';
                                echo 'Bạn đã đăng ký nhận thông báo của chúng tôi thành công!';
                                echo '</p>';
                                echo '<div class="btn-group-vertical" role="group" aria-label="">';
                                echo '<a class="btn btn-danger" href="index.php">Quay trở về trang đăng ký!</a>';
                                echo '</div>';
                                echo '<br>';
                                echo '<br>';
                                echo '<div class="btn-group-vertical" role="group" aria-label="">';
                                echo '<a class="btn btn-success" href="http://matchashop.vn" target="_blank">Tìm hiểu thêm về MatchaShop.vn</a>';
                                echo '</div>';
                                echo '<br>';
                                echo '<br>';
                                echo '<div class="btn-group-vertical" role="group" aria-label="">';
                                echo '<a class="btn btn-info" href="https://www.facebook.com/matchashop.vn" target="_blank">Vào Facebook theo dõi thông tin</a>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>    
                </section>
            </div>
        </div><!-- /.container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52301871-4', 'auto');
        ga('send', 'pageview');

    </script>
</html>  