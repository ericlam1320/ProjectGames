
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{ route('ThongTinAdmin') }}">
                          <i class="fa fa-home"></i>
                          <span>Thông tin</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-gamepad "></i>
                          <span>Games</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('ThemGames') }}">Thêm games</a></li>
                          <li><a  href="{{ route('DanhSachGames') }}">Danh sách games</a></li>
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Thể loại game</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('ThemTheLoai') }}">Thêm thể loại</a></li>
                          <li><a  href="{{ route('DanhSachTheLoai') }}">Danh sách thể loại</a></li>
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-picture-o"></i>
                          <span>Hình</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('ThemGames') }}">Thêm Hình</a></li>
                          <li><a  href="{{ route('DanhSachGames') }}">Danh sách Hình</a></li>
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-link"></i>
                          <span>Link Download</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('ThemGames') }}">Thêm Link Download</a></li>
                          <li><a  href="{{ route('DanhSachGames') }}">Danh sách Link Download</a></li>
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Tin tức</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('ThemGames') }}">Thêm tin tức</a></li>
                          <li><a  href="{{ route('DanhSachGames') }}">Danh sách tin tức</a></li>
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Người quản trị</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('ThemGames') }}">Thêm người quản trị</a></li>
                          <li><a  href="{{ route('DanhSachGames') }}">Danh sách người quản trị</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="{{ route('DanhSachBinhLuan') }}">
                          <i class="fa fa-comments"></i>
                          <span>Bình luận</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
