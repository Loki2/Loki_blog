@extends('admin/index')
@section('content')
<style type="text/css">
       .main-section{
          margin:0 auto;
          padding:20px;
          margin-top:100px;
          background-color:#FFF8b3;
          box-shadow:0px 0px 20px #c1c1c1;
       }

</style>
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ເລືອກຮູບພານຂອງສິນຄ້າ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="container">
        <h1>ເພີ່ມຮູບພາບສິນຄ້າ</h1>
        <section class="main-section">
            <div id="dropzone">
               <form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                  <div class="dz-message needsclick">
                      <h1>ຄຣິກເພື່ອເລຶອກເອົາຮູບພາບ</h1><br>
                  <h3><span class="note needsclick">(ຈັບລາກຮູບພາບມາໃສ່ເພຶ່ອເອົາຂື້ນ <strong> ຖ່ານຂໍ້ມູນ</strong> ຕາມທີຕ້ອງ.)</span></h3>
                  </div>
               </form>
               <button type="button" class="btn btn-primary pull-right">ບັນທຶກ</button>
            </div>
         </section>
      

        </div>
        
        </div>
      </div>
    </section>   
  </div>
</div>
@endsection

<script type="text/javascript">
   $("#file_1").fileinput({
      thems:'fa',
      uploadUrl:"/image-submit",
      uploadExtraData:function(){
         return{
            _token:$("input[name='_token']").val()
         };
      }, 
      allowedFileExtions:['jpg','png','gif'],
      overwriteInitial:false,
      maxFileSize:2000,
      maxFileNum:5,
      slugCallback:function(filename){
         return filename.replace('(','_').replace(']','_');
      }
   });

</script>