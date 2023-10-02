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
        {{ Form::text('gantt_project_name', 'Project Name', ['class' => 'form-control', 'id' => 'gantt_project_name']) }}
       

        <!-- Task 1 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_1" class="col-form-label text-md-end">Task 1 Name</label>
                {{ Form::text('task_1', 'Task 1 Name', ['class' => 'form-control', 'id' => 'task_1']) }}
            </div>
            <div class="col-md-4">
                <label for="task_1_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_1_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_1_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_1_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_1_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_1_end_date']) }}
            </div>
        </div>

        <!-- Task 2 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_2" class="col-form-label text-md-end">Task 2 Name</label>
                {{ Form::text('task_2', 'Task 2 Name', ['class' => 'form-control', 'id' => 'task_2']) }}
            </div>
            <div class="col-md-4">
                <label for="task_2_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_2_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_2_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_2_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_2_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_2_end_date']) }}
            </div>
        </div>

        <!-- Task 3 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_3" class="col-form-label text-md-end">Task 3 Name</label>
                {{ Form::text('task_3', 'Task 3 Name', ['class' => 'form-control', 'id' => 'task_3']) }}
            </div>
            <div class="col-md-4">
                <label for="task_3_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_3_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_3_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_3_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_3_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_3_end_date']) }}
            </div>
        </div>

        <!-- Task 4 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_4" class="col-form-label text-md-end">Task 4 Name</label>
                {{ Form::text('task_4', 'Task 4 Name', ['class' => 'form-control', 'id' => 'task_4']) }}
            </div>
            <div class="col-md-4">
                <label for="task_4_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_4_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_4_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_4_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_4_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_4_end_date']) }}
            </div>
        </div>

        <!-- Task 5 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_5" class="col-form-label text-md-end">Task 5 Name</label>
                {{ Form::text('task_5', 'Task 5 Name', ['class' => 'form-control', 'id' => 'task_5']) }}
            </div>
            <div class="col-md-4">
                <label for="task_5_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_5_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_5_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_5_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_5_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_5_end_date']) }}
            </div>
        </div>

        <!-- Task 6 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_6" class="col-form-label text-md-end">Task 6 Name</label>
                {{ Form::text('task_6', 'Task 6 Name', ['class' => 'form-control', 'id' => 'task_6']) }}
            </div>
            <div class="col-md-4">
                <label for="task_6_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_6_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_6_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_6_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_6_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_6_end_date']) }}
            </div>
        </div>

        <!-- Task 7 -->
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4">
                <label for="task_7" class="col-form-label text-md-end">Task 7 Name</label>
                {{ Form::text('task_7', 'Task 7 Name', ['class' => 'form-control', 'id' => 'task_7']) }}
            </div>
            <div class="col-md-4">
                <label for="task_7_start_date" class="col-form-label text-md-end">Start Date</label>
                {{ Form::date('task_7_start_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_7_start_date']) }}
            </div>
            <div class="col-md-4">
                <label for="task_7_end_date" class="col-form-label text-md-end">End Date</label>
                {{ Form::date('task_7_end_date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'task_7_end_date']) }}
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
                    ['2023-01-01', '2023-02-03'],
                    ['2023-02-03', '2023-03-06'],
                    ['2023-03-06', '2023-04-07'],
                    ['2023-04-07', '2023-05-09'],
                    ['2023-05-09', '2023-06-13'],
                    ['2023-06-13', '2023-07-15'],
                    ['2023-07-15', '2023-08-21']
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

        // Get the input element
        // const task1Input1 = document.getElementById('task_1');
        // const task1Input2 = document.getElementById('task_2');
        // const task1Input3 = document.getElementById('task_3');
        // const task1Input4 = document.getElementById('task_4');
        // const task1Input5 = document.getElementById('task_5');
        // const task1Input6 = document.getElementById('task_6');
        // const task1Input7 = document.getElementById('task_7');


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


// //Get the input element for task 1 start date and end date
// const task1StartDate = document.getElementById('task_1_start_date');
// const task1EndDate = document.getElementById('task_1_end_date');
// //Get the input element for task 2 start date and end date
// const task2StartDate = document.getElementById('task_2_start_date');
// const task2EndDate = document.getElementById('task_2_end_date');
// //Get the input element for task 3 start date and end date
// const task3StartDate = document.getElementById('task_3_start_date');
// const task3EndDate = document.getElementById('task_3_end_date');
// //Get the input element for task 4 start date and end date
// const task4StartDate = document.getElementById('task_4_start_date');
// const task4EndDate = document.getElementById('task_4_end_date');
// //Get the input element for task 5 start date and end date
// const task5StartDate = document.getElementById('task_5_start_date');
// const task5EndDate = document.getElementById('task_5_end_date');
// //Get the input element for task 6 start date and end date
// const task6StartDate = document.getElementById('task_6_start_date');
// const task6EndDate = document.getElementById('task_6_end_date');
// //Get the input element for task 7 start date and end date
// const task7StartDate = document.getElementById('task_7_start_date');
// const task7EndDate = document.getElementById('task_7_end_date');


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

    </script>
</body>

</html>