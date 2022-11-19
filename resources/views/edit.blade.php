<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Tango Beat</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <form action="/edit/{{$tango->id}}" method='post'>
        <table>
            @csrf
            <input type='hidden' name='id' value="{{$tango->id}}">
            <tr><th>word: </th><td>
            <input type='text' name='word' value="{{$tango->word}}"></td></tr>
            <tr><th>memo: </th><td>
            <input type='text' name='memo' value="{{$tango->memo}}"></td></tr>
        </table>
        <input type='submit' value='send'>
        </form>
    </body>
</html>
