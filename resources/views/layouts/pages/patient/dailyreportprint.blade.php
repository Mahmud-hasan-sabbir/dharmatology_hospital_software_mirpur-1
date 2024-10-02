<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="vendor/logo.png" rel="icon" />
   <title>Invoice</title>

   <!-- Web Fonts -->
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

   <!-- Stylesheet -->
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
   <main>
      <div class="row">
         <div style="margin-top: 30px">
             <address>
                <h6 style="text-align: center">বাংলাদেশ ইনস্টিটিউট অব ডার্মাটোলজি ,এস টি ডি এন্ড এইডস ,বিডস</h6><br>
                <h6 style="text-align: center;margin-top:-15px">২৯/২, দারুসসালাম রোড ,মিরপুর -১, ঢাকা</h6>
                
             </address>
         </div>
      </div>
   </main>

   <main style="margin-top: 50px">
    <table class="table" id="data-table">
        <thead class="thead-dark">
            <tr>
               
                <th>Consultent</th>
                <th>Gender</th>
                <th>Total Patients</th>
                <th>Total Fees</th>
               
            </tr>
        </thead>
        <tbody id="tbody">

            @foreach($dailyreport as $report)
            <tr>
                <td>{{ $report->consultent }}</td>
                <td>{{ $report->gender }}</td>
                <td>{{ $report->totalpatient }}</td>
                <td>{{ $report->totalfees }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
   </main>

   <!-- Footer -->
   <footer class="text-center">
   
      <div class="btn-group btn-group-sm d-print-none">
         <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none">
            <i class="fa fa-print"></i> Print & Download</a>
      </div>
   </footer>
</div>

</body>
</html>
