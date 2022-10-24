@extends('projects.layout')

@section('content')

    <div class="container grid px-6 mx-auto mt-5">

        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p></p>
            </div>
        @endif --}}

        <!-- With actions -->
        <div class="flex justify-between">
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300 leading-[46px]">
                Table with actions
            </h4>
            <div class="js-create ">
                 <a class="flex items-center px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="{{ route('projects.create') }}" title="Create a product">
                    Create a project
                </a>
            </div>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Image</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Date Created</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($projects as $project)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    {{ $project->id }}
                                </td>
                                <td>
                                    <img src="/image/{{ $project->image }}" width="100px">
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div> --}}
                                        <div>
                                            <p class="font-semibold">{{ $project->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                Project
                                            </p>
                                        </div>
                                    </div>

                                </td>
                                <td class="px-4 py-3 text-xs">
                                    {{ substr( $project->description, 0, 100 ) }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ date_format($project->created_at, 'Y m d -  h:m:s') }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">

                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="flex gap-1">

                                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor"><path d="M 15 5 C 6.081703 5 0.32098813 14.21118 0.21679688 14.378906 A 1 1 0 0 0 0 15 A 1 1 0 0 0 0.16210938 15.544922 A 1 1 0 0 0 0.16601562 15.550781 C 0.18320928 15.586261 5.0188313 25 15 25 C 24.938822 25 29.767326 15.678741 29.826172 15.564453 A 1 1 0 0 0 29.837891 15.544922 A 1 1 0 0 0 30 15 A 1 1 0 0 0 29.785156 14.380859 A 1 1 0 0 0 29.783203 14.378906 C 29.679012 14.21118 23.918297 5 15 5 z M 15 8 C 18.866 8 22 11.134 22 15 C 22 18.866 18.866 22 15 22 C 11.134 22 8 18.866 8 15 C 8 11.134 11.134 8 15 8 z M 15 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 18 A 3 3 0 0 0 18 15 A 3 3 0 0 0 15 12 z" fill="currentColor"/></svg>
                                        </a>

                                        <a href="{{ route('projects.edit', $project->id) }}">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            {{-- <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div> --}}
        </div>

        <div class="block mt-6"></div>

        {!! $projects->links() !!}
    </div>


@endsection
