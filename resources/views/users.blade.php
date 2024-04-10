@extends('layout.userlayout')

@section('content')

@foreach ($users as $user)
<tr>
                    
                    <td>{{ $user->Card_ID }}</td>
                    <td ><div style ="text-align:center; width: 120px;"> {{ $user->username }} </div> </td>
                    <td><div style ="text-align: center; width: 200px; ">{{ $user->email }}</div></td>
                    <td style ="margin-left: 20px;" >{{ $user->balance }}</td>
                    <td>Delete</td>
                  
                 
</tr>
                @endforeach
@endsection
   