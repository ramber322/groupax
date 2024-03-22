@extends('layout.userlayout')

@section('content')

@foreach ($users as $user)
<tr>
                    
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->role }}</td>
                    <td>Delete</td>
                  
                 
</tr>
                @endforeach
@endsection
   