{{-- @inject('request', 'Illuminate\Http\Request') --}}
@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid panel panel default">

            <div class="panel-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 id="projectCount"><h3>
                                <p>Total Number of Projects</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                            <a href="/admin/folders" class="small-box-footer text-dark bg-primary">View Projects <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

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
                    $('#projectCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });
        });
    </script>
@endsection
