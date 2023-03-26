@extends('experiences.layout')


@section('content')

    <div class="container grid px-6 mx-auto mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="mb-4 text-lg font-semibold text-gray-600 pull-left dark:text-gray-300">
                    <h2>View Page</h2>
                </div>
                <div class="pull-right">
                    <a class="font-semibold text-gray-600 btn btn-primary dark:text-gray-300" href="{{ route('experiences.index') }}" title="Go back"> Go back </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Position:</strong>
                    <div type="text" name="position" class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                    {{ $experience->position }}
                    </div>
                </div>
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Company:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $experience->company }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Company URL:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $experience->company_url }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Description:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $experience->description }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Dates:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $experience->dates }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Created at:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $experience->created_at }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
