@extends('layouts.master')
@section('controller','EditQuestions')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <b>Edit Questions</b>
                    </header>
                    <div class="panel-body">
                        <div class=" form">
                            <form action="{!! URL::route('admin.postEdit',$data['id']) !!}" name="frm_editQuestions" method="post" class="cmxform form-horizontal tasi-form"   >
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                  @if(count($errors) > 0)
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                          <ul>
                                              @foreach($errors->all() as $error)
                                                  <li><div class="alert alert-danger" role="alert"><strong>{!! $error !!}</strong></div></li>
                                              @endforeach
                                          </ul>
                                      </div>
                                    </div>
                                  @endif
                                 <!--  URL('/admin/postEdit/'.$data['id']) -->
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Task <span style="color:red;">(*)</span></label>
                                    <div class="col-lg-8">
                                     	<textarea class="form-control" rows="3" name="task">{!! Old('task',isset($data) ? $data['task']:null) !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Options <span style="color:red;">(*)</span></label>
                                    <div class="col-lg-8">
                                        <input class=" form-control" id="cname" name="options"  type="text" value="{!! Old('options',isset($data) ? $data['options']:null) !!}" required placeholder="Please Enter options" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Answer_No <span style="color:red;">(*)</span></label>
                                    <div class="col-lg-8">
                                        <input class=" form-control" id="cname" name="answer_No"  type="text" value="{!! Old('answer_No',isset($data) ? $data['answer_No']:null) !!}" required placeholder="Please Enter answer_No" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Answer_Yes <span style="color:red;">(*)</span></label>
                                    <div class="col-lg-8">
                                        <input class=" form-control" id="cname" name="answer_Yes" type="text" value="{!! Old('answer_Yes',isset($data) ? $data['answer_Yes']:null) !!}" required placeholder="Please Enter answer_Yes"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Hint <span style="color:red;">(*)</span></label>
                                    <div class="col-lg-8">
                                        <input class=" form-control" id="cname" name="hint"  type="text" value="{!! Old('hint',isset($data) ? $data['hint']:null) !!}" required placeholder="Please Enter hint"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Order</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" name="order">
                                        <option value="1" <?php if(isset($data) && $data['order']=='1'){echo 'selected';} ?> >1</option>
                                        <option value="2" <?php if(isset($data) && $data['order']=='2'){echo 'selected';} ?> >2</option>
                                        <option value="3" <?php if(isset($data) && $data['order']=='3'){echo 'selected';} ?> >3</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">Type</label>
                                    <div class="col-lg-8">
                                    <select class="form-control" name="type">
                                        <option value="0" <?php if(isset($data) && $data['type']=='0'){echo 'selected';} ?> >0</option>
                                        <option value="1" <?php if(isset($data) && $data['type']=='1'){echo 'selected';} ?> >1</option>
                                        <option value="2" <?php if(isset($data) && $data['type']=='2'){echo 'selected';} ?> >2</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="btn btn-danger" type="submit" name="submit" value="Edit" />
                                        <button class="btn btn-success" name="reset" type="reset">Refresh</button>
                                        <a class="btn btn-default" onclick="return confirm('Cancel. Are you sure?')" href="{!! route('admin.getList') !!}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
@endsection