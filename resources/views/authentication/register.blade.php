@extends('layout.authentication')

@section('content')
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="/">
                <img class="mx-auto h-12 w-auto" src="/assets/img/logoipsum-264.svg" alt="Your Company">
            </a>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Register for an account</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">sign in using existing
                    account.</a>
            </p>
        </div>

        <div class="bg-black-200 mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white px-4 py-8 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="/register" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" autocomplete="name" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                            Password</label>
                        <div class="mt-2">
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                autocomplete="password_confirmation" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="mt-10 flex justify-center gap-x-9 space-x-4">
                        <button name="user_type" value="employer" type="submit"
                            class="flex w-full justify-center rounded-md bg-white-600 px-3 py-2 text-sm font-semibold text-black hover:bg-white-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-900">Register
                            as Employer</button>
                        <button name="user_type" value="jobseeker" type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register
                            as Jobseeker</button>
                    </div>


                </form>


            </div>
        </div>
    </div>
@endsection


{{-- <div class="password-toggle mb-4">
    <input class="form-control form-control-lg" type="password" placeholder="Confirm password"
        name="password_confirmation" required>
    <label class="password-toggle-btn" aria-label="Show/hide password">
        <input class="password-toggle-check" type="checkbox"><span
            class="password-toggle-indicator"></span>
    </label>
</div>
<div class="pb-4">
    <div class="form-check my-2">
        <input class="form-check-input" type="checkbox" id="terms" name="terms">
        <label class="form-check-label ms-1" for="terms">I agree to <a href="/terms">Terms
                &amp; Conditions</a></label>
    </div>
</div> --}}
