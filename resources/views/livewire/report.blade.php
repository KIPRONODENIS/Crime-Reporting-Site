<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit.prevent="submit()" method="post" action="{{route('crime.create')}}">
      @csrf
      <div class="row">
        <div class="col">
          <label for="inputState">Case Title</label>
          <input type="text" name="title"  wire:model="title" class="form-control" placeholder="e.g accident" required>
  @error('title')

<p class="alert alert-danger">{{$message}}</p>
  @enderror
        </div>
        <div class="col">
          <label for="inputState">Type</label>
          <select wire:model="type" name="type"  id="inputState" class="form-control" required>
            <option selected>Choose...</option>
            <option value="1">Emergency</option>
            <option value="2">General</option>
          </select>
          @error('type')

        <p class="alert alert-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="col">
          <label for="inputState">County</label>
            <select wire:model="county" name="county" wire:change="County()" id="inputState" class="form-control">
              <option selected>Choose...</option>
              @foreach($counties as $county)
              <option value="{{$county['id']}}">{{$county['county']}}</option>
              @endforeach
            </select>
            @error('county')

          <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
      </div>
      <div class="h-10"></div>
      <div class="row mt-5">
        <div class="col">
          <label for="inputState">Sub County</label>
            <select id="inputState" wire:model="subcounty" name="subcounty" class="form-control">
              <option selected>Choose...</option>
              @foreach($subcounties as $subcounty)
              <option value="{{$subcounty['id']}}">{{$subcounty['name']}}</option>
              @endforeach
            </select>
            @error('subcounty')

          <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col">
          <label for="inputState">Police Station</label>
            <select id="inputState" name="station" class="form-control" wire:model="station">
              <option selected>Choose...</option>
         @foreach($stations as $station)
              <option value="{{$station['id']}}">{{$station['name']}}</option>
              @endforeach
            </select>
            @error('station')

          <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="col">
          <label for="inputState">Area</label>
            <input class="form-control" name="area" wire:model="area">
            @error('area')

          <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
      </div>

      <div class="row mt-5">
    <div class=" col w-1/2">
      <label>Briefly Describe the Incident?</label>
    <textarea class="form-control" wire:model="description"  name="description"></textarea>
    @error('description')

  <p class="alert alert-danger">{{$message}}</p>
    @enderror
    </div>

  </div>
   <button type="submit" class="btn btn-primary w-1/4 mt-5 p-2 float-right">submit</button>
    </form>
</div>
