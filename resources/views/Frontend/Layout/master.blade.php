
<form action="{{url('/show')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="name" />
    <input type="email" placeholder="Email" name="email" />
    <input type="password" placeholder="Password" name="password" />
    <button type="submit" class="btn btn-default">Signup</button>
</form>
