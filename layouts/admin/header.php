<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Label - <?= isset($title) ? $title : '' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.css' ?>">
  <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/shared/style.css' ?>">
  <link rel="stylesheet" href="<?= BASE_URL . '/layouts/admin/assets/css/demo_1/style.css' ?>">
  <link rel="shortcut icon" href="<?= BASE_URL . '/layouts/admin/assets/images/favicon.ico' ?>" />
  <style>
    input[type="search"] {
      border: 1px solid gray;
      margin-left: 10px;
    }

    div#dtBasicExample_paginate a {
    border: 1px solid gray;
    padding: 0 8px;
    cursor: pointer;
    }
    .text-center{
      text-align: center;
    }
  </style>
</head>

<body class="header-fixed">
  <!-- NAV BAR  -->

  <nav class="t-header">
    <div class="t-header-brand-wrapper px-0">
        <h2 class="mx-auto">logo</h2>
    </div>
    <div class="t-header-content-wrapper">
      <div class="t-header-content">
        <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
          <i class="mdi mdi-menu"></i>
        </button>
        <form action="#" class="t-header-search-box">
          <div class="input-group">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
            <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
          </div>
        </form>
        <ul class="nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-bell-outline mdi-1x"></i>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
              <div class="dropdown-header">
                <h6 class="dropdown-title">Notifications</h6>
                <p class="dropdown-title-text">You have 4 unread notification</p>
              </div>
              <div class="dropdown-body">
                <div class="dropdown-list">
                  <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                    <i class="mdi mdi-alert"></i>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Storage Full</small>
                    <small class="content-text">Server storage almost full</small>
                  </div>
                </div>
                <div class="dropdown-list">
                  <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                    <i class="mdi mdi-cloud-upload"></i>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Upload Completed</small>
                    <small class="content-text">3 Files uploded successfully</small>
                  </div>
                </div>
                <div class="dropdown-list">
                  <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                    <i class="mdi mdi-security"></i>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Authentication Required</small>
                    <small class="content-text">Please verify your password to continue using cloud services</small>
                  </div>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="#">View All</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-message-outline mdi-1x"></i>
              <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
              <div class="dropdown-header">
                <h6 class="dropdown-title">Messages</h6>
                <p class="dropdown-title-text">You have 4 unread messages</p>
              </div>
              <div class="dropdown-body">
                <div class="dropdown-list">
                  <div class="image-wrapper">
                    <img class="profile-img" src="<?= BASE_URL . '/layouts/admin/assets/images/profile/male/image_1.png ' ?>" alt="profile image">
                    <div class="status-indicator rounded-indicator bg-success"></div>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Clifford Gordon</small>
                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                  </div>
                </div>
                <div class="dropdown-list">
                  <div class="image-wrapper">
                    <img class="profile-img" src="<?= BASE_URL . '/layouts/admin/assets/images/profile/female/image_2.png' ?>" alt="profile image">
                    <div class="status-indicator rounded-indicator bg-success"></div>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Rachel Doyle</small>
                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                  </div>
                </div>
                <div class="dropdown-list">
                  <div class="image-wrapper">
                    <img class="profile-img" src="<?= BASE_URL . '/layouts/admin/assets/images/profile/male/image_3.png' ?>" alt="profile image">
                    <div class="status-indicator rounded-indicator bg-warning"></div>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Lewis Guzman</small>
                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                  </div>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="#">View All</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-apps mdi-1x"></i>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
              <div class="dropdown-header">
                <h6 class="dropdown-title">Apps</h6>
                <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
              </div>
              <div class="dropdown-body border-top pt-0">
                <a class="dropdown-grid">
                  <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                  <a href="<?= url('admin/account/logout.php') ?>">Đăng xuất</a>
                </a>
              </div>
              <div class="dropdown-footer">
                <a href="#">View All</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-body">


    <div class="sidebar">
      <div class="user-profile">
        <div class="display-avatar animated-avatar">
          <img class="profile-img img-lg rounded-circle" src="<?= BASE_URL . '/public/uploads/images/' . Auth::user()->avatar ?>" alt="profile image">
        </div>
        <div class="info-wrapper">
          <p class="user-name"><?= Auth::user()->name ?></p>
          <h6 class="display-income">$3,400,00</h6>
        </div>
      </div>
      <ul class="navigation-menu">
        <li class="nav-category-divider">MAIN</li>
        <li>
          <a href="<?= url('admin/dashboard') ?>">
            <span class="link-title">Dashboard</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>
        <li>
          <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
            <span class="link-title">Sản phẩm</span>
            <i class="mdi mdi-flask link-icon"></i>
          </a>
          <ul class="collapse navigation-submenu" id="sample-pages">
            <li>
              <a href="<?= url('admin/category') ?>">Loại sản phẩm</a>
            </li>
            <li>
              <a href="<?= url('admin/product/') ?>">Sản phẩm</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <span class="link-title">Khách hàng</span>
            <i class="mdi mdi-account-box link-icon"></i>
          </a>
        </li>

        <li>
          <a href="">
            <span class="link-title">Đơn hàng</span>
            <i class="mdi mdi-cart link-icon"></i>
          </a>
        </li>
        <li>
          <a href="">
            <span class="link-title">Báo cáo</span>
            <i class="mdi mdi-flask link-icon"></i>
          </a>
        </li>
        <li>
          <a href="<?= url('admin/blog') ?>">
            <span class="link-title">Tin tức</span>
            <i class="mdi mdi-book-open link-icon"></i>
          </a>
        </li>
        <li>
          <a href="<?= url('admin/contact') ?>">
            <span class="link-title">Liên hệ</span>
            <i class="mdi mdi-contact-mail link-icon"></i>
          </a>
        </li>

      </ul>
    </div>

    <!-- CONTENT  -->

    <div class="page-content-wrapper">