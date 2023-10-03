<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Gantt Chart</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .chartMenu {
            width: calc(100vw);
            height: 40px;
            background: #1A1A1A;
            color: rgba(54, 162, 235, 1);
        }

        .chartMenu p {
            padding: 10px;
            font-size: 20px;
        }

        .chartCard {
            width: 100vw;
            height: calc(100vh - 40px);
            background: rgba(54, 162, 235, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chartBox {
            /* width: 700px; */
            width: 50vw;
            padding: 20px;
            border-radius: 20px;
            border: solid 3px rgba(54, 162, 235, 1);
            background: white;
        }
    </style>
</head>

<body>
    <div class="panel" style="margin-bottom: 25px">
        <label for="gantt_project_name" class="col-form-label text-md-end">Project Name</label>
        {{ Form::text('gantt_project_name', $folder->gantt->gantt_project_name, ['class' => 'form-control', 'id' => 'gantt_project_name']) }}


        <!-- Task 1 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_1" class="col-form-label text-md-end">Task 1</label>
                {{ Form::text('task_1', $folder->gantt->task_1, ['class' => 'form-control', 'id' => 'task_1']) }}
            </div>
            <div class="col-md-4">
                <label for="task_1_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_1_start_date', $folder->gantt->task_1_start_date, ['class' => 'form-control', 'id' => 'task_1_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_1_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_1_end_date', $folder->gantt->task_1_end_date, ['class' => 'form-control', 'id' => 'task_1_end_date']) }}
            </div>
        </div>

        <!-- Task 2 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_2" class="col-form-label text-md-end">Task 2</label>
                {{ Form::text('task_2', $folder->gantt->task_2, ['class' => 'form-control', 'id' => 'task_2']) }}
            </div>
            <div class="col-md-4">
                <label for="task_2_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_2_start_date', $folder->gantt->task_2_start_date, ['class' => 'form-control', 'id' => 'task_2_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_2_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_2_end_date', $folder->gantt->task_2_end_date, ['class' => 'form-control', 'id' => 'task_2_end_date']) }}
            </div>
        </div>

        <!-- Task 3 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_3" class="col-form-label text-md-end">Task 3</label>
                {{ Form::text('task_3', $folder->gantt->task_3, ['class' => 'form-control', 'id' => 'task_3']) }}
            </div>
            <div class="col-md-4">
                <label for="task_3_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_3_start_date', $folder->gantt->task_3_start_date, ['class' => 'form-control', 'id' => 'task_3_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_3_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_3_end_date', $folder->gantt->task_3_end_date, ['class' => 'form-control', 'id' => 'task_3_end_date']) }}
            </div>
        </div>

        <!-- Task 4 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_4" class="col-form-label text-md-end">Task 4</label>
                {{ Form::text('task_4', $folder->gantt->task_4, ['class' => 'form-control', 'id' => 'task_4']) }}
            </div>
            <div class="col-md-4">
                <label for="task_4_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_4_start_date', $folder->gantt->task_4_start_date, ['class' => 'form-control', 'id' => 'task_4_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_4_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_4_end_date', $folder->gantt->task_4_end_date, ['class' => 'form-control', 'id' => 'task_4_end_date']) }}
            </div>
        </div>

        <!-- Task 5 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_5" class="col-form-label text-md-end">Task 5</label>
                {{ Form::text('task_5', $folder->gantt->task_5, ['class' => 'form-control', 'id' => 'task_5']) }}
            </div>
            <div class="col-md-4">
                <label for="task_5_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_5_start_date', $folder->gantt->task_5_start_date, ['class' => 'form-control', 'id' => 'task_5_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_5_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_5_end_date', $folder->gantt->task_5_end_date, ['class' => 'form-control', 'id' => 'task_5_end_date']) }}
            </div>
        </div>

        <!-- Task 6 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_6" class="col-form-label text-md-end">Task 6</label>
                {{ Form::text('task_6', $folder->gantt->task_6, ['class' => 'form-control', 'id' => 'task_6']) }}
            </div>
            <div class="col-md-4">
                <label for="task_6_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_6_start_date', $folder->gantt->task_6_start_date, ['class' => 'form-control', 'id' => 'task_6_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_6_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_6_end_date', $folder->gantt->task_6_end_date, ['class' => 'form-control', 'id' => 'task_6_end_date']) }}
            </div>
        </div>

        <!-- Task 7 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_7" class="col-form-label text-md-end">Task 7</label>
                {{ Form::text('task_7', $folder->gantt->task_7, ['class' => 'form-control', 'id' => 'task_7']) }}
            </div>
            <div class="col-md-4">
                <label for="task_7_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_7_start_date', $folder->gantt->task_7_start_date, ['class' => 'form-control', 'id' => 'task_7_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_7_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_7_end_date', $folder->gantt->task_7_end_date, ['class' => 'form-control', 'id' => 'task_7_end_date']) }}
            </div>
        </div>


        <!-- /end panel -->
    </div>

    <div class="chartCard">
        <div class="chartBox">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js">
    </script>
    <script>
        // setup
        const data = {
            labels: ['Planning', 'Analysis', 'Design', 'Implementation', 'Testing', 'Deployment', 'Maintenance'],
            datasets: [{
                label: 'Software Project',
                data: [
                    ['2023-01-01', '2023-02-01'],
                    ['2023-02-01', '2023-03-01'],
                    ['2023-03-01', '2023-04-01'],
                    ['2023-04-01', '2023-05-01'],
                    ['2023-05-01', '2023-06-01'],
                    ['2023-06-01', '2023-07-01'],
                    ['2023-07-01', '2023-08-01']
                ],

                backgroundColor: [
                    'rgba(255, 26, 104, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(0, 0, 0, 1)'
                ],
                barPercentage: 0.2
            }]
        };

        // config
        const config = {
            type: 'bar',
            data,
            options: {
                indexAxis: 'y',
                scales: {
                    x: {
                        min: '2023-01-01',
                        type: 'time',
                        time: {
                            unit: 'month',
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(context) {
                                // Display the task name as the tooltip title
                                return data.labels[context[0].dataIndex];
                            },
                            label: function(context) {
                                // You can customize the tooltip label here if needed
                                return `Start: ${context.parsed.x.toLocaleDateString()} - End: ${context.parsed.y.toLocaleDateString()}`;
                            },
                        },
                        // You can further customize the tooltip appearance here
                    },
                },
            },
        };

        // render init block
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        // Get project name input element
        const projectName = document.getElementById('gantt_project_name');

        // update project name label: 'Project Tasks',
        projectName.addEventListener('input', function() {
            // Get the new task name from the input
            const newTaskName = projectName.value;

            // Update the corresponding project name
            config.data.datasets[0].label = newTaskName;

            // Update the chart
            myChart.update();
        });

        // Create a function to update a specific task label
        function updateTaskLabel(taskIndex, newValue) {
            // Update the label in the labels array
            config.data.labels[taskIndex] = newValue;

            // Update the chart
            myChart.update();
        }

        // Get each input element
        const taskInputs = [
            document.getElementById('task_1'),
            document.getElementById('task_2'),
            document.getElementById('task_3'),
            document.getElementById('task_4'),
            document.getElementById('task_5'),
            document.getElementById('task_6'),
            document.getElementById('task_7')
        ];

        // Attach an event listener to each input element
        taskInputs.forEach((input, index) => {
            input.addEventListener('input', function() {
                // Get the new task name from the input
                const newTaskName = input.value;

                // Update the corresponding task label
                updateTaskLabel(index, newTaskName);
            });
        });



        // Create a function to update a specific start dates or end dates
        function updateTaskDates(taskIndex, newStartDate, newEndDate) {
            // Update the label in the labels array
            config.data.datasets[0].data[taskIndex] = [newStartDate, newEndDate];

            // Update the chart
            myChart.update();
        }

        // Get each input element
        const taskDateInputs = [
            [document.getElementById('task_1_start_date'), document.getElementById('task_1_end_date')],
            [document.getElementById('task_2_start_date'), document.getElementById('task_2_end_date')],
            [document.getElementById('task_3_start_date'), document.getElementById('task_3_end_date')],
            [document.getElementById('task_4_start_date'), document.getElementById('task_4_end_date')],
            [document.getElementById('task_5_start_date'), document.getElementById('task_5_end_date')],
            [document.getElementById('task_6_start_date'), document.getElementById('task_6_end_date')],
            [document.getElementById('task_7_start_date'), document.getElementById('task_7_end_date')]
        ];

        // Attach an event listener to each input element
        taskDateInputs.forEach((input, index) => {
            input.forEach((dateInput, dateIndex) => {
                dateInput.addEventListener('input', function() {
                    // Get the new task name from the input
                    const newTaskStartDate = taskDateInputs[index][0].value;
                    const newTaskEndDate = taskDateInputs[index][1].value;

                    // Update the corresponding task label
                    updateTaskDates(index, newTaskStartDate, newTaskEndDate);
                });
            });
        });


        // update chart on page load based on input values
        // Function to update the chart with initial values
        function updateChartWithInitialValues() {
            // Get project name from input element
            const initialProjectName = document.getElementById('gantt_project_name').value;

            // Update the project name label in the chart
            config.data.datasets[0].label = initialProjectName;

            // Update task names from input elements
            taskInputs.forEach((input, index) => {
                const initialTaskName = input.value;
                updateTaskLabel(index, initialTaskName);
            });

            // Update task dates from input elements
            taskDateInputs.forEach((input, index) => {
                const initialStartDate = input[0].value;
                const initialEndDate = input[1].value;
                updateTaskDates(index, initialStartDate, initialEndDate);
            });

            // Update the chart
            myChart.update();
        }

        // Call the function to update the chart with initial values on page load
        updateChartWithInitialValues();


        // Function to update the pie chart
        function updatePieChart(directCost, indirectCost) {
            const pieData = {
                labels: ['Direct Cost', 'Indirect Cost'],
                datasets: [{
                    data: [directCost, indirectCost],
                    backgroundColor: ['#FF5733', '#3399FF'], // Define colors for the two segments
                }, ],
            };

            const pieOptions = {
                responsive: true,
            };

            // Destroy the existing chart if it exists
            if (myPieChart) {
                myPieChart.destroy();
            }

            // Create a new pie chart
            myPieChart = new Chart(document.getElementById('myPieChart'), {
                type: 'pie',
                data: pieData,
                options: pieOptions,
            });
        }

        // Perform the two AJAX requests and update the pie chart
        $.ajax({
            url: '/get-direct-cost',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Update the number of folders in the small box
                $('.getDirectCost').text(data.direct_cost);
                console.log(data.direct_cost);

                // Perform the second AJAX request for indirect cost
                $.ajax({
                    url: '/get-indirect-cost',
                    method: 'GET',
                    dataType: 'json',
                    success: function(indirectData) {
                        // Update the number of folders in the small box
                        $('.getIndirectCost').text(indirectData.indirect_cost);
                        console.log(indirectData.indirect_cost);

                        // Call the function to update the pie chart with both values
                        updatePieChart(data.direct_cost, indirectData.indirect_cost);
                    },
                    error: function(xhr, status, error) {
                        console.log(error); // Handle error if necessary
                    },
                });
            },
            error: function(xhr, status, error) {
                console.log(error); // Handle error if necessary
            },
        });
    </script>
</body>

</html>
