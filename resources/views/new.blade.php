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
        <form action='/new' method='post'>
        <table>
            @csrf
            <tr><th>word: </th><td>
            <input type='text' name='word' value="{{old('word')}}"></td></tr>
            <tr><th>memo: </th><td>
            <input type='text' name='memo' value="{{old('memo')}}"></td></tr>
        </table>
        <input type='submit' value='send'>
        </form>
    </body>
</html>
