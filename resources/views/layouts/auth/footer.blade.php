  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php
    $copyYear = 2023;
    $curYear = date('Y');
    ?>
    <strong>Copyright &copy;
        <?php echo $copyYear.(($copyYear != $curYear) ? '-'. $curYear : '') ?>
        <a href="#">Innovation Group</a>.
    </strong>
        All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <div class="col-lg-3 btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <!-- WEBSITE OFFICIAL SOCIAL MEDIA ACCOUNT -->
                <a href="#" class="editor" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="editor mx-3" target="_blank">
                    <i class="fab fa-facebook-messenger"></i>
                </a>
                <a href="#" class="editor" target="_blank">
                    <i class="far fa-envelope"></i>
                </a>
            </div>                
        </div>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar mt-5 control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <ul class="nav nav-pills mt-3 nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
              <h5 class="text-white">Other Table</h5>
              <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item ml-2">
              <a href="{{ route('categories.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-white">Categories</p>
              </a>
            </li>
            <li class="nav-item ml-2">
              <a href="{{ route('departments.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-white">Department</p>
              </a>
            </li>
            <li class="nav-item ml-2">
              <a href="{{ route('units.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-white">Unit Of Measurements</p>
              </a>
            </li>
            <li class="nav-item ml-2">
              <a href="{{ route('positions.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-white">Positions</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
  </aside>
  <!-- /.control-sidebar -->