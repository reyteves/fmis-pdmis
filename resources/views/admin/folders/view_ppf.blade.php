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
            <style>    
                    .header {
                        display: flex;
                        align-items: center;
                        margin-bottom: 20px;
                    }
                
                    .logo {
                        width: 100px;
                        /* Adjust the width of the logo as needed */
                        height: 100px;
                        /* Adjust the height of the logo as needed */
                        margin-right: 20px;
                    }
                
                    .header-content {
                        /* Add any additional styling for the header content here */
                    }
                
                    .header p {
                        /* Your existing styles for the header paragraphs */
                        /* You may adjust font-size or other properties as needed */
                        margin-bottom: 10px !important;
                        color: rgb(0, 0, 0);
                        font-family: "Times New Roman";
                        font-size: medium;
                        font-style: normal;
                        font-variant-ligatures: normal;
                        font-variant-caps: normal;
                        font-weight: 400;
                        letter-spacing: normal;
                        orphans: 2;
                        text-indent: 0px;
                        text-transform: none;
                        widows: 2;
                        word-spacing: 0px;
                        -webkit-text-stroke-width: 0px;
                        white-space: normal;
                        background-color: rgb(255, 255, 255);
                        text-decoration-thickness: initial;
                        text-decoration-style: initial;
                        text-decoration-color: initial;
                        text-align: center;
                    }
                
                    .header p span {
                        /* Your existing styles for the span elements */
                        font-family: "Trebuchet MS", Helvetica, sans-serif;
                    }
                
                    .header p span[style*="font-family: Impact"] {
                        /* Your existing styles for the span with font-family Impact */
                        font-family: Impact, Charcoal, sans-serif;
                    }
                
                    .header p strong {
                        /* Your existing styles for the strong elements */
                        font-weight: 700;
                    }
                
                   
                </style>

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
