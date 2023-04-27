<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: bisque;
            text-align: center
        }

        .project-card {
            margin: 0 auto;
            width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid gray;
            border-radius: 10px;
            margin-top: 100px
        }
    </style>
</head>

<body>
    <h2>New project published</h2>
    <div class="project-card">
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
    </div>
</body>

</html>
