@extends('pages.layout')


@section('content')

    <div class="container grid px-6 mx-auto mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="mb-4 text-lg font-semibold text-gray-600 pull-left dark:text-gray-300">
                    <h2>View Page</h2>
                </div>
                <div class="pull-right">
                    <a class="font-semibold text-gray-600 btn btn-primary dark:text-gray-300" href="{{ route('pages.index') }}" title="Go back"> Go back </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Title:</strong>
                    <div type="text" name="title" class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                    {{ $page->title }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Image:</strong>
                    <img src="/image/{{ $page->image }}" width="500px">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Content:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $page->content }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Slug:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $page->slug }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="px-4 py-3 form-group">
                    <strong class="font-semibold text-gray-600 dark:text-gray-300">Created at:</strong>
                    <div class="block w-full mt-1 text-sm font-semibold text-gray-600 form-control dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input">
                        {{ $page->created_at }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
