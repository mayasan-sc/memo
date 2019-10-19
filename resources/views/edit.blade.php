@extends('layout')

@section('content')

  <form method="POST" action="{{ route('update',['id'=>$memo->id])}}">
    @csrf

    <textarea name="content" rows="4" class="form-control text-black-50 mt-4">{{$memo->content}}</textarea>

    @if($errors->any())
      @foreach ($errors->all() as $error)
        <p class="text-right text-black-50">{{ $error }}</p>
      @endforeach
    @endif

    <div class="text-right mt-4">
      <button type="submit" class="btn btn-outline-secondary btn-sm">更新</button>
      <a href="{{ route('index') }}" class="btn btn-outline-secondary btn-sm">キャンセル</a>
    </div>

  </form>

@endsection
