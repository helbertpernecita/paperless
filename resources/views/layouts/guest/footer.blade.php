<!-- FOOTER -->
<footer class="fixed-bottom bg-blue-200 py-2 px-5" >
  <?php
  $copyYear = 2023;
  $curYear = date('Y');
  ?>
  <strong>Copyright &copy;
      <?php echo $copyYear.(($copyYear != $curYear) ? '-'. $curYear : '') ?>
      <a href="#">Helbert H. Pernecita</a>.
  </strong>
      All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
      <div class="col-lg-3 btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              <!-- WEBSITE OFFICIAL SOCIAL MEDIA ACCOUNT -->
              <a href="https://web.facebook.com/helbert.pernecita" class="editor" target="_blank">
                  <i class="fab fa-facebook-square"></i>
              </a>
              <a href="https://www.messenger.com/" class="editor mx-3" target="_blank">
                  <i class="fab fa-facebook-messenger"></i>
              </a>
              <a href="https://mail.google.com" class="editor" target="_blank">
                  <i class="far fa-envelope"></i>
              </a>
          </div>                
      </div>
  </div>
</footer>