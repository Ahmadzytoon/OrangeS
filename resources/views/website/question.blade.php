<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{route('logout')}}">Logout</a>
    </div>
    <form action="{{route('collectData')}}" method="POST">
        @csrf
        <table>
            <tbody>
                <?php $i = 0 ?>
                @foreach ($data as $question)
                    <?php $i++ ?>
                    <tr height="100px">
                        <td>{{$i}} . Question : {{$question->question}}</td>
                        <input type="hidden" name="question_id{{$i}}" value="{{$question->id}}">
                        <input type="hidden" name="loop" value="{{$i}}">
                        <td><input type="radio" name='rate{{$i}}' value="5">Excellent</td>
                        <td><input type="radio" name='rate{{$i}}' value="3">Very Good</td>
                        <td><input type="radio" name='rate{{$i}}' value="1">Good</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
