<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
</head>
<body>
    <div>
        <a href="{{route('logout')}}">Logout</a>
    </div>
        <form action="{{route('team')}}" method="POST" id="team-form">
            @csrf
            <h1>Select The Team</h1>
            <select name="team" id="team">
                <option value=""> - Please Select Team - </option>
                <option value="abdelmajied" name='team1'>Team 1 - Abdelmajied</option>
                <option value="zaitoun" name='team2'>Team 2 - Zaitoun</option>
                <option value="nuqity" name='team3'>Team 3 - Nuqity</option>
                <option value="asem" name='team4'>Team 4 - Asem</option>
            </select>
            <br>
            <br>
            <button type="submit" id="next-button" disabled>Next</button>
        </form>
        {{-- <form method="POST" id="question-form">
            <table>
                <tbody id="body-table"></tbody>
            </table>
            <button type="submit">Send Rate</button>
        </form> --}}
        <script>
            const teamSelect = document.getElementById('team');
            const nextButton = document.getElementById('next-button');

            teamSelect.addEventListener('change', function() {
                if (teamSelect.value !== "") {
                    nextButton.removeAttribute('disabled');
                } else {
                    nextButton.setAttribute('disabled', 'disabled');
                }
            });
        </script>
</body>
</html>
