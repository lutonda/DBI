<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en">
<head>
<?php include_once('views/assets/api/header.php');?>
    <script language="javascript">
        $(document).ready(function(){

            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this imaginary file!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it'
            }).then(function() {
                swal(
                    'Deleted!',
                    'Your imaginary file has been deleted.',
                    'success'
                )
            }, function(dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                if (dismiss === 'cancel') {
                    swal(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        })
    </script>
</head>
  <body>


  <?php include_once('views/assets/api/head.php');?>
  <?php include_once('controllers/biController.php')?>
    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="http://getbootstrap.com/examples/sticky-footer">the default sticky footer</a> minus the navbar.</p>
        <hr>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>
            <!-- Table -->
            <table class="table">
                <?php
                $cs = new \controller\biController();
                $bis=$cs->mostrar();
                foreach ($bis as $bi) {
                    echo '<tr>'
                        .'<td>'.$bi->id.'</td>'
                        .'</tr>';
                }
                ?>

                <tr><td>2</td></tr>
            </table>
        </div>
    </div>

  <?php include('views/assets/api/footer.php')?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="views/assets/js/jquery.min.js.transferir"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="views/assets/js/bootstrap.min.js.transferir"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="views/assets/js/ie10-viewport-bug-workaround.js.transferir"></script>
  

<span class="viber-share" id="viber1" style="position: absolute; top: 0px; left: 0px; width: 52px; height: 21px; background-size: 52px 21px; display: none; z-index: 2147483646; background-image: url(&quot;chrome-extension://dafalpmmoljglecaoelijmbkhpdoobmm/images/button@2x.png&quot;); cursor: pointer; background-repeat: no-repeat;"></span></body></html>