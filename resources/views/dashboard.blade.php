@extends ('layout')
<!DOCTYPE html>
<style>
    .h1 {
        font-size: 10px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        box-shadow: 2px 2px 10px rgb(0, 0, 0)
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .container {
        padding-top: 100px;
    }
</style>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="Portfolio.css">
</head>

@section ('dashboard')

<div class="container">
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20"
             aria-valuemin="0" aria-valuemax="100" style="width:20%">
            20%
        </div>
    </div>
</div>

<main>
    <p>
        .
    </p>
    <div>
        <table>
            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th>Ec</th>
                <th>Exam</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td rowspan="3">1</td>
                <td>Programme and Career Orientation</td>
                <td>2,5</td>
                <td>Assesment</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>7,5</td>
                <td>Written</td>
                <td>0</td>
            </tr>
            <td> Programming basics</td>
            <td>5</td>
            <td>Case study</td>
            <td>0</td>
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td rowspan="2">Object Oriented Programming</td>
                <td rowspan="2">10</td>
                <td>Case study</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Project</td>
                <td>0</td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td>Framework Development 1</td>
                <td>5</td>
                <td>Case study</td>
                <td>0</td>
            </tr>
            <tr>
                <td rowspan="3">Framework Project 1</td>
                <td rowspan="3">7,5</td>
                <td>Project</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Assesment</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Report</td>
                <td>0</td>
            </tr>
            <tr>
                <td rowspan="3">4</td>
                <td rowspan="3">Framework Project 2</td>
                <td rowspan="3">10</td>
                <td>Portfolio</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Project</td>
                <td>0</td>
            <tr>
                <td>Assesment</td>
                <td>0</td>
            </tr>
        </table>
    </div>
</main>
<title>progress bar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
