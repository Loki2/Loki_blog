@extends('admin/index')
@section('content')
@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">

    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ແກ້ໄຂຂໍ້ມູນປະເພດສິນຄ້າ</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="col-md-9">
                 <p> 
                  <?php
                  $message=Session::get('message');
                  if($message){
                    echo $message;
                    Session::put('message',null);
                  }
                  ?>
                </p>
                 </div>
        <form action="{{URL::to('/update-product',$product_info->product_id)}}">
        {{  csrf_field() }}
        <div class="box-body col-lg-8">
                      <div class="form-group col-lg-6">
                        <label for="product_bar">ລະຫັດບາໂຄດ</label>
                        <input type="text" class="form-control" name="product_bar" id="product_bar" placeholder="ລະຫັດບາໂຄດ" value="{{$product_info->product_bar}}">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_name">ຊື່ສິນຄ້າ</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="ຊື່ສິນຄ້າ"  value="{{$product_info->product_name}}">
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
                        <input type="text" class="form-control" id="product_size" name="product_size" placeholder="ຂະໜາດ"  value="{{$product_info->product_size}}">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_color">ສິ</label>
                        <input type="text" class="form-control" name="product_color" id="product_color" placeholder="ສິ"  value="{{$product_info->product_color}}">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_price">ລາຄາ</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="ລາຄາ"  value="{{$product_info->product_price}}">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="product_short_desc">ລາຍລະອຽດໂດຍຫຍໍ້</label>
                        <textarea name="product_short_desc" id="product_short_desc" name="product_short_desc" cols="92" rows="5"  placeholder="ລາຍລະອຽດໂດຍຫຍໍ້" >{{$product_info->product_short_desc}}</textarea>
                        </div>
                      <div class="form-group col-lg-12">
                        <label for="product_long_desc">ລາຍລະອຽດເຕັ່ມ</label>
                          <textarea id="editor1" name="product_long_desc" name="product_long_desc" rows="10" cols="80" >{{$product_info->product_long_desc}}</textarea>
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
                 
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left">ກັບຄຶນ</button>
                     <!-- <a href="{{URL::to('add-product')}}" type="button" class="btn btn-primary pull-right">ບັນທຶກ</a> -->
                     <button type="submit" class="btn btn-success pull-right">ບັນທຶກ</button>
                     </div>
        </form>
        </div>
      </div>
    </div>
    </section>   
  </div>
</div>
@endsection