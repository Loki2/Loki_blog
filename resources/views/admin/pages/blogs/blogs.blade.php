@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Dashboard Content</h3>
          <div class="box-tools pull-right">
          <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">Add Blog</button>
          </div>
        </div>
        <div class="box-body">
        <!-- Start here -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>ລະຫັດ</th>
                    <th>ປະເພດສິນຄ້າ</th>
                    <th>ລາຍລະອຽດ</th>
                    <th>ສະຖານະ</th>
                    <th>ຕົວເລຶອກ</th>
                  </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                  
                  </td>
                  <td>
                  
                     <a href="#" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="#" id="delete" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
               
              </tbody>
              </table>
              <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນປະເພດສິນຄ້າໃຫມ່</h5>
                     </div>
                     <div class="modal-body">

                     <form role="form" action="{{URL::to('/add-category')}}" method="post" >
                     {{  csrf_field() }}
                     <fieldset>
                    <div class="box-body">
                    <div class="form-group">

                      <label for="title">Title</label>

                      <input type="text" name="title" class="form-control" value="{{isset($posts) ? $posts->title : '' }}">

                      </div>

                      <div class="form-group">

                          <label for="content">Content</label>

                          <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>


                      </div>
                      <div class="checkbox form-group col-md-6">
                        <label>
                          <input type="checkbox" name="publication_status" value="1">ເປິດເປັນສາທາລະນະ
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <button type="submit" class="btn btn-success">ບັນທຶກ</button>
                     </div>
                  </form>
                  </div>
               </div>
               </div>








          <!-- End here -->
          </div>
      </div>
    </section>   
  </div>
</div>
@endsection