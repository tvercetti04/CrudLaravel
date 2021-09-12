@extends('base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card shadow border-0 p-5">
                    <form action=" {{route('add-info')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                      
                       <div class="row">
                           <div class="col-6">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter Name" class="form-control">
                                @error('name')<p class="text-danger small">{{$message}}</p>@enderror
                            </div>

                           </div>
                           <div class="col-6">
                            <div class="mb-3">
                                   <label for="">Contact</label>
                                <input type="text" name="contact" placeholder="Enter Contact" class="form-control">
                                @error('contact')<p class="text-danger small">{{$message}}</p>@enderror
                            </div>
                           </div>
                       </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="Enter your Email" class="form-control">
                            @error('email')<p class="text-danger small">{{$message}}</p>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="5" placeholder="Write Description" class="form-control"></textarea>
                            @error('description')<p class="text-danger small">{{$message}}</p>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')<p class="text-danger small">{{$message}}</p>@enderror
                        </div>
                        <div class="d-grid gap-3">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
