@extends('layouts.master')
@section('controller','ListQuestions')
@section('content')
<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              <b>List Questions</b>
          </header>
          @if(Session::has('flash_message'))
            <div class="alert alert-success" role="alert"><strong>{!! Session::get('flash_message') !!}</strong></div>
          @endif
          @if(Session::has('flash_message_export'))
            <div class="alert alert-danger" role="alert"><strong>{!! Session::get('flash_message_export') !!}</strong></div>
          @endif
          <form action="" method="POST" id="mainForm">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="panel-body" id="checkall">
              <div class="adv-table editable-table ">
                  <div class="clearfix">
                    <div class="btn-group">
                          <!-- Press Delete -->
                          <a href="{{ route('admin.deleteCheckbox') }}" class="btn-delete-all" id="autoUpdate" class="autoUpdate">
                          <button  class="btn green">
                            <i class="icon-trash"></i>Delete
                          </button>
                          </a>
                          <!-- press export -->
                          <a href="{{ route('admin.exportExcelByCheckbox') }}" class="btn-delete-all" id="autoExportQuestion" class="autoExportQuestion">
                          <button  class="btn green">
                            <i class="icon-share"></i>Export to Excel
                          </button>
                          </a>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('admin.exportExcel') }}">Export to Excel</a></li>
                            <li><a href="{{ route('admin.getImport') }}">Import from Excel</a></li>
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
                              <th>Task</th>
                              <th>Options</th>
                              <th>Answer_No</th>
                              <th>Answer_Yes</th>
                              <th>Hint</th>
                              <th>Order</th>
                              <th>Type</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php $stt=0; ?>
                            @foreach($data as $item)
                            <?php $stt++; ?>
                          <tr class="">
                          <!-- <form action ="" method="POST" id="form{{$item['id']}}"> -->
                           <!--  {!! method_field('DELETE') !!} -->
                            <td class="center"><input type="checkbox" class="checkdelete checkbox1" name="checkbox[ {{ $item['id'] }} ]" ></td>
                              <td class="center">{!! $stt !!}</td>
                              <td class="center">{!! $item['task']!!}</td>
                              <td class="center">{!! $item['options']!!}</td>
                              <td class="center">{!! $item['answer_No']!!}</td>
                              <td class="center">{!! $item['answer_Yes']!!}</td>
                              <td class="center">{!! $item['hint']!!}</td>
                              <td class="center">{!! $item['order']!!}</td>
                              <td class="center">{!! $item['type']!!}</td>
                              <td>
                                <a href="{{ URL::route('admin.getEdit',$item['id']) }}">
                                  <button type="button" class="btn btn-primary">
                                  <i class="icon-edit-sign"></i>
                                  </button>
                                </a>
                              </td>
                              <td>
                                <a href="{{ route('admin.deleteItem',$item['id'])  }}" onclick="return confirm('Are you sure delete this question?')" class="btn btn-primary">
                                  <i class="icon-trash icon-white"></i>
                                </a>
                              </td>
                            <!-- </form> -->
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
@endsection()
