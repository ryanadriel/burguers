<h2>Users</h2>

<ul>
    @foreach($users as $user)
        <li>{{$user->email}}</li>
    @endforeach
</ul>