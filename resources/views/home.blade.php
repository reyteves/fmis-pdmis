@extends('layouts.app')

<style>
    .flex-container {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-3 {
        display: flex;
        flex-direction: column;
    }

    .small-box,
    .inner {
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 20px;
        /* Add some spacing between boxes */
    }


    .small-box:hover {
        /* transform: scale(1.05); */

        transform: scale(1.05) rotateX(7deg) rotateY(-7deg);
        font-family: cursive, serif !important;
        transition: transform 0.1s ease;

        /* opacity: 0.8 !important; */
        filter: brightness(1.2) !important;
    }

    ,
</style>

@section('content')
    <section class="content"
        style="background-image: url('{{ asset('images/background.PNG') }}') !important; background-size: cover !important;">
        <div class="container-fluid panel panel default"
            style="background-image: url('{{ asset('images/background.PNG') }}') !important; background-size: cover !important;">

            <div class="panel-body">

                <!-- Small boxes (Stat box) -->
                <div class="row">

                    @if (Auth::check() && Auth::user()->role_id != 2)
                        <div class="col-lg-3 col-6 justify-content-center">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark equal-height-box">
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
                        <div class="col-lg-3 col-6 justify-content-center">
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
                                    </h3>
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

            {{-- second row --}}

            <div class="panel-body">

                <!-- Small boxes (Stat box) -->
                <div class="row">

                    @if (Auth::check() && Auth::user()->role_id != 2)
                        <div class="col-lg-3 col-6 justify-content-center">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark">
                                <div class="inner text-center">
                                    <h3 class="proposedCount"></h3>
                                    <p>Proposed</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 justify-content-center">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark">
                                <div class="inner text-center">
                                    <h3 class="ongoingCount"></h3>
                                    <p>On Going</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary text-dark">
                                <div class="inner text-center">
                                    <h3 class="continuingCount">
                                    </h3>
                                    <p>Continuing</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document-text"></i>
                                </div>
                            </div>
                        </div>

                </div>

                <div class="row">

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="terminatingCount">
                                </h3>
                                <p>Terminating</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="coordinatedCount">
                                </h3>
                                <p>Coordinated</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>

                        </div>
                    </div>
                    @endif

                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>

            {{-- Total Budget Expense --}}

            <div class="panel-body">
                <div class="panel-body">
                    @if (Auth::check() && Auth::user()->role_id != 2)
                    <h1>All Projects Budget Expenses</h1>
                    @elseif (Auth::check() && Auth::user()->role_id == 2)
                    <h1>My Projects Budget Expenses</h1>
                    @endif
                </div>

                {{-- start row --}}
                <div class="row">
                    <div class="col-lg-3 col-6 justify-content-center">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="getTotalCost"></h3>
                                <p>Total Project Expenses</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 justify-content-center">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="getDirectCost"></h3>
                                <p>Total Project Direct Costs</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 justify-content-center">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="getIndirectCost"></h3>
                                <p>Total Project Indirect Costs</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>

                    {{-- /end row --}}
                </div>

                <div style="width: 500px; height: 500px; display: flex; justify-content: center; align-items: center;" class="panel-body col-lg-3 col-6 justify-content-center">
                    <canvas id="myChart1"></canvas>
                </div>
            </div>



            @if (Auth::check() && Auth::user()->role_id != 2)
            

            <div class="panel-body">
                <div class="panel-body">
                    <h1>Region Project Budget Expenses</h1>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-6 justify-content-center">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="userRegionTotalCost"></h3>
                                <p>Metro Manila</p>
                                <p>Total Project Expenses</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 justify-content-center">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="userRegionDirectCost"></h3>
                                <p>Metro Manila</p>
                                <p>Total Project Direct Costs</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-6 justify-content-center">
                        <!-- small box -->
                        <div class="small-box bg-primary text-dark">
                            <div class="inner text-center">
                                <h3 class="userRegionIndirectCost"></h3>
                                <p>Metro Manila</p>
                                <p>Total Project Indirect Costs<</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-document-text"></i>
                            </div>
                        </div>
                    </div>
                    {{-- /end row --}}
                </div>
                <div style="width: 500px; height: 500px; display: flex; justify-content: center; align-items: center;" class="panel-body">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
@endif


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

            $.ajax({
                url: '/get-proposed-count', // Updated route
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.proposedCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

            $.ajax({
                url: '/get-ongoing-count', // Updated route
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.ongoingCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

            $.ajax({
                url: '/get-continuing-count', // Updated route
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.continuingCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

            $.ajax({
                url: '/get-terminating-count', // Updated route
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.terminatingCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });
            $.ajax({
                url: '/get-coordinated-count', // Updated route
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.coordinatedCount').text(data.count);
                    console.log(data.count);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });


            // budget javascript


            // total cost
            $.ajax({
                url: '/get-total-cost',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.getTotalCost').text(data.total_cost);
                    console.log(data.total_cost);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

            // direct cost
            $.ajax({
                url: '/get-direct-cost',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.getDirectCost').text(data.direct_cost);
                    console.log(data.direct_cost);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

            // indirect cost
            $.ajax({
                url: '/get-indirect-cost',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.getIndirectCost').text(data.indirect_cost);
                    console.log(data.indirect_cost);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });


            //total cost of the projects that has the same region as the user
            $.ajax({
                url: '/user-region-total-cost',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.userRegionTotalCost').text(data.total_cost);
                    console.log(data.total_cost);
                    $('.userRegion').text(data.region);
                    console.log(data.region);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

            //direct cost of the projects that has the same region as the user
            $.ajax({
                url: '/user-region-direct-cost',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.userRegionDirectCost').text(data.direct_cost);
                    console.log(data.direct_cost);
                    $('.userRegion').text(data.region);
                    console.log(data.region);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });


            //indirect cost of the projects that has the same region as the user
            $.ajax({
                url: '/user-region-indirect-cost',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Update the number of folders in the small box
                    $('.userRegionIndirectCost').text(data.indirect_cost);
                    console.log(data.indirect_cost);
                    $('.userRegion').text(data.region);
                    console.log(data.region);
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle error if necessary
                }
            });

         
   
// /end on document ready
        });
    </script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>


// Initialize variables to store direct and indirect costs
let directCost;
let indirectCost;

// AJAX request for direct cost
$.ajax({
    url: '/get-direct-cost',
    method: 'GET',
    dataType: 'json',
    success: function(data) {
        // Update the number of folders in the small box
        $('.getDirectCost').text(data.direct_cost);
        console.log(data.direct_cost);

        // Assign the value to the directCost variable
        directCost = data.direct_cost;

        // Check if both directCost and indirectCost are available
        if (directCost !== undefined && indirectCost !== undefined) {
            createPieChart();
        }
    },
    error: function(xhr, status, error) {
        console.log(error); // Handle error if necessary
    }
});

// AJAX request for indirect cost
$.ajax({
    url: '/get-indirect-cost',
    method: 'GET',
    dataType: 'json',
    success: function(data) {
        // Update the number of folders in the small box
        $('.getIndirectCost').text(data.indirect_cost);
        console.log(data.indirect_cost);

        // Assign the value to the indirectCost variable
        indirectCost = data.indirect_cost;

        // Check if both directCost and indirectCost are available
        if (directCost !== undefined && indirectCost !== undefined) {
            createPieChart();
        }
    },
    error: function(xhr, status, error) {
        console.log(error); // Handle error if necessary
    }
});

// Function to create the pie chart when both values are available
function createPieChart() {
    const ctx = document.getElementById('myChart1');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Direct Cost', 'Indirect Cost'],
            datasets: [{
                label: 'Direct and Indirect Costs',
                data: [directCost, indirectCost],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// pie chart 2

// Initialize variables to store userDirectCost and userIndirectCost
let userDirectCost;
let userIndirectCost;

// AJAX request for userDirectCost
$.ajax({
    url: '/user-region-direct-cost',
    method: 'GET',
    dataType: 'json',
    success: function(data) {
        // Update the number of folders in the small box
        $('.userRegionDirectCost').text(data.direct_cost);
        console.log(data.direct_cost);

        // Assign the value to the userDirectCost variable
        userDirectCost = data.direct_cost;

        // Check if both userDirectCost and userIndirectCost are available
        if (userDirectCost !== undefined && userIndirectCost !== undefined) {
            createPieChart2();
        }
    },
    error: function(xhr, status, error) {
        console.log(error); // Handle error if necessary
    }
});

// AJAX request for userIndirectCost
$.ajax({
    url: '/user-region-indirect-cost',
    method: 'GET',
    dataType: 'json',
    success: function(data) {
        // Update the number of folders in the small box
        $('.userIndirectCost').text(data.indirect_cost);
        console.log(data.indirect_cost);

        // Assign the value to the userIndirectCost variable
        userIndirectCost = data.indirect_cost;

        // Check if both userDirectCost and userIndirectCost are available
        if (userDirectCost !== undefined && userIndirectCost !== undefined) {
            createPieChart2();
        }
    },
    error: function(xhr, status, error) {
        console.log(error); // Handle error if necessary
    }
});

// Function to create the pie chart when both values are available
function createPieChart2() {
    const ctx = document.getElementById('myChart2');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['User Direct Cost', 'User Indirect Cost'],
            datasets: [{
                label: 'User Direct and Indirect Costs',
                data: [userDirectCost, userIndirectCost],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

</script>

@endsection
