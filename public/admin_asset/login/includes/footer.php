       </div>
            <!-- /.container-fluid -->

        </div>
 <div id="footer">
         
            <p>Bản quyền thuộc về tungvu90@gmail.com</p>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
     <!-- lấy ngày đăng -->
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace('noidung');
    </script>
       
     <!--     bắt buộc sau thằng trên -->
    <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
     <script type="text/javascript">
      $(function () {  
         $("#datepicker").datepicker({         
             autoclose: true,         
             todayHighlight: true 
         }).datepicker('update', new Date());
        /* 'use strict';
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            var checkin = $('#ngaydang_edit').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            }).data('datepicker');  */          
      });
    </script> 


    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
