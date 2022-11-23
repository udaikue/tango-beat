@extends('layouts.common')

@section('title', '単語リスト')

@section('content')
    <a href="{{ route('tango.create') }}" class="add-btn">add</a>

    <table>
        @foreach ($tangos as $tango)
        <tr>
            <td>{{$tango->word}}</td>
            <td>{{$tango->memo}}</td>
            <td>{{$tango->done}}</td>
            <td><a href="{{ route('tango.edit', $tango->id) }}" class="table-btn">done</a></td>
            <td><a href="{{ route('tango.edit', $tango->id) }}" class="table-btn">edit</a></td>
        </tr>
        @endforeach
    </table>
@endsection
