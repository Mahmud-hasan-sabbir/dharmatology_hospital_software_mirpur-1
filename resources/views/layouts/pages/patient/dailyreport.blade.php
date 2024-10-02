<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top: -10px">
                <div class="card-header">
                    <h4 class="card-title">Daily Report</h4>
                    <form action="{{ route('daily_report_print') }}" target="_blank" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="formdate" id="formdatep">
                        <input type="hidden" name="todate" id="todatep">
                        <button class="btn btn-success btn-sm" id="print" style="float: inline-end;margin-top:-30px">Print</button>
                    </form>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <label for="" class="col-md-4">form date</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" id="formdate" style="margin-left: -50px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <label for="" class="col-md-4" style="margin-left: -30px">To date</label>
                                <div class="col-md-8">
                                    <input type="date" id="todate" class="form-control" style="margin-left: -50px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <button class="btn btn-success btn-sm" id="filter" style="width: 70px;margin-left:-30px">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <table class="table" id="data-table">
                            <thead class="thead-dark" style="display: none">
                                <tr>
                                   
                                    <th>Consultent</th>
                                    <th>Gender</th>
                                    <th>Total Patients</th>
                                    <th>Total Fees</th>
                                   
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


</x-app-layout>


<script>
    $(document).on('click', '#filter', function(){
       var formdate = $('#formdate').val(); 
       var todate = $('#todate').val(); 
     

       $.ajax({
           url: '{{ route('daily_report_filter') }}', 
           method: 'GET',
           dataType: "html",
           data: { formdate, todate },
           success: function(response){
               console.log(response); 
               
               $('#tbody').html(response); 
               
               if (response.trim() === '') {
                   $('#data-table thead').hide(); 
               } else {
                   $('#data-table thead').show(); 
                   $('#tbody').html(response); 
               }
           }
       });
   });
</script>


<script>
    $(document).on('click', '#print', function(){
       var formdate = $('#formdate').val(); 
       var todate = $('#todate').val(); 
         $('#formdatep').val(formdate);
            $('#todatep').val(todate);
     

      
   });
</script>










