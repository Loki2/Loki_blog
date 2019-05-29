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
                    <th>ລາຄາ</th>
                    <th>ຂະໜາດ</th>
                    <th>ສີ</th>
                    <th>ສະຖານະ</th>
                    <th>ຕົວເລຶອກ</th>
                  </tr>
                </thead>
                <tbody>
                @foreach( $all_product_info as $v_product )
                <tr>
                  <td>{{ $v_product -> product_id }}</td>
                  <td><img src="{{ URL::to($v_product -> product_image) }}" style="width:100px; heigh:40px;" alt=""> </td>
                  <td>{{ $v_product -> product_bar }}</td>
                  <td>{{ $v_product -> product_name }}</td>
                  <td>{{ $v_product -> cat_name }}</td>
                  <td>{{ $v_product -> brand_name }}</td>
                  <td>{{ $v_product -> product_price }} $</td>
                  <td>{{ $v_product -> product_size }}</td>
                  <td>{{ $v_product -> product_color }}</td>
                  <td>
                  @if($v_product -> publication_status==1 )
                    <span class="label label-success">Actived</span>
                    @else
                    <span class="label label-warning">Unactive</span>
                    @endif
                  </td>
                  <td>
                  @if($v_product -> publication_status==1)
                     <a href="{{URL::to('/unactive-product/'.$v_product->product_id)}}" class="link"><i class="btn fa fa-check btn-success "></i></a> 
                  @else
                     <a href="{{URL::to('/active-product/'.$v_product->product_id)}}" class="link"><i class="btn fa fa-times-circle btn-warning "></i></a>
                  @endif
                     <a href="{{URL::to('/edit-product/'.$v_product->product_id)}}" class="link"><i class="btn fa fa-edit btn-primary"></i></a> 
                     <a href="{{URL::to('/delete-product/'.$v_product->product_id)}}" id="delete" class="link"><i class="btn fa fa-trash btn-danger"></i></a>
                  </td>
                </tr>
                @endforeach
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
                     <form role="form" action="{{URL::to('/add-product')}}" method="post" enctype="multipart/form-data">
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
                      <div class="form-group col-lg-6">
                        <label for="product_color">ສິ</label>
                        <input type="text" class="form-control" name="product_color" id="product_color" placeholder="ສິ" required="required">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="product_price">ລາຄາ</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="ລາຄາ" required="required">
                      </div>
                      <div class="form-group col-lg-12">
                        <label for="product_short_desc">ລາຍລະອຽດໂດຍຫຍໍ້</label>
                        <textarea name="product_short_desc" id="product_short_desc" name="product_short_desc" cols="69" rows="5"  placeholder="ລາຍລະອຽດໂດຍຫຍໍ້" required="required"></textarea>

                        </div>

                      <div class="form-group col-lg-12">
                        <label for="product_long_desc">ລາຍລະອຽດເຕັ່ມ</label>
                          <textarea id="editor1" name="product_long_desc" name="product_long_desc" rows="10" cols="80" required="required"></textarea>
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
                     <button type="submit" class="btn btn-success">ບັນທຶກ</button>
                     </div>
                     </form>
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