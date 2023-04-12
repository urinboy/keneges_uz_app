<x-app-layout>

    <x-slot name="header">{{ __('users.create_new_user') }}</x-slot>
    <x-slot name="create_btn">
        <a class="inline-flex items-center px-6 py-2 text-white bg-green-700 rounded-full hover:bg-green-800"
            href="{{ route('users.index') }}">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-green-800 bg-white rounded-full"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-white">{{ __('users.user_list') }}</span>
        </a>
    </x-slot>

    @if (count($errors) > 0)

        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <span class="font-medium"><strong>Whoops!</strong></span>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name"
                                placeholder="{{ __('auth.username') }}" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username"
                                placeholder="{{ __('auth.email') }}" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" placeholder="{{ __('auth.password') }}" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            {{-- <x-input-label for="confirm-password" :value="__('Confirm Password')" /> --}}

                            <x-text-input id="confirm-password" class="block mt-1 w-full" type="password"
                                name="confirm-password" required autocomplete="new-password"
                                placeholder="{{ __('auth.cpassword') }}" />

                            {{-- <x-text-input id="confirm-password" class="block mt-1 w-full" type="password"
                                name="confirm-password" required autocomplete="new-password" /> --}}

                            <x-input-error :messages="$errors->get('confirm-password')" class="mt-2" />
                        </div>
                        <div class="mt-4">

                            <strong>Role:</strong>
                            {!! Form::select('roles[]', $roles, [], ['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full', 'multiple']) !!}

                        </div>

                        <div class="flex flex-rows items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('crud.create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!} --}}

</x-app-layout>
