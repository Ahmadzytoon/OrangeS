<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Average</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Team Name</th>
                <th>Total Score</th>
                <th>Average</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            {{-- {{dd($data)}} --}}
                @foreach ($data as $team_rate)
                    <?php $i++ ?>
                    <tr height="100px">
                        <td>{{$i}}</td>
                        <td>{{$team_rate['team_name']}}</td>
                        <td>{{$team_rate['total_values']}}</td>
                        <td>{{(($team_rate['total_values'])/(($team_rate['number_of_question_for_team'])*5))*100}}%</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>
