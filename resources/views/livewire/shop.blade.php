<div>
    <div  class="p-4 page-body text-dark">
        <div class="card">
            <div class="card-body">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @if($updateShop)
                    @include('livewire.edit-shop')
                @else
                    @include('livewire.add-shop')
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <table class="table table-striped table-bordered" id="" style="width: 100%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($shops) > 0)
                                @foreach ($shops as $data)
                                    <tr>
                                        <td>
                                            {{$data->name}}
                                        </td>
                                        <td>
                                            {{$data->location}}
                                        </td>
                                        <td>
                                            {{$data->description}}
                                        </td>
                                        <td>
                                            <button wire:click="edit({{$data->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deleteCategory({{$data->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No Shop Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteCategory(id){
            if(confirm("Are you sure to delete this shop record?"))
                window.livewire.emit('deleteCategory',id);
        }
    </script>
</div>