<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\admin_model\category;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
Session_start();

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_employee_info=DB::table('employees')
                        ->join('gender', 'employees.gender_id','=', 'gender.gender_id')
                        ->join('type_employees', 'employees.type_id','=', 'type_employees.type_id')
                        ->join('provinces', 'employees.province_id','=', 'provinces.province_id')
                        ->join('employee_status', 'employees.status_id','=', 'employee_status.status_id')
                        ->get();
        $manage_employee=view('admin.pages.employee.employee')
        ->with('all_employee_info', $all_employee_info );
        return view('admin.index')
            ->with('admin.all_employee', $manage_employee);
        return view('admin/pages/employee/list_employee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['employee_name']=$request->employee_name;
        $data['employee_surname']=$request->employee_surname;
        $data['gender_id']=$request->gender_id;
        $data['type_id']=$request->type_id;
        $data['employee_salary']=$request->employee_salary;
        $data['employee_address']=$request->employee_address;
        $data['province_id']=$request->province_id;
        $data['city']=$request->city;
        $data['employee_email']=$request->employee_email;
        $data['employee_phone']=$request->employee_phone;
        $data['status_id']=$request->status_id;
        


        $image = $request->file('employee_image');
        if($image){
            $image_name = str_random(20);
            $text=strtolower( $image->getClientOriginalExtension());
            $image_full_name = $image_name.'_'.$text;
            $upload_patch='images/employee';
            $image_url = $upload_patch.$image_full_name;
            $success = $image -> move($upload_patch,$image_full_name);
            if($success){
                  $data['employee_image']=$image_url;
                    DB::table('employees')->insert($data);
                    Session::put('message','Employee Added successfuly...!');
                    return Redirect::to('/all-employee');
            }
         }
        $data['employee_image']='';
                DB::table('employees')->insert($data);
                Session::put('message','Employee added without image successfuly...!');
                return Redirect::to('/all-employee');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($employee_id)
    {
        $employee_info = DB::table('employees')
            ->where('employee_id', $employee_id)
            ->first(); 
            $employee_info=view('admin.pages.employee.update_employee')
            ->with('employee_info', $employee_info );
            return view('admin.index')
                ->with('admin.pages.employee.update_employee', $employee_info);
        return view('admin.pages.employee.update_employee');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employee_id)
    {

        $data = array();
        $data['employee_name']=$request->employee_name;
        $data['employee_surname']=$request->employee_surname;
        $data['gender_id']=$request->gender_id;
        $data['type_id']=$request->type_id;
        $data['employee_salary']=$request->employee_salary;
        $data['employee_address']=$request->employee_address;
        $data['province_id']=$request->province_id;
        $data['city']=$request->city;
        $data['employee_email']=$request->employee_email;
        $data['employee_phone']=$request->employee_phone;
        $data['status_id']=$request->status_id;
        
        

        $image = $request->file('employee_image');
        if($image){
            $image_name = str_random(20);
            $text=strtolower( $image->getClientOriginalExtension());
            $image_full_name = $image_name.'_'.$text;
            $upload_patch='images/employee';
            $image_url = $upload_patch.$image_full_name;
            $success = $image -> move($upload_patch,$image_full_name);
            if($success){
                  $data['employee_image']=$image_url;
                    DB::table('employees')->insert($data);
                    Session::put('message','Employee Added successfuly...!');
                   
            }
         }
        $data['employee_image']='';
                DB::table('employees')->insert($data);
                Session::put('message','Employee added without image successfuly...!');
               
        
                DB::table('employees')
                ->where('employee_id', $employee_id)
                ->update($data); 
       
                Session::get('message','ພະນັກງານໄດ້ແກ້ໄຂສຳເລັດແລ້ວ');
                return Redirect::to('/all-employee');
        // echo "this is update employee";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($employee_id)
    {
        DB::table('employees')
        ->where('employee_id', $employee_id)
        ->delete();
        Session::get('message', 'ສິນຄ້າຖຶກລົບແລ້ວ !');
        return Redirect:: to('/all-employee');
    }
}
