@extends('layouts.app')

@section('content')
    <div style="display: flex;" class="container">
        <div style="width:60% ;">
            <div style="height: 50%; margin-top: 10px ">
                {!! Form::open(['route' => 'updateNote' , 'method' => 'POST']) !!}

                <div class="form-group">
                    {{Form::Text('title',$note->title,['class'=>'form-control','style'=>'margin-bottom:10px','placeholder'=>'Enter Note Title'])}}
                    {{Form::TextArea('description',$note->description,['class'=>'form-control','style'=>'width:100% ; resize:none','placeholder'=>'Enter Note Description'])}}
                    @include('inc.openNoteCategories')
                    <button class="btn-danger"
                            style="padding: 5px 20px;float: right; margin-top: 10px ;margin-right:5px ">
                        <a href="{{route('deleteNote',['id'=>$note->id])}} ">DELETE</a>
                    </button>
                    {{Form::submit('SAVE',['class'=>'btn-info','style'=>'padding: 5px 20px;float: right; margin-top: 10px ;margin-right:5px '])}}
                    {!! Form::hidden('note_id', $note->id) !!}
                </div>
                @include('inc.messeges')
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
