<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="vendor/logo.png" rel="icon" />
   <title>Invoice</title>

   <!-- Web Fonts ======================= -->
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

   <!-- Stylesheet ======================= -->
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/bootstrap.min.css') }}"/>
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/all.min.css') }}"/>
   <link rel="stylesheet" type="text/css" href="{{ asset('/public/stylesheet.css') }}"/>

   <style>
       /* Set page size to A4 */
       @media print {
           @page {
               size: A4;
               margin: 0;
           }
           body {
               width: 210mm;
               height: 297mm;
           }
       }


       .invoice-container {
           width: 210mm;
           height: 297mm;
           margin: auto;
           padding: 20px;
           border: 1px solid #ddd;
           margin-top: 8px;
       }

       .black-bg {
           text-align: center;
           background: black;
           color: white;
           width: 190px;
           margin: auto;
           border-radius: 20px;
           padding: 5px;
       }

       .op {
           padding: 0px;
           margin: 0px;
       }
   </style>
</head>

<body>
<!-- Container -->
<div class="container-fluid invoice-container">
   <main style="margin-top: 25px">
      <div class="row">
         <div>
             <address>
                <h6 style="text-align: center">বাংলাদেশ ইনস্টিটিউট অব ডার্মাটোলজি ,এস টি ডি এন্ড এইডস ,বিড্স</h6><br>
                <h6 style="text-align: center;margin-top:-15px">২৯/২, দারুসসালাম রোড ,মিরপুর -১, ঢাকা</h6>
                <h6 class="black-bg">রোগীর ব্যবস্থাপত্র</h6>
             </address>
         </div>
      </div>

      <div class="row">
        <div class="col-md-4" style="margin-left: 20px">
            <div class="row">
            <p class="op">Patient ID : {{ $patientprint->id }}</p>
            <p class="op">Patient Name : {{ $patientprint->name }}</p>
            <p class="op">Phone no : {{ $patientprint->telephone }}</p>
            <p class="op">Age : {{ $patientprint->age }} </p>
            <p class="op">Sex : {{ $patientprint->gender }}</p>
            </div>
        </div>
        <div class="col-md-4" style="margin-left: 25px">
            <div class="row">
                <p class="op">Doctor's Name: {{ $patientprint->consultent }}</p>
                <p class="op">Room No: {{ $patientprint->room_no }}</p>
                <p class="op">Receipt type: {{ $patientprint->type }} </p>
                <p class="op">Taka: {{ $patientprint->fees }}</p>
                <p class="op">Serial: {{ $count->slno }}</p>
            </div>
        </div>
        <div class="col-md-2" style="margin-left: 50px">
            <div class="row">
                <p class="op">Bill No: {{ $patientprint->bill_no }}</p>
                <p class="op">Reg No:{{ $patientprint->reg_no }} </p>
                <p class="op">Date: {{ now()->format('Y-m-d') }}</p>
                <p class="op">Time: {{ now()->setTimezone('Asia/Dhaka')->format('h:i:s A') }}</p>
                <p class="op">User: {{ $patientprint->username->name }}</p>
            </div>
        </div>
      </div>
   </main>

   <main>
    <table style="width: 100%;border: 1px solid;height: 700px; border-left-style: hidden;border-right-style: hidden;">
        <tr>
          <th rowspan="3" style="border: 1px solid"></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </table>
   </main>

   <!-- Footer -->
   <footer class="text-center">
    <div>
        <address>
           <p style="text-align: left"> টিকেট শুধুমাত্র একবার ব্যাবহার করা যাবে ও ওফেরৎযোগ্য ।</p>
           <p style="text-align: left;margin-top:-15px">যোগযোগ মোবাইল : ০১৭২১৪৯২৭৭০</p>
        </address>
    </div>
      <div class="btn-group btn-group-sm d-print-none">
         <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none">
            <i class="fa fa-print"></i> Print & Download</a>
      </div>
   </footer>
</div>

</body>
</html>
