<?php
error_reporting(0);
session_start();
include 'connect.php';
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XXX</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

    <script language=javascript>

        function saveScrollCoordinates() {

            document.Form1.scrollx.value = (document.all)?document.body.scrollLeft:window.pageXOffset;

            document.Form1.scrolly.value = (document.all)?document.body.scrollTop:window.pageYOffset;

        }

    </script>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>XXX </span>XXX</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout (<?php echo $_SESSION['user'] ?>) </a>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<?php include 'menu.php' ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="dashboard.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <?php
			if(isset($_POST['usr']) != "")
			{
				$usr = $_POST['usr'];
				$pass = SHA1($_POST['pass']);
				$q = "INSERT INTO login(usr, pass) VALUES('$usr', '$pass')";
				mysqli_query($con, $q);
			}
            
                   
            
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-xs-4">
                    <label for="username">Username</label>
                    <input class="form-control" id="usr" name="usr" type="text">
                </div>
                <br><br><br><br>
				<div class="col-xs-4">
                    <label for="password">Password</label>
                    <input class="form-control" id="pass" name="pass" type="text">
                </div>
                <br><br><br><br>
                <div class="col-xs-4">
                    <input type="submit" class="btn btn-default" value="Add" name="submit" id="btnAdd">
                </div>
                <br><br>
            </form>

            <br>

            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <thead>
                        <td>Username</td>
                        <td>Password</td>
						<td>Edit</td>
                        <td>Delete</td>
                    </thead>
                </tr>
                <?php
                $q = mysqli_query($con,"SELECT * FROM login");
                while($s = mysqli_fetch_array($q)) {
                    echo '<tr><tbody>';
                    echo '<td>' . $s['usr'] . '</td>';
                    echo '<td>' . $s['pass'] . '</td>';
					echo '<td><a id="edt" href="adm-edit-layanan.php?id=' . $s['id'] . '">Edit</a></td>';
                    echo '<td><a id="del" href="adm-delete-layanan.php?id=' . $s['id'] . '">Delete</a></td>';
                    echo '</tbody></tr>';
                }
                ?>
            </table>
            <br><br><br>
        </div>
    </div><!--/.row-->

</div>	<!--/.main-->

		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>

	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
