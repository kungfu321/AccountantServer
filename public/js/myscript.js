// +++++++Begin delete question checkbox+++++++++++
jQuery(document).ready(function() {
    EditableTable.init();
    $('.btn-delete-all').on('click', function(e){

      console.log( $(this).attr('href'))
      $('#mainForm').attr('action', $(this).attr('href'));
      $('#mainForm').submit();

      e.preventDefault();
  })

});
// +++++++End delete question checkbox+++++++++++

// +++++++Begin delete user checkbox+++++++++++
jQuery(document).ready(function() {
    // EditableTable.init();
    $('.btn-delete-all-user').on('click', function(e){

      console.log( $(this).attr('href'))
      $('#mainFormUser').attr('action', $(this).attr('href'));
      $('#mainFormUser').submit();

      e.preventDefault();
  })

});
// +++++++End delete user checkbox+++++++++++

$("div.alert1").delay(3000).slideUp();
$("div.alert").delay(3000).slideUp();
$("#checkAll").change(function () {
$("input:checkbox").prop('checked', $(this).prop("checked"));
});

///button delete
   var checkList=[];
   $('#autoUpdate').hide();
  $('.checkbox1').change(function(){
    if (this.checked) {
        checkList.push(1);
    }
    else {
        checkList.splice(0,1);
    }     

    if(checkList.length > 0)
    {
      $('#autoUpdate').show();
    }
    else
    {
      $('#autoUpdate').hide();
      $('#checkAll').prop('checked', false);
    } 

  });

  $('#checkAll').change(function(){
    var val = [];
    $(':checkbox:checked').each(function(i){
      val[i] = $(this).val();
    });

  if (this.checked) {
    for(var i = 0; i < val.length - 1; i++) 
    {
      checkList.push(i);
    }
  }
  else {
      checkList = [];
  }     

    if(checkList.length > 0)
    {
      $('#autoUpdate').show();
    }
    else
    {
      $('#autoUpdate').hide();
    }                 
  });
/// 

///button export Questions
   var checkListExportQuestions=[];
   $('#autoExportQuestion').hide();
  $('.checkbox1').change(function(){
    if (this.checked) {
        checkListExportQuestions.push(1);
    }
    else {
        checkListExportQuestions.splice(0,1);
    }     

    if(checkListExportQuestions.length > 0)
    {
      $('#autoExportQuestion').show();
    }
    else
    {
      $('#autoExportQuestion').hide();
      $('#checkAll').prop('checked', false);
    } 

  });

  $('#checkAll').change(function(){
    var val = [];
    $(':checkbox:checked').each(function(i){
      val[i] = $(this).val();
    });

  if (this.checked) {
    for(var i = 0; i < val.length - 1; i++) 
    {
      checkListExportQuestions.push(i);
    }
  }
  else {
      checkListExportQuestions = [];
  }     

    if(checkListExportQuestions.length > 0)
    {
      $('#autoExportQuestion').show();
    }
    else
    {
      $('#autoExportQuestion').hide();
    }                 
  });
/// 

///button export User
   var checkListExportUser=[];
   $('#autoExportUser').hide();
  $('.checkbox1').change(function(){
    if (this.checked) {
        checkListExportUser.push(1);
    }
    else {
        checkListExportUser.splice(0,1);
    }     

    if(checkListExportUser.length > 0)
    {
      $('#autoExportUser').show();
    }
    else
    {
      $('#autoExportUser').hide();
      $('#checkAll').prop('checked', false);
    } 

  });

  $('#checkAll').change(function(){
    var val = [];
    $(':checkbox:checked').each(function(i){
      val[i] = $(this).val();
    });

  if (this.checked) {
    for(var i = 0; i < val.length - 1; i++) 
    {
      checkListExportUser.push(i);
    }
  }
  else {
      checkListExportUser = [];
  }     

    if(checkListExportUser.length > 0)
    {
      $('#autoExportUser').show();
    }
    else
    {
      $('#autoExportUser').hide();
    }                 
  });
///