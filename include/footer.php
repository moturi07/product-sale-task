<footer class="col-lg-12 col-md-12 col-xs-12" id="footer" style="background: rgba(230,255,82,1);">
        <div class="footer-below">
            <div class="container-fluid">
                
                    <div class="col-lg-6">
					<p style="float:left;">&copy; Copyright 2018. All Rights Reserved. </p>
                    </div>
					 <div class="col-lg-4">
                     <p style="float:right;">Site By Moturi.</p>
                    </div>
                
            </div>
        </div>
    </footer>




<script>
  $(document).ready(function() {
   var docHeight = $(window).height();
   var footerHeight = $('#footer').height();
   var footerTop = $('#footer').position().top+footerHeight;
   if (footerTop < docHeight) {
    $('#footer').css('margin-top', 10+(docHeight - footerTop) + 'px');
   }
  });
 </script>
</body>
</html>