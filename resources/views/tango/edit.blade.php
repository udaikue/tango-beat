@extends('layouts.common')

@section('title', '単語の編集')

@section('content')
    <form action="/tango/{{$tango->id}}" method='post'>
        @method('patch')
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
@endsection
