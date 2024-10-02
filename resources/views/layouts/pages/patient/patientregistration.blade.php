<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top: -10px">
                <div class="card-header">
                    <h4 class="card-title">Patient Registration</h4>

                    <div class="row" style="margin-top: -25px">
                        <div class="col-md-2" style="margin-left: 840px">
                            <div class="row">
                                <input type="text"  name="filter_value" id="filtervalue" class="form-control" style=" height: 29px;text-align: center;width: 110px;">
                                <button type="submit" class="btn btn-success btn-sm" id="searchbtn" style=" margin-left: 122px;margin-top: -29px;width: 60px;">Search</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('store_patientregistration') }}" target="_blank" method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        <input type="hidden" name="hidden_type" id="hiddentype">
                        <input type="hidden" name="hidden_id" id="hiddenid">
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">MRN: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="mrn" id="mrn" class="form-control" value="{{ $mrn }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Reg no: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="regno" id="regno" class="form-control" value="{{ $regno }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Bill no: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="billno" id="billno" class="form-control" value="{{ $billno }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" required  name="name" id="name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">Fathers Name: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="fname" id="fname" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Consultent: </label>
                                    <div class="col-md-8">
                                       <select name="consultent" required id="consultent" class="form-control">
                                        <option value="">select consultent</option>
                                        @foreach ($alldoctor as $consultent)
                                        <option value="{{ $consultent->name }}">{{ $consultent->name }}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row mt-2">
                             <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">Age: </label>
                                    <div class="col-md-8">
                                        <input type="text" id="age" name="age" required class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-4">-->
                            <!--    <div class="row">-->
                            <!--        <label for="" class="col-md-4">DOB: </label>-->
                            <!--        <div class="col-md-8">-->
                            <!--            <input type="date" id="dob"  name="dob"  class="form-control" value="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Gender: </label>
                                    <div class="col-md-8">
                                        <select name="gender" required id="gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                             <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4" >Shift: </label>
                                    <div class="col-md-8" style="width: 200px">
                                        <input type="radio" value="Morning" id="shiftm" name="shift"><span style="margin-left: 2px">Morning</span>
                                        <input type="radio" value="Evening" id="shifte" name="shift"> <span style="margin-left: 2px">Evening</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Address: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="address" id="address" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">Occupation: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="occupation" id="occupation" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Receipt type: </label>
                                    <div class="col-md-8">
                                       <select name="receipttype" id="retype" class="form-control">
                                        <option value="Outdoor Registration Fee (Professor)">Outdoor Registration Fee (Professor)</option>
                                        <option value="Outdoor Registration Fee (Consultent)">Outdoor Registration Fee (Consultent)</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">City/Area: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="area" id="cityarea" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">Email: </label>
                                    <div class="col-md-8">
                                        <input type="email"  name="email" id="email" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Consultation fees: </label>
                                    <div class="col-md-8">
                                        <input type="text" required readonly name="fees" id="fees" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-4">-->
                            <!--    <div class="row">-->
                            <!--        <label for="" class="col-md-4">District: </label>-->
                            <!--        <div class="col-md-8">-->
                            <!--            <input type="text"  name="district" id="district" class="form-control" value="">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Telephone: </label>
                                    <div class="col-md-8">
                                        <input type="text" required name="telephone" id="telephone" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">Discout: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="discout" id="discount" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Room no: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="roomno" required id="roomno" readonly class="form-control" value="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--<div class="row mt-2">-->


                        <!--    <div class="col-md-4">-->
                        <!--        <div class="row">-->
                        <!--            <label for="" class="col-md-4">type: </label>-->
                        <!--            <div class="col-md-8">-->
                        <!--                <input type="checkbox"  id="tpaid" name="ptype" value="Paid"> Paid-->
                        <!--                <input type="checkbox" id="tunpaid" name="ptype" value="Unpaid"> Unpaid-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">Bill Reprint: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="billreprint" id="billreprint"  class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for=""  class="col-md-4">Preview: </label>
                                    <div class="col-md-8">
                                        <input type="text"  name="preview" id="preview" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label for="" class="col-md-4">type: </label>
                                    <div class="col-md-8">
                                        <input type="checkbox" id="print" name="printtype" value="print"> Print
                                        <input type="checkbox"  id="printre" name="printtype" value="printreceipt"> printReceipt
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row mt-3">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div style="float: inline-end">
                                    <button type="submit" id="print_btn" class="btn btn-sm btn-success">Print</button>
                                    <button type="submit" id="save_btn" class="btn btn-sm btn-primary">Save</button>
                                    <button type="button" id="close" class="btn btn-sm btn-info">Clear</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

   <!-- Modal -->


</x-app-layout>

<script>
    $(document).ready(function(){
        $('#close').click(function(){
           $('#myform')[0].reset();
           $('#filtervalue').val('');
        });
    });
</script>

<script>
     $('#save_btn').click(function() {
            $('#hiddentype').val('save');

        });
        $('#print_btn').click(function() {
            $('#hiddentype').val('print');

        });

        $('#searchbtn').click(function(){
    var filtervalue = $('#filtervalue').val();
    $.ajax({
        url: "{{ route('search_patientregistration') }}",
        type: "GET",
        data: {id: filtervalue},
        success: function(data){
            console.log(data);

            // Check if data is empty
            if ($.isEmptyObject(data)) {
                alert('Patient not registered');
            } else {
                alert('Patient already registered');

                // Populate the form fields with data
                $('#hiddenid').val(data.id);
                $('#mrn').val(data.mrn);
                $('#regno').val(data.reg_no);
                $('#billno').val(data.bill_no);
                $('#name').val(data.name);
                $('#fname').val(data.fname);
                $('#shiftm').val(data.shift).prop('checked', true);
                $('#shifte').val(data.shift).prop('checked', true);
                $('#dob').val(data.dob);
                $('#age').val(data.age);
                $('#gender').val(data.gender);
                $('#consultent').val(data.consultent).prop('selected', true);
                $('#occupation').val(data.occupation);
                $('#retype').val(data.type);
                $('#address').val(data.address);
                $('#cityarea').val(data.area);
                $('#district').val(data.district);
                $('#telephone').val(data.telephone);
                $('#email').val(data.email);
                $('#roomno').val(data.room_no);
                $('#fees').val(data.fees);
                $('#discount').val(data.discount);

                // Handling the fees type
                if (data.feestype === 'Paid') {
                    $('#tpaid').prop('checked', true);
                    $('#tunpaid').prop('checked', false);
                } else if (data.feestype === 'Unpaid') {
                    $('#tpaid').prop('checked', false);
                    $('#tunpaid').prop('checked', true);
                }

                $('#billreprint').val(data.billreprint);
                $('#preview').val(data.preview);

                // Handling print type
                if (data.printtype === 'print') {
                    $('#print').prop('checked', true);
                    $('#printre').prop('checked', false);
                } else if (data.printtype === 'printreceipt') {
                    $('#print').prop('checked', false);
                    $('#printre').prop('checked', true);
                }
            }
        }
    });
});

</script>
<script>
    $('#retype').on('change',function(){
        var type = $('#retype').val();
        if(type == 'Outdoor Registration Fee (Professor)'){
            $('#fees').val('300');
        }else{
            $('#fees').val('200');
        }
    });

</script>
<script>
    $(document).on('change', '#consultent', function() {
        var consultent = $(this).val();
        $.ajax({
            url: "{{ route('get_doctor_room') }}",
            type: "GET",
            data: {consultent: consultent},
            success: function(data) {
                $('#roomno').val(data.room_no);

            }
        });

    });
</script>









