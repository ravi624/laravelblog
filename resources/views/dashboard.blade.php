<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <table class="table table-striped">
        @if (session()->has('status'))
        <div class="alert alert-success">
          {{session('status')}}
      </div>
  
        @endif
        <thead>
          <tr>
            <th scope="col">NAME</th>
            <th scope="col">TITLE</th>
            <th scope="col">BODY</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                
           
          <tr>
            <th scope="row">{{$post->user->name}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            
            <td>
                <a href="{{url('/post/edit',$post->id)}}" class="btn btn-info">Edit</a>
                <a href="{{url('/post/delete',$post->id)}}" class="btn btn-danger">delete</a>
            
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
</x-app-layout>