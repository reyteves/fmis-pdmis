@extends('layouts.app')

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

@section('content')
  
    <div class="panel panel-default">
       
        <div class="panel-body">
       

            <ul class="nav nav-tabs text-lg bg-gray-100">

                <li class="nav-item" active>
                    <a id="viewLink" class="nav-link" data-toggle="tab" href="#view">View</a>
                </li>

              
            </ul>

            <div class="tab-content panel-body">
              
                <div class="tab-pane" id="view">
                    @include('admin.folders.tab_edit.view')
                </div>
            </div>


        </div>
    </div>

    {{-- {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-success', 'id' => 'updateButton']) !!} --}}
    {{-- {!! Form::close() !!} --}}
@stop


@section('javascript')
    <script>
        $(document).ready(function() {
          
  // Toggle visibility of the update button when a tab is clicked
            $('.nav-link').click(function() {
                var tabId = $(this).attr('href');
                if (tabId !== '#view') {
                    $('#updateButton').show();
                } else {
                    $('#updateButton').hide();
                }
            });
        });
    </script>
@endsection
