@extends('layouts.master')
@section('controller','ImportExcel')
@section('content')
<section id="main-content">
  <section class="wrapper">	
<!--Advanced File Input start-->
    <div class="row">
      <div class="col-md-12">
          <section class="panel">
              <header class="panel-heading">
                  <b>Import File Excel</b>   
              </header>
              <div class="panel-body">
                  <form action="{!! route('admin.postImport') !!}" method="post" name="frm_import" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">  
                    <div class="form-group">
                        <label class="control-label col-md-3">Choose File Excel</label>
                        <div class="col-md-4">
                            <input type="file" name="file" class="default"  />
                        </div>
                    </div>
                    <div class="form-group last">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div>
                                	<input class="btn btn-success" type="submit" name="submit" value="Import File"> 
                                <a href="{!! route('admin.getList') !!}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                  </form>
              </div>
          </section>
      </div>
    </div>
  </section>
</section>
@endsection