@extends('layouts.app')

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading text-right">
            {{-- <a href="{{ route('admin.folders.index') }}" class="btn btn-xs btn-primary">Back</a> --}}

            <button class="btn btn-primary" onclick="window.location.href='{{ route('admin.folders.index') }}'">Back</button>

          
                <button class="btn btn-info" onclick="window.print()">Print</button>
            
        </div>

        <div class="panel-body">

            @include('admin.folders.tab_edit.view')

        </div>
    </div>

@stop


{{-- @section('javascript')
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
@endsection --}}
