@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')



@section('content')
{{-- <div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">@lang('quickadmin.qa_dashboard')</div>

            <div class="panel-body">
                @lang('quickadmin.qa_dashboard_text')
            </div>
        </div>
    </div>
</div> --}}

<section class="content">
    <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h5>Total Number of Folders: <span id="projectCount"></span></h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/admin/folders" class="small-box-footer">View Projects <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        
        <!-- /.row -->

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

