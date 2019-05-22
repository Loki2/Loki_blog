<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::to('backend/dist/img/Loki.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('admin_name')}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>ໜ້າຫຼັກ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/dashboard')}}"><i class="fa fa-circle-o"></i>ໜ້າຫລັກ</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>ຈັດການຜູ້ໃຊ້ລະບົບ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>ຈັດການຂໍ້ມູນພະນັກງານ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/create-employee')}}"><i class="fa fa-circle-o"></i>ຂໍ້ມູນສ່ວນບຸກຄົນ</a></li>
            <li><a href="{{URL::to('/all-employee')}}"><i class="fa fa-circle-o"></i>ລາຍຊື່ພະນັກງານ</a></li>
            <li><a href="{{URL::to('/type-employee')}}"><i class="fa fa-circle-o"></i>ປະເພດພະນັກງານ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>ຈັດການຂໍ້ມູນລູກຄ້າ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນລູກຄ້າ</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> ລາຍຊື່ລູກຄ້າ</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> ຈັດການ order</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>ຈັດການຂໍ້ມູນສິນຄ້າ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/product')}}"><i class="fa fa-circle-o"></i> ສິນຄ້າທັງໝົດ</a></li>
            <li><a href="{{url('/all-category')}}"><i class="fa fa-circle-o"></i> ປະເພດສີນຄ້າ</a></li>
            <li><a href="{{url('/all-brand')}}"><i class="fa fa-circle-o"></i> ຍີຫໍ້ສິນຄ້າ</a></li>
            <li><a href="{{url('/all-unit')}}"><i class="fa fa-circle-o"></i> ຫົວໜ່ວຍສິນຄ້າ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-list-alt"></i> <span>ການນຳເຂົາສິນຄ້າ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສັ່ງຊື້</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສິນຄ້າ</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> ລາຍການ</a></li>
            <li><a href="{{URL::to('/all-supplier')}}"><i class="fa fa-circle-o"></i> ຜູ້ສະໜອງ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hourglass-end"></i> <span>ຈັດການສະຕັອກ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສັ່ງຊື້</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສິນຄ້າ</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> ລາຍການ</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> ຜູ້ສະໜອງ</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-trophy"></i> <span>ຂໍ້ມູນການຂ່າຍ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສັ່ງຊື້</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສິນຄ້າ</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> ລາຍການ</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> ຜູ້ສະໜອງ</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>ຂໍ້ມູນຜູ້ສະໜອງ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສັ່ງຊື້</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສິນຄ້າ</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> ລາຍການ</a></li>
            <li><a href="{{URL::to('/all-supplier')}}"><i class="fa fa-circle-o"></i> ຜູ້ສະໜອງ</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-send-o"></i> <span>ການສັງຈອງ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສັ່ງຊື້</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສິນຄ້າ</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> ລາຍການ</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> ຜູ້ສະໜອງ</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>ລາຍງານ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສັ່ງຊື້</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> ຂໍ້ມູນສິນຄ້າ</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> ລາຍການ</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> ຜູ້ສະໜອງ</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Blog Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i>Add Blog</a></li>
            <li><a href="{{route('blog.index')}}"><i class="fa fa-circle-o"></i> All Blog</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Blog Category</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Blog Tag</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
