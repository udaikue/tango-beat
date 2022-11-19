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
        <table>
            @foreach ($tangos as $tango)
            <tr>
                <td>{{$tango->word}}</td>
                <td>{{$tango->memo}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
