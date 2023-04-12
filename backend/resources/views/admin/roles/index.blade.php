<x-app-layout>

    <x-slot name="header">{{ __('pages.roles') }}</x-slot>
    <x-slot name="create_btn">
        <a class="inline-flex items-center px-6 py-2 text-white bg-green-700 rounded-full hover:bg-green-800"
            href="{{ route('roles.create') }}">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-green-800 bg-white rounded-full"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-white">{{ __('roles.create_new_user') }}</span>
        </a>
    </x-slot>

    @if ($message = Session::get('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
        </div>
    @endif
    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs mt-4">
        {{-- <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-white dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">{{ __('#') }}</th>
                        <th class="px-4 py-3">{{ __('roles.name') }}</th>
                        <th class="px-4 py-3">{{ __('roles.email') }}</th>
                        <th class="px-4 py-3 text-center">{{ __('roles.roles') }}</th>
                        <th class="px-4 py-3 text-center" colspan="3">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @if ($data->count())
                        @foreach ($data as $key => $user)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">{{ $key + 1 }}</td>
                                <td class="px-4 py-3">{{ $user->name }}</td>
                                <td class="px-0 py-3 text-sm">{{ $user->email }}</td>
                                <td class="px-4 py-3 text-xs text-center">
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">{{ $v }}</label>
                                        @endforeach
                                    @else
                                        <label
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">{{ __('roles.rolenot') }}</label>
                                    @endif
                                </td>

                                <td class="px-4 py-3 text-sm text-center">{{ $category->created_at ?? 'Sana mavjud emas!' }}</td>

                                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap">

                                    <a href="{{ route('roles.show', $user->id) }}" class="text-indigo-600">
                                        <svg class="w-6 h-6 text-green-500 hover:text-green-800" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                    </a>

                                </td>

                                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap">

                                    <a href="{{ route('roles.edit', $user->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>

                                </td>

                                <td class="text-sm font-medium leading-5 whitespace-no-wrap">
                                    <form action="{{ route('roles.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('roles.confirm') }}');">

                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 text-red-600 hover:text-red-800 cursor-pointer"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center font-weight-bold">
                                <span class="badge badge-info px-3">
                                    {{ __('There is no information!') }}
                                </span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div> --}}

        {{-- <div
            class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500  uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-white dark:bg-gray-800">
            {!! $data->render() !!}
        </div> --}}
    </div>
</x-app-layout>
