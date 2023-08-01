@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li>
                <a href="{{ url('/') }}">
                    <span style="color: white;"><i class="fa fa-user"></i>&nbsp;</span>
                    <span class="title">
                        @switch(Auth::user()->role_id)
                            @case(1)
                                Administrator
                            @break

                            @case(2)
                                Proponent
                            @break

                            @case(3)
                                Evaluator
                            @break

                            @default
                                Unknown Role
                        @endswitch
                    </span>
                </a>
            </li>


            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    {{-- <i class="fa fa-wrench"></i> --}}
                    <i class="fa fa-lightbulb-o"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>


            </li>

            @can('folder_access')
                <li class="{{ $request->segment(2) == 'folders' ? 'active' : '' }}">
                    <a href="{{ route('admin.folders.index') }}">
                        {{-- <i class="fa fa-gears"></i> --}}
                        <i class="fa fa-folder"></i>

                        {{-- if proponent show My Projects else the label is Projects --}}
                        @if (Auth::check() && Auth::user()->role_id != 2)
                            <span class="title">@lang('quickadmin.folders.title')</span>
                        @else
                            <span class="title">My Projects</span>
                        @endif

                    </a>
                </li>
            @endcan

            @can('file_access')
                <li class="{{ $request->segment(2) == 'files' ? 'active' : '' }}">
                    <a href="{{ route('admin.files.index') }}">
                        {{-- <i class="fa fa-gears"></i> --}}
                        <i class="fa fa-file"></i>
                        
                        @if (Auth::check() && Auth::user()->role_id != 2)
                        <span class="title">@lang('quickadmin.files.title')</span>
                        @else
                        <span class="title">My Project Files</span>
                        @endif

                    </a>
                </li>
            @endcan



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>


            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span class="title">@lang('quickadmin.user-management.title')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">
                                        @lang('quickadmin.roles.title')
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-user"></i>
                                    <span class="title">
                                        @lang('quickadmin.users.title')
                                    </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
