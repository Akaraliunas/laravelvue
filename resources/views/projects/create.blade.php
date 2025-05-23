@extends('projects.layout')

@section('content')
<div class="container grid px-6 mx-auto mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mb-4 text-lg font-semibold text-gray-600 pull-left dark:text-gray-300">
                <h2>Add New Project</h2>
            </div>
            <div class="pull-right">
                <a class="font-semibold text-gray-600 btn btn-primary dark:text-gray-300" href="{{ route('projects.index') }}" title="Go back"> Go back </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ var_dump( $error ) }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="w-full overflow-hidden bg-white divide-y rounded-lg shadow-xs dark:divide-gray-700 dark:bg-gray-800 ">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Name:</strong>
                    <input type="text" name="name" class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Name">
                    @error('name')
                        <div class="mt-1 mb-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Image:</strong>
                    <input type="file" name="image" class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="image">
                    @error('name')
                        <div class="mt-1 mb-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Description:</strong>
                    <textarea class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" style="height:50px" name="description"
                        placeholder="description"></textarea>
                    @error('description')
                        <div class="mt-1 mb-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Link:</strong>
                    <input type="text" name="link" class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Link">
                    @error('name')
                        <div class="mt-1 mb-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="text-center col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="px-4 py-2 mb-4 text-sm font-medium font-semibold leading-5 text-white text-gray-600 transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg btn btn-primary dark:text-gray-300 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
            </div>
        </div>

    </form>
</div>

@endsection
