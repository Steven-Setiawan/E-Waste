<!-- @extends('layout.layout')

@section('content')
    @session('success')
        <div class="alert alert-success">
            Data updated successfully.
        </div>
    @endsession

    <div class="row">
        <div class="col-4">
            <img src="{{ asset('storage/'.$user->photo) }}" alt="" srcset="">
        </div>
        <div class="col-8">
            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder=""  value="{{old('name',$user->name)}}"/>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder=""  value="{{old('email',$user->email)}}"/>
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder=""  value="{{old('address',$user->address)}}"/>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <select class="select form-control-lg" name="city">
                        <option value="1" disabled>Choose a city</option>
                        @foreach ($cities as $city)
                            <option value="{{$city->id}}" {{old('city') == $city->id ? 'selected' : '' }}>{{ $city->CityName }}</option>
                        @endforeach
                    </select>
                    @error('city')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Profile Picture</label>
                    <input type="file" name="photo" id="photo" class="form-control" placeholder=""/>
                    @error('photo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Update" />
            </form>
        </div>
    </div>
@endsection -->