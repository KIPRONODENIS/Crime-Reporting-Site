<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit.prevent="submit()" method="post" action="{{route('crime.create')}}">
      @csrf
      <div class="row">
        <div class="col">
          <label for="inputState">Case Title</label>
          <input type="text" wire:model="title" class="form-control" placeholder="e.g accident">
        </div>
        <div class="col">
          <label for="inputState">Type</label>
          <select wire:model="type"  id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option value="1">Emergency</option>
            <option value="2">General</option>
          </select>
        </div>
        <div class="col">
          <label for="inputState">County</label>
            <select wire:model="county" wire:change="County()" id="inputState" class="form-control">
              <option selected>Choose...</option>
              @foreach($counties as $county)
              <option value="{{$county['id']}}">{{$county['county']}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="h-10"></div>
      <div class="row mt-5">
        <div class="col">
          <label for="inputState">Sub County</label>
            <select id="inputState" wire:model="subcounty" class="form-control">
              <option selected>Choose...</option>
              @foreach($subcounties as $subcounty)
              <option value="{{$subcounty['id']}}">{{$subcounty['name']}}</option>
              @endforeach
            </select>
        </div>
        <div class="col">
          <label for="inputState">Police Station</label>
            <select id="inputState" class="form-control" wire:model="station">
              <option selected>Choose...</option>
         @foreach($stations as $station)
              <option value="{{$station['id']}}">{{$station['name']}}</option>
              @endforeach
            </select>
        </div>
        <div class="col">
          <label for="inputState">Area</label>
            <input class="form-control" name="area" wire:model="area">
        </div>
      </div>

      <div class="row mt-5">
    <div class=" col w-1/2">
      <label>Briefly Describe the Incident?</label>
    <textarea class="form-control" wire:model="description"></textarea>
    </div>

  </div>
   <button type="submit" class="btn btn-primary w-1/4 mt-5 p-2 float-right">submit</button>
    </form>
</div>
