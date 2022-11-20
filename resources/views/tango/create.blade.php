@extends('layouts.common')

@section('title', '単語の登録')

@section('content')
    <form action='/tango' method='post'>
    <table>
        @csrf
        <tr><th>word: </th><td>
        <input type='text' name='word' value="{{old('word')}}"></td></tr>
        <tr><th>memo: </th><td>
        <input type='text' name='memo' value="{{old('memo')}}"></td></tr>
    </table>
    <input type='submit' value='send'>
    </form>
@endsection
