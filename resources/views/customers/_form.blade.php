<div class="form-floating mb-3">
    <input type="text" value="{{ old('name', $client->name) }}" @class(['form-control', 'is-invalid'=> $errors->has('name')]) name="name" id="name" placeholder="Customer Name">
    <label for="name">Customer name</label>
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-floating mb-3">
    <input type="text" value="{{ old('email', $client->email) }}" @class(['form-control', 'is-invalid'=> $errors->has('section')]) name="email" id="email" placeholder="Email">
    <label for="email">Email</label>
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-floating mb-3">
    <input type="text" value="{{ old('phone', $client->phone) }}" @class(['form-control', 'is-invalid'=> $errors->has('subject')]) name="phone" id="phone" placeholder="Phone">
    <label for="phone">Phone</label>
    @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary"> {{ $button_label }} </button>
