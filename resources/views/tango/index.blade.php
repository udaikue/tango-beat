@extends('layouts.common')

@section('title', '単語リスト')

@section('content')
    <table>
        @foreach ($tangos as $tango)
        <tr>
            <td>{{$tango->word}}</td>
            <td>{{$tango->memo}}</td>
            <td>{{$tango->done}}</td>
        </tr>
        @endforeach
    </table>
@endsection
