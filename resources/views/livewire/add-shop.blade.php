
<form wire:submit.prevent="addShop">
    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label >Shop Name</label>
            <input type="text"  wire:model='name' class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Shop Name" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
            @error('name')
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
                </div>
            @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label>Location</label>
            <input type="text" wire:model='location' class="form-control bg-light @error('location') is-invalid @enderror" name="location" placeholder="Shop Location">
            @error('location')
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
                </div>
            @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label>Description</label>
            <input type="text" wire:model='description' class="form-control bg-light @error('description') is-invalid @enderror" name="description" placeholder="Shop Description">
            @error('description')
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
                </div>
            @enderror
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">

        </div>

        <div class="row" style="padding: 1%">
            <div class="col-md-12">


            </div>
        </div>



        <div class="col-md-12" style="padding-top: 1%">

            <button type="submit" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75" style="background: #23a6d5 !important;">Submit</button>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12" style="padding-top: 1%; align:center">
        @if (session()->has('message'))
            <div class="alert alert-success">
             {{ session('message') }}
            </div>
        </div>
    </div>
    @endif
</form>

