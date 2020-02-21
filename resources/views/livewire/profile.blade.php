<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="card w-3/4 mt-5 bg-white mx-auto">
      <div class="card-header my-5">Profile details<div>
<div class="form-group">
  <label>Name</label>
<input type="text" name="name" class="form-control my-4" value="{{Auth::user()->name}}" disabled>
</div>
<div class="form-group my-4">
  <label>Email</label>
<input type="text" name="email" class="form-control " value="{{Auth::user()->email}}" disabled>
</div>

<div class="form-group my-4">
  <label>Phone</label>
<input type="text" name="phone" class="form-control " value="{{Auth::user()->phone}}" disabled>
</div>

@role('police')

<div class="form-group my-4">
  <label>Police Number</label>
<input type="text" name="police_number" class="form-control " value="{{Auth::user()->police_number}}" disabled>
</div>

<div class="form-group my-4">
  <label>Id Number</label>
<input type="text" name="id_number" class="form-control " value="{{Auth::user()->idnumber}}" disabled>
</div>

@endrole
    </div>

    <button class="bg-green-800 text-white p-2 my-3 w-1/3 rounded shadow hover:bg-teal-800 focus:bg-green-500">Edit</button>
</div>
