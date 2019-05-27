@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ຈັດການຂໍ້ມູນສິນຄ້າ</h3>
          <div class="box-tools pull-right">
                  <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມສິນຄ້າ</button>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#CatModal">Import</button>
          </div>
        </div>
        <div class="box-body">
        <!-- Start here -->
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>ລະຫັດສິນຄ້າ</th>
                    <th>ຮູບພາບ</th>
                    <th>Bar Code</th>
                    <th>ຊື່ສິນຄ້າ</th>
                    <th>ປະເພດສິນຄ້າ</th>
                    <th>ຍີຫໍ້ສິນຄ້າ</th>
                    <th>ຫົວໜ່ວຍ</th>
                    <th>ລາຄາ/ຫົວໜ່ວຍ</th>
                    <th>ຜູ້ສະໜອງ</th>
                    <th>ສະຖານະ</th>
                    <th>ຕົວເລຶອກ</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>aaa</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                     <a href="#" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="#" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
             <!-- Start Modal Form here  -->
            <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນສິນຄ້າໃຫມ່</h5>
                     </div>
                     <div class="modal-body">
                     <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/from-data">
                        {{ csrf_field() }}

                    <div class="box-body">
                      <div class="form-group col-lg-6">
                        <label for="cat_id">ລະຫັດບາໂຄດ</label>
                        <input type="text" class="form-control" id="cat_id" placeholder="ລະຫັດບາໂຄດ">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_name">ຊື່ສິນຄ້າ</label>
                        <input type="text" class="form-control" id="product_name" placeholder="ຊື່ສິນຄ້າ" required="required">
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ປະເພດສິນຄ້າ</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">ກະລຸນາເລຶອກປະເພດສິນຄ້າ</option>
                          <?php
                          $all_publication_categories = DB::table('categories')
													->where('publication_status', 1)
													->get();
														foreach ($all_publication_categories as $v_category) { ?>
                          <option>{{$v_category->cat_name}}</option>
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ເລຶອກຍີຫໍ້ສິນຄ້າ</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">ກະລຸນາເລຶອກຍີຫໍ້ສິນຄ້າ</option>
                          <?php
                            $all_publication_brand = DB::table('brands')
                                  ->where('publication_status', 1)
                                  ->get();
                            foreach ($all_publication_brand as $v_brand) { ?>
                          <option>{{$v_brand -> brand_name}}</option>
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">ກະລຸນາເລຶອກຫົວໜ່ວຍສິນຄ້າ</option>
                          <?php
                            $all_publication_unit = DB::table('units')
                                  ->where('publication_status', 1)
                                  ->get();
                            foreach ($all_publication_unit as $v_unit) { ?>
                          <option>{{$v_unit -> unit_name}}</option>
                          
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_size">ຂະໜາດ</label>
                        <input type="text" class="form-control" id="product_size" placeholder="ຂະໜາດ" required="required">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_color">ສິ</label>
                        <input type="text" class="form-control" id="product_color" placeholder="ສິ" required="required">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="category">ລາຄາ</label>
                        <input type="text" class="form-control" id="category" placeholder="ລາຄາ" required="required">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="short_desc">ລາຍລະອຽດໂດຍຫຍໍ້</label>
                        <textarea name="short_desc" id="product_short_desc" cols="69" rows="5"  placeholder="ລາຍລະອຽດໂດຍຫຍໍ້" required="required"></textarea>

                        </div>

                      <div class="form-group col-lg-12">
                        <label for="long_desc">ລາຍລະອຽດເຕັ່ມ</label>
                          <textarea id="editor1" name="product_long_desc" rows="10" cols="80" required="required" ></textarea>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="InputFile">ເລຶອກຮູບພາບ</label><br>
                        <!-- <a href="{{url('/image_*')}}" class="btn btn-primary">ເພີ່ມຮູບພາບ</a>
                        <p class="help-block">file url</p> -->
                        <input type="file" class="input-file uniform_on" name="product_image" id="product_image">
                      </div>
                      <div class="checkbox form-group col-lg-6">
                        <label>
                        <input type="checkbox" name="publication_status" value="1">ເປິດເປັນສາທາລະນະ
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </form>
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <!-- <a href="{{URL::to('add-product')}}" type="button" class="btn btn-primary pull-right">ບັນທຶກ</a> -->
                     <button type="button" class="btn btn-primary pull-right">ບັນທຶກ</button>
                     </div>
                  </div>
               </div>
               </div>
                <!-- End New Modal here -->
          <!-- End here -->
        </div>
      </div>
    </section>   
  </div>
</div>
@endsection