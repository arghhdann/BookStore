<form wire:submit.prevent="addBook">
    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Shop</label>
                <select wire:model="selectedShop" class="form-control">
                    <option value="" selected>Choose shop</option>
                    @forelse($shops as $shop)
                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                    @empty
                    <option value="" disabled>No Shop Found</option>
                    @endforelse
                </select>
                @error('selectedShop')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Title</label>
                <input type="text" wire:model='title' class="form-control bg-light @error('title') is-invalid @enderror" name="title" placeholder="Book Title" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                @error('title')
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
                <label>Author</label>
                <input type="text" wire:model='author' class="form-control bg-light @error('author') is-invalid @enderror" name="author" placeholder="Author">
                @error('author')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Description</label>
                <input type="text" wire:model='description' class="form-control bg-light @error('description') is-invalid @enderror" name="description" placeholder="Book Description">
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

        <div class="row">
        <div class="col-md-12" style="padding-top: 1%">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </div>

        <div class="row">
            <div class="col-md-12" style="padding-top: 1%">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        </div>
        @endif
    </div>



    </div>
</form>