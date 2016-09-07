<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Laravel-@yield('controller')</title>
  <link rel="shortcut icon" href="{!!Url('public/img/favicon.png')!!}">
  <link href="{!!Url('public/css/bootstrap.min.css')!!}" rel="stylesheet">
  <link href="{!!Url('public/css/bootstrap-reset.css')!!}" rel="stylesheet">
  <link href="{!!Url('public/assets/font-awesome/css/font-awesome.css')!!}" rel="stylesheet" />
  <link rel="stylesheet" href="{!!Url('public/assets/data-tables/DT_bootstrap.css')!!}" />
  <link href="{!!Url('public/css/style.css')!!}" rel="stylesheet">
</head>
<body>
  <section id="container" class="">
      <!--header start-->
  <header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="{{ route('admin.getList') }}" class="logo" >Sever<span>Game</span></a>
    <!--logo end-->
    <div class="top-nav ">
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::check())
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="username"><b><span class="glyphicon glyphicon-user"> </span>  {{ Auth::user()->name }}</b> </span>
                    <b class="caret"></b>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
    </div>
  </header>
<!--header end-->
<!--sidebar start-->
  <aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{ route('admin.getList') }}" class="">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="" class="<?php if(isset($modul) && $modul=='listUser'){echo 'active';} ?>">
                    <i class="icon-laptop"></i>
                    <span>Users Tables</span>
                </a>
                <ul class="sub">
                    <li class="<?php if(isset($modul) && $modul=='listUser'){echo 'active';} ?>"><a  href="{{ route('admin.listUser') }}">List Users</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="" class="<?php if(isset($modul) && ($modul=='getList' or $modul=='getAdd' or $modul=='getEdit') ){echo 'active';} ?>">
                    <i class="icon-th"></i>
                    <span>Questions Tables</span>
                </a>
                <ul class="sub">
                    <li class="<?php if(isset($modul) && $modul=='getList'){echo 'active';} ?>"><a  href="{{ route('admin.getList') }}">List Questions</a></li>
                    <li class="<?php if(isset($modul) && $modul=='getAdd'){echo 'active';} ?>"><a  href="{{ route('admin.getAdd') }}">Add Questions</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#" class="">
                    <i class="icon-user"></i>
                    <span>Acount</span>
                </a>
                <ul class="sub">
                    <li class=""><a  href="{{ url('/register') }}">Add Acount</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
  </aside>

      @yield('content')

  </section>
  <script src="{!!Url('public/js/jquery-1.8.3.min.js')!!}"></script>
  <script src="{!!Url('public/js/bootstrap.min.js')!!}"></script>
  <script class="include" type="text/javascript" src="{!!Url('public/js/jquery.dcjqaccordion.2.7.js')!!}"></script>
  <script src="{!!Url('public/js/jquery.scrollTo.min.js')!!}"></script>
  <script src="{!!Url('public/js/jquery.nicescroll.js')!!}" type="text/javascript"></script>
  <script type="text/javascript" src="{!!Url('public/assets/data-tables/jquery.dataTables.js')!!}"></script>
  <script type="text/javascript" src="{!!Url('public/assets/data-tables/DT_bootstrap.js')!!}"></script>
  <script src="{!!Url('public/js/common-scripts.js')!!}"></script>
  <script src="{!!Url('public/js/editable-table.js')!!}"></script>
  <!--Begin js checkall checkbox -->
  <script src="{!!Url('public/js/myscript.js')!!}"></script>
  <!--End js checkall checkbox -->
</body>
</html>
