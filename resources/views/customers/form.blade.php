<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ old('name') ?? $customer->name }}" class="form-control">
    {{ $errors->first('name')}} 
</div>

<div class="form-group" method="POST">
    <label for="email">Email: </label>
    <input type="text" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">
    {{ $errors->first('email')}}
</div>

<div class="form-group" method="POST">
    <label for="phone">phone: </label>
    <input type="text" name="phone" value="{{ old('phone') ?? $customer->phone}}" class="form-control">
    {{ $errors->first('phone')}}
</div> 

<div class="form-group" method="POST">
    <label for="active">Status: </label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        @foreach ($customer->activeOptions() as $activeOptionsKey => $activeOptionsValue)
            <option value="{{ $activeOptionsKey }}" {{ $customer->active == $activeOptionsValue  ? 'selected' : '' }}>{{ $activeOptionsValue }}</option>  <!-- We have to set if the status is active or inactive  -->
        @endforeach
    </select>
</div>

<div class="form-group" method="POST">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $company)
        <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
</div>

@csrf