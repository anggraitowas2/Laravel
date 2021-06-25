<h1>Edit Tournament</h1>

<form action="redirects/{{$member->id}}"method="POST">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name" value="{{$member->name}}"><br>
    Slot :<input type="text" name="slot" value="{{$member->position}}"><br>
    Schedule :<input type="text" name="schedule" value="{{$member->quote}}"><br>
    Date :<input type="text" name="date" value="{{$member->picture}}"><br>
    <!-- Reward :<input type="text" name="reward" value="{{$member->reward}}"><br>
    Time : <input type="text" name="time" value="{{$member->time}}"><br>
    Image Url : <input type="text" name="image_url" value="{{$member->image_url}}"><br> -->

    <input type="submit" value="Save">
</form>