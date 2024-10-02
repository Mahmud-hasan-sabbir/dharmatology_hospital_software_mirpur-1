<x-app-layout>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!--Grid Data-->
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Doctor Setup List</h4>
                    <div class="flex-shrink-0">
                        <a href="{{ route('doctor_setup') }}" class="btn btn-sm btn-success">
                            <i class="ri-add-line align-middle me-1"></i> Doctor Setup
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card" style="margin-left: 1px;margin-right:1px">
                        <table class="table table-nowrap table-striped mb-0" id="myTable">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Phone no</th>
                                    <th scope="col">room no</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">start-time</th>
                                    <th scope="col">end-time</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($alldoctor as $key => $doctorSetup)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $doctorSetup->name }}</td>
                                    <td>{{ $doctorSetup->department }}</td>
                                    <td>{{ $doctorSetup->phone }}</td>
                                    <td>{{ $doctorSetup->room_no }}</td>
                                    <td>{{ $doctorSetup->fee }}</td>
                                    <td>{{ $doctorSetup->status }}</td>
                                    <td>{{ $doctorSetup->visiting_hour_start }}</td>
                                    <td>{{ $doctorSetup->visiting_hour_end }}</td>
                                    <td>
                                        <a href="{{ route('doctorsetup_edit',['id' => $doctorSetup->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" data-id="{{ $doctorSetup->id }}" class="btn btn-sm btn-danger delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function(){
        $('.delete').click(function(){
            var id = $(this).data('id');
           

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('doctorsetup_delete') }}",
                        type: "GET", 
                        data: {id:id},
                        success: function(data){
                            Swal.fire(
                                'Deleted!',
                                'The record has been deleted.',
                                'success'
                            );
                            location.reload();
                        },
                        error: function(err){
                            // Handle errors
                            Swal.fire(
                                'Error!',
                                'There was an issue deleting the record.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>


