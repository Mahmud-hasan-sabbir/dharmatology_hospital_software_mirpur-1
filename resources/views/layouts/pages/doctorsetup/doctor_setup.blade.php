<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Doctor info setup</h4>
                   
                    <div class="flex-shrink-0">
                        <a href="{{ route('doctor_setup_index') }}" class="btn btn-sm btn-success">
                            <i class="ri-add-line align-middle me-1"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('store_doctor_setup') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Doctor Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Doctor Department: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="department" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Doctor Degree: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="degree" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Phone No: </label>
                                    <div class="col-md-8">
                                        <input type="number" name="phoneno" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Room no: </label>
                                    <div class="col-md-8">
                                        <input type="number" name="roomno" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">visit fee: </label>
                                    <div class="col-md-8">
                                        <input type="number" name="visitfee" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">visit-hour-start: </label>
                                    <div class="col-md-8">
                                        <input type="time" name="visithourstart" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">visit-hour-end: </label>
                                    <div class="col-md-8">
                                        <input type="time" name="visithourend" id="doctor_name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">status: </label>
                                    <div class="col-md-8">
                                        <select name="status" class="form-control">
                                            <option value="Indor">In-dor</option>
                                            <option value="Outdor">Out-dor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Remarks: </label>
                                    <div class="col-md-8">
                                        <textarea name="remarks" id="" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 text-start">
                                <button type="submit" class="btn btn-primary" style="float: inline-end">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
