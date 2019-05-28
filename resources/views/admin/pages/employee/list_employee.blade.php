@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ພະນັກງານທັງໝົດ</h3>
          <div class="box-tools pull-right">
          <button class="btn btn-success" data-toggle="modal" data-target="#CatModal">ເພີ່ມພະນັກງານ</button>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#CatModal">Import</button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button> -->
          </div>
        </div>
        <div class="box-body">
        <!-- Start here -->
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                  <th>ລະຫັດພະນັກງານ</th>
                  <th>ຊື່ພະນັກງານ</th>
                  <th>ນາມສະກຸນ</th>
                  <th>ເພດ</th>
                  <th>ຕໍາແໜ່ງ</th>
                  <th>ທີຢູ່ປັດຈຸບັນ</th>
                  <th>ເບີໂທ</th>
                  <th>ອິເມວ</th>
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
          <!-- End here -->
          <div class="modal fade" id="CatModal" tabindex="-1" role="dialog" aria-labelledby="CatModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="CatModalLabel">ສ້າງຂໍ້ມູນພະນັກງານໃຫມ່</h5>
                     </div>
                     <div class="modal-body">
                     <form role="form" action="{{URL::to('/add-product')}}" method="post" enctype="multipart/from-data">
                        {{ csrf_field() }}

                    <div class="box-body">
                      <div class="form-group col-lg-6">
                        <label for="product_bar">ລະຫັດບາໂຄດ</label>
                        <input type="text" class="form-control" name="product_bar" id="product_bar" placeholder="ລະຫັດບາໂຄດ">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_name">ຊື່ສິນຄ້າ</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="ຊື່ສິນຄ້າ" required="required">
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ປະເພດສິນຄ້າ</label>
                        <select class="form-control select2" style="width: 100%;" name="cat_id">
                          <option selected="selected">ກະລຸນາເລຶອກປະເພດສິນຄ້າ</option>
                          <?php
                          $all_publication_categories = DB::table('categories')
													->where('publication_status', 1)
													->get();
														foreach ($all_publication_categories as $v_category) { ?>
                          <option value="{{$v_category->cat_id}}">{{$v_category->cat_name}}</option>
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ເລຶອກຍີຫໍ້ສິນຄ້າ</label>
                        <select class="form-control select2" style="width: 100%;" name="brand_id">
                          <option selected="selected">ກະລຸນາເລຶອກຍີຫໍ້ສິນຄ້າ</option>
                          <?php
                            $all_publication_brand = DB::table('brands')
                                  ->where('publication_status', 1)
                                  ->get();
                            foreach ($all_publication_brand as $v_brand) { ?>
                          <option value="{{$v_brand->brand_id}}">{{$v_brand -> brand_name}}</option>
                          <?php } ?>
                        </select>
                      </div>
                      
                      <div class="form-group col-lg-6">
                        <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                        <select class="form-control select2" style="width: 100%;" name="unit_id">
                          <option>ກະລຸນາເລຶອກຫົວໜ່ວຍສິນຄ້າ</option>
                          <?php
                            $all_publication_unit = DB::table('units')
                                  ->where('publication_status', 1)
                                  ->get();
                            foreach ($all_publication_unit as $v_unit) { ?>
                          <option  value="{{$v_unit->unit_id}}">{{$v_unit -> unit_name}}</option>
                          
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_size">ຂະໜາດ</label>
                        <input type="text" class="form-control" id="product_size" name="product_size" placeholder="ຂະໜາດ" required="required">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="product_size">ຂະໜາດ</label>
                        <input type="text" class="form-control" id="product_size" name="product_size" placeholder="ຂະໜາດ" required="required">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="product_size">ຂະໜາດ</label>
                        <input type="text" class="form-control" id="product_size" name="product_size" placeholder="ຂະໜາດ" required="required">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_size">ຂະໜາດ</label>
                        <input type="text" class="form-control" id="product_size" name="product_size" placeholder="ຂະໜາດ" required="required">
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="product_color">ສິ</label>
                        <input type="text" class="form-control" name="product_color" id="product_color" placeholder="ສິ" required="required">
                      </div>
                     
                      <div class="form-group col-lg-6">
                        <label for="InputFile">ເລຶອກຮູບພາບ</label><br>
                        <input type="file" class="input-file uniform_on" name="product_image" id="product_image">
                      </div>
                      <div class="checkbox form-group col-lg-6">
                        <label>
                        <input type="checkbox" name="publication_status" value="1">ເປິດເປັນສາທາລະນະ
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
                 
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <!-- <a href="{{URL::to('add-product')}}" type="button" class="btn btn-primary pull-right">ບັນທຶກ</a> -->
                     <button type="submit" class="btn btn-success">ບັນທຶກ</button>
                     </div>
                     </form>
                  </div>
               </div>
               </div>



        </div>
      </div>
    </section>   
  </div>
</div>
@endsection