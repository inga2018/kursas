<footer class="page-footer grey darken-1">    
  <div class="footer-copyright">
    <div class="container">
     <p> &copy; <?php echo date('Y'); ?> Visos teisės saugomos</p>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="" href="https://www.google.com/"><i class="fa fa-google"></i></a></li>
          <li><a class="" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
          <li><a class="" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="../app/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../app/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $('.fixed-action-btn').floatingActionButton();
    $('.parallax').parallax();
  });
</script>
</body>
</html>
