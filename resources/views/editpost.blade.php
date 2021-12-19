<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <form method="POST">
        @csrf
        @method('PUT');
        <div class="form-group">
          <label for="exampleInputEmail1">TITLE</label>
          <input type="text" class="form-control" id="title"  placeholder="Enter title" name="title" value="{{$post->title}}">
          
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">BODY</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{$post->body}}</textarea>
          </div>
        <div class="form-group mt-5">
        
        <button type="submit" class="btn btn-primary" value="post">Update</button>
        </div>
      </form>
      @if (session()->has('status'))
      <div class="alert alert-success">
        {{session('status')}}
    </div>

      @endif
    
</x-app-layout>