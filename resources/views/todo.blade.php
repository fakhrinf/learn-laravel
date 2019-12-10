@extends('template/main')

@section('main-content')
    <section id="todomain">
        <fieldset>
            <legend>Todos</legend>
            <form action="{{url('/managetodo')}}" method="post">
                @csrf
                <input type="text" name="todo" id="todoid" placeholder="todo" value="{{ ($data != null) ? $data->todo : '' }}"><input type="hidden" name="id" value="{{ ($data != null) ? $data->id : 0 }}"><input type="submit" value="SAVE">
            </form>
        </fieldset>

        <fieldset>
            <legend>Todo list</legend>
            <table>
                <thead>
                    <tr>
                        <th width="80%">Todo</th>
                        <th width="10%">edit</th>
                        <th width="10%">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($todos) && !$todos->isEmpty())
                        @foreach($todos as $todo)
                        <tr>
                            <td>{{$todo->todo}}</td>
                            <td><a href='{{url("/edit/$todo->id")}}'>edit</a></td>
                            <td><a href='{{url("/delete/$todo->id")}}'>delete</a></td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="text-align:center;" colspan="3">No Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </fieldset>
    </section>
@endsection