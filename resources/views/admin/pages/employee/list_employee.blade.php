@extends('admin/index')
@section('content')
<div class="wrapper">
<div class="content-wrapper">
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ພະນັກງານທັງໝົດ</h3>
          <div class="box-tools pull-right">
                  <a href="{{URL::to('/create-employee')}}" class="btn btn-success">ເພີ່ມພະນັກງານ</a>
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
        </div>
      </div>
    </section>   
  </div>
</div>
@endsection