@extends('layout')

@section('content')

    <form method="POST" action="{{ route('store') }}">
      @csrf

        <div>
          <textarea name="content" rows="4" class="form-control mt-4"></textarea>
        </div>

        @if ($errors->any())
          @foreach ($errors->all() as $error)
              <p class="text-right text-black-50">{{ $error }}</p>
          @endforeach
        @endif

        <div class="text-right mt-4">
          <button type="submit" class="btn btn-outline-secondary btn-sm">作成</button>
          <a href="{{ route('index') }}" class="btn btn-outline-secondary btn-sm">キャンセル</a>
        </div>

    </form>

@endsection
