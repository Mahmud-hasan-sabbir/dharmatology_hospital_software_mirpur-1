<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctorsetup;
use Illuminate\Support\Facades\Auth;
use App\Models\patient;
use App\Models\patientregistration;
use Exception;
use App\Models\setupserial;
use Illuminate\Support\Facades\DB;

class doctorsetupController extends Controller
{



    public function dashboard () {
        $todayincome = patientregistration::whereDate('created_at', date('Y-m-d'))->sum('fees');
        $todaypatient = patientregistration::whereDate('created_at', date('Y-m-d'))->count();

        $totalincome = patientregistration::sum('fees');
        $totalpatient = patientregistration::count();
        return view('dashboard',compact('todayincome','todaypatient','totalincome','totalpatient'));
    }

    public function doctorSetupIndex()
    {
        $alldoctor = doctorsetup::all();
        return view('layouts.pages.doctorsetup.doctorsetupindex', compact('alldoctor'));
    }

    public function doctorSetup()
    {
        return view('layouts.pages.doctorsetup.doctor_setup');
    }

    public function storeDoctorSetup(Request $request)
    {
        $doctorsetup = new doctorsetup();
        $doctorsetup->name = $request->name;
        $doctorsetup->department = $request->department;
        $doctorsetup->degree = $request->degree;
        $doctorsetup->phone = $request->phoneno;
        $doctorsetup->room_no = $request->roomno;
        $doctorsetup->visiting_hour_start = $request->visithourstart;
        $doctorsetup->visiting_hour_end = $request->visithourend;
        $doctorsetup->fee = $request->visitfee;
        $doctorsetup->status = $request->status;
        $doctorsetup->remarks = $request->remarks;
        $doctorsetup->user_id = Auth()->user()->id;
        $doctorsetup->save();

        $notification = ['messege' => 'Doctor Info save successfully', 'alert-type' => 'success'];
        return redirect()->route('doctor_setup_index')->with($notification);
    }

    public function doctorsetupEdit($id)
    {
        $doctorinfoedit = doctorsetup::where('id', $id)->first();
        return view('layouts.pages.doctorsetup.doctorsetupedit', compact('doctorinfoedit'));
    }

    public function updateDoctorInfo(Request $request, $id)
    {
        doctorsetup::find($id)->update([
            'name' => $request->name,
            'department' => $request->department,
            'degree' => $request->degree,
            'phone' => $request->phoneno,
            'room_no' => $request->roomno,
            'visiting_hour_start' => $request->visithourstart,
            'visiting_hour_end' => $request->visithourend,
            'fee' => $request->visitfee,
            'status' => $request->status,
            'remarks' => $request->remarks,
            'user_id' => Auth()->user()->id,
        ]);

        $notification = ['messege' => 'Doctor Info Update successfully', 'alert-type' => 'success'];
        return redirect()->route('doctor_setup_index')->with($notification);
    }

    public function doctorsetupDelete(Request $request)
    {
        $patient =  doctorsetup::find($request->id)->delete();
       return response()->json($patient);
    }

    // patient info

    public function patientInfo()
    {
        $patient = patient::all();
        return view('layouts.pages.patient.patientinfo', compact('patient'));
    }

    public function storePatientInfo(Request $request)
    {
        $patient = new patient();
        $patient->name = $request->patient_name;
        $patient->number = $request->phone_no;
        $patient->age = $request->age;
        $patient->gender = $request->gender;
        $patient->user_id = Auth()->user()->id;
        $patient->save();

        $notification = ['messege' => 'Patient info successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notification);
    }

    public function patientInfoEdit(Request $request)
    {
        $patient = patient::where('id', $request->id)->first();
        return response()->json($patient);
    }

    public function storePatientInfoedit(Request $request)
    {
        patient::find($request->hiddenid)->update([
            'name' => $request->patient_name,
            'number' => $request->phone_no,
            'age' => $request->age,
            'gender' => $request->gender,
            'user_id' => Auth()->user()->id,
        ]);

        $notification = ['messege' => 'Patient update successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notification);

    }

    public function patientInfoDelete(Request $request)
    {
       $patient =  patient::find($request->id)->delete();
       return response()->json($patient);
    }


    // patient priscription

    public function patientPriscriptionIndex()
    {
        return view('layouts.pages.patient.patientpriscription');
    }

    public function priscriptionCreate()
    {
        $alldoctor = doctorsetup::all();
        $allpatient = patient::all();
        return view('layouts.pages.patient.priscriptioncreate', compact('alldoctor', 'allpatient'));
    }

    public function patientRegistration()
    {
        $mrn = rand(111111,999999);
        $billno = rand(111111,999999);
        $regno = 'REG '.rand(111111,999999);
        $alldoctor = doctorsetup::all();
        return view('layouts.pages.patient.patientregistration',compact('mrn','billno','regno','alldoctor'));
    }

    public function storePatientregistration(Request $request)
    {
        if($request->hidden_type == 'save'){

            try{
                $storePatient = new patientregistration();
                $storePatient->mrn = $request->mrn;
                $storePatient->reg_no = $request->regno;
                $storePatient->bill_no = $request->billno;
                $storePatient->name = $request->name;
                $storePatient->fname = $request->fname;
                $storePatient->shift = $request->shift;
                $storePatient->dob = $request->dob;
                $storePatient->age = $request->age;
                $storePatient->gender = $request->gender;
                $storePatient->consultent = $request->consultent;
                $storePatient->occupation = $request->occupation;
                $storePatient->type = $request->receipttype;
                $storePatient->address = $request->address;
                $storePatient->area = $request->area;
                $storePatient->district = $request->district;
                $storePatient->telephone = $request->telephone;
                $storePatient->email = $request->email;
                $storePatient->room_no = $request->roomno;
                $storePatient->fees = $request->fees;
                $storePatient->discoutn = $request->discout;
                $storePatient->feestype = $request->ptype;
                $storePatient->billreprint = $request->billreprint;
                $storePatient->preview = $request->preview;
                $storePatient->printtype = $request->printtype;
                $storePatient->user_id = Auth()->user()->id;
                $storePatient->save();

                $dateToday = now()->format('Y-m-d');
                $serial = setupserial::where('dr_name', $request->consultent)
                ->whereDate('created_at', $dateToday)
                ->first();

                if ($serial) {
                    $serial->slno = $serial->slno + 1;
                    $serial->save();
                } else {
                    $serial = setupserial::create([
                        'dr_name' => $request->consultent,
                        'slno'    => 1,
                    ]);
                }
            }
            catch(Exception $e){
                $notification = ['messege' => 'Something went wrong', 'alert-type' => 'error'];
                return redirect()->back()->with($notification);

            }

            $patientprint = patientregistration::with('username')->where('id',$storePatient->id)->first();
            $count = setupserial::where('dr_name', $request->consultent)
            ->whereDate('created_at', date('Y-m-d'))
            ->first();
            return view('layouts.pages.patient.patientregistrationprint',compact('patientprint','count'));
        }
        else{


            if($request->hidden_id == null)
            {
                $id = rand(11,99);
            }else{
                $id = $request->hidden_id;
            }

            $patientprint = (object) $request->all();

            $username = Auth()->user()->name;

                $dateToday = now()->format('Y-m-d');
                $serial = setupserial::where('dr_name', $request->consultent)
                ->whereDate('created_at', $dateToday)
                ->first();

                if($serial){
                    $serial->slno = $serial->slno + 1;
                    $serial->save();
                }else{
                    $serial = new setupserial();
                    $serial->dr_name = $request->consultent;
                    $serial->slno = 1;
                    $serial->save();
                }


            $count = setupserial::where('dr_name', $request->consultent)
            ->whereDate('created_at', date('Y-m-d'))
            ->first();
            return view('layouts.pages.patient.patientregistrationprintprint',compact('patientprint','id','username','count'));

        }

    }


    public function searchPatientregistration(Request $request)
    {
        $id = $request->id;
        $patient = patientregistration::where('id',$id)->first();
        return response()->json($patient);
    }


    public function dailyReport()
    {
        return view('layouts.pages.patient.dailyreport');
    }

    public function dailyreportfilter(Request $request)
    {
        $dailyreport = patientregistration::whereDate('created_at', '>=', $request->formdate)
        ->whereDate('created_at', '<=', $request->todate)
        ->select('consultent', 'gender', DB::raw('COUNT(*) as totalpatient'), DB::raw('SUM(fees) as totalfees'))
        ->groupBy('consultent', 'gender')
        ->get();


        return view('layouts.pages.patient.dailyreportfilter', compact('dailyreport'));
    }

    public function dailyReportPrint(Request $request)
    {
        $dailyreport = patientregistration::whereDate('created_at', '>=', $request->formdate)
        ->whereDate('created_at', '<=', $request->todate)
        ->select('consultent', 'gender', DB::raw('COUNT(*) as totalpatient'), DB::raw('SUM(fees) as totalfees'))
        ->groupBy('consultent', 'gender')
        ->get();


        return view('layouts.pages.patient.dailyreportprint', compact('dailyreport'));
    }

    public function getDoctorRoom(Request $request)
    {
        $doctorroom = doctorsetup::where('name', $request->consultent)->first();
        return response()->json($doctorroom);
    }






}
