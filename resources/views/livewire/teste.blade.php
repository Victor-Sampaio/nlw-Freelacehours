<div>
   <input wire:mode.live="search" />
   <br>

   <ul>

    @foreach ($users as $user)
    <li>{{$user->name}}</li>

        
    @endforeach
</div>
