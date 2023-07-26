@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid panel panel default">

            <div class="panel-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">



                    @if (Auth::check() && Auth::user()->role_id != 2)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark">
                                <div class="inner text-center">
                                    <h3 class="projectCount"></h3>
                                    <p>Total Number of Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                                <a href="/admin/folders" class="small-box-footer text-dark bg-primary">View Projects <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif

                    @if (Auth::check() && Auth::user()->role_id == 2)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark">
                                <div class="inner text-center">
                                    <h3 class="projectCount"></h3>
                                    <p>My Total Number of Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                                <a href="/admin/folders" class="small-box-footer text-dark bg-primary">View My Projects <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif


                    {{-- Admin can view total number of users in the dashboard --}}
                    @can('user_management_access')
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark">
                                <div class="inner text-center">
                                    <h3 class="userCount">
                                        <h3>
                                            <p>Total Number of Users</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="/admin/users" class="small-box-footer text-dark bg-primary">View Users <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endcan

                    <!-- /.row -->

                </div>
                <!-- /.panel-body -->
            </div>
    </section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {


            $.ajax({
                url: '/get-folder-count',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.projectCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });


            $.ajax({
                url: '/get-user-count',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.userCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });



        });
    </script>
@endsection
