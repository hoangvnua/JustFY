  <aside class="main-sidebar bg-color elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
          <img src="/admin/theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">Just For You</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2 text-color">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/" class="nav-link">
                          <i class="fas fa-home"></i>
                          <p>
                              Tổng quan
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-clipboard-list"></i>
                          <p>
                              Đơn hàng
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Tạo đơn và giao hàng</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Khách hàng trả lại</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh sách hóa đơn</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-box-open"></i>
                          <p>
                              Sản phẩm
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/products" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh sách sản phẩm</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Quản lý kho</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/delete/list" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Đặt hàng nhập</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Nhập hàng</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Kiểm hàng</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Chuyển hàng</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Nhà cung cấp</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-user"></i>
                          <p>
                              Khách hàng
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/examples/invoice.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Danh sách khách hàng</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/examples/profile.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Nhóm khách hàng</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-dollar-sign"></i>
                          <p>
                              Sổ quỹ
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/products" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Phiếu thu</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Phiếu chi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sổ quỹ</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  {{-- Báo cáo --}}
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-chart-line"></i>
                          <p>
                              Báo cáo
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/products" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Phiếu thu</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/products/create" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Phiếu chi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sổ quỹ</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <hr style="border: 0; margin: 0; border-top: 1px solid #15202c; border-bottom: 1px solid #263d53;">
                  <h5 class="mt-3" style="color: #fff;">KÊNH BÁN HÀNG</h5>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-store-alt"></i>
                          <p>
                              Bán tại quầy
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-window-restore"></i>
                          <p>
                              Bán online
                          </p>
                      </a>
                  </li>

                  <hr style="border: 0; margin: 0; border-top: 1px solid #15202c; border-bottom: 1px solid #263d53;">
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <i class="fas fa-cog"></i>
                          <p>Cấu hình</p>
                      </a>

                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
