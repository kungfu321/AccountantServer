@extends('layouts.master')
@section('controller','ListUser')
@section('content')
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
    <section class="panel">
      <header class="panel-heading">
          <b>List User</b>
      </header>
      @if(Session::has('flash_message'))
        <div class="alert alert-success" role="alert"><strong>{!! Session::get('flash_message') !!}</strong></div>
      @endif
      @if(Session::has('flash_message_export'))
        <div class="alert alert-danger" role="alert"><strong>{!! Session::get('flash_message_export') !!}</strong></div>
      @endif
      <form action ="" method="POST" id="mainFormUser">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="panel-body">
          <div class="adv-table editable-table ">
              <div class="clearfix">
                <div class="btn-group">
                  <a href="{{ route('admin.exportUserByCheckbox') }}" class="btn-delete-all-user" id="autoExportUser" class="autoExportUser">
                  <button class="btn green">
                    <i class="icon-share"></i>Export to Excel
                  </button>
                  </a>
                </div>
                <div class="btn-group pull-right">
                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu pull-right">
                    <li><a href="{!! route('admin.exportExcelUser') !!}">Export to Excel</a></li>
                  </ul>
                </div>
              </div>
              <div class="space15"></div>
               <div class="space15"></div>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                    <thead>
                    <tr>
                      <th ><input type="checkbox" name="checkAll" class="checkdelete"  id="checkAll"></th>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt=0; ?>
                      @foreach($data as $item)
                      <?php $stt++; ?>
                    <tr class="">
                      <td class="center"><input type="checkbox" class="checkdelete checkbox1" name="checkbox[ {{ $item['id'] }} ]" value="{!! $item['id'] !!}"></td>
                      <td class="center">{!! $stt !!}</td>
                      <td class="center">{!! $item['username']!!}</td>
                      <td class="center">{!! $item['email']!!}</td>
                      <td class="center">{!! $item['phone']!!}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
          </div>
      </div>
      </form>
    </section>
      <!-- page end-->
  </section>
</section>
<!--main content end-->
@endsection
