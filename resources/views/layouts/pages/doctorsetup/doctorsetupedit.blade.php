<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Doctor info setup update</h4>
                    <div class="flex-shrink-0">
                        <a href="{{ route('doctor_setup_index') }}" class="btn btn-sm btn-success">
                            <i class="ri-add-line align-middle me-1"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('update_doctor_info',$doctorinfoedit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Doctor Name: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Doctor Department: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="department" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->department }}">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Doctor Degree: </label>
                                    <div class="col-md-8">
                                        <input type="text" name="degree" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->degree }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Phone No: </label>
                                    <div class="col-md-8">
                                        <input type="number" name="phoneno" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->phone }}">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Room no: </label>
                                    <div class="col-md-8">
                                        <input type="number" name="roomno" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->room_no }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">visit fee: </label>
                                    <div class="col-md-8">
                                        <input type="number" name="visitfee" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->fee }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">visit-hour-start: </label>
                                    <div class="col-md-8">
                                        <input type="time" name="visithourstart" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->visiting_hour_start }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">visit-hour-end: </label>
                                    <div class="col-md-8">
                                        <input type="time" name="visithourend" id="doctor_name" class="form-control" value="{{ $doctorinfoedit->visiting_hour_end }}">
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
                                            <option value="Indor" {{ $doctorinfoedit->status == 'Indor' ? 'selected' : '' }}>In-dor</option>
                                            <option value="Outdor" {{ $doctorinfoedit->status == 'Outdor' ? 'selected' : '' }}>Out-dor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4">Remarks: </label>
                                    <div class="col-md-8">
                                        <textarea name="remarks" id="" cols="30" rows="2" class="form-control">{{ $doctorinfoedit->remarks }}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 text-start">
                                <button type="submit" class="btn btn-primary" style="float: inline-end">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
