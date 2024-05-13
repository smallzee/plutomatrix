@extends('layouts.guest.app')

@push('content')

    <div class="tf-container mt-3 mb-3">

        <h5 class="bottom pb-3">{{ $page_title }}</h5>

        <form action="{{route('profile.store')}}" method="post">
            @csrf
            <div class="d-flex mt-3 justify-content-between align-items-center">
                <span>Full Name:</span>
            </div>
            <div class="mt-12 box-input-field mb-3">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="text"
                              name="name"
                              required autocomplete="current-password" value="{{ auth()->user()->name }}"  placeholder="Full Name"/>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <div class="d-flex mt-3 justify-content-between align-items-center">
                <span>Phone Number:</span>
            </div>
            <div class="mt-12 box-input-field mb-3">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="text"
                              name="phone"
                              required autocomplete="current-password" value="{{ auth()->user()->phone }}"  placeholder="Phone Number"/>
            </div>
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            <div class="d-flex mt-3 justify-content-between align-items-center">
                <span>Email Address :</span>
            </div>
            <div class="mt-12  mb-3">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="email"
                              name="confirm_password"
                              required autocomplete="current-password" value="{{ auth()->user()->email }}" readonly placeholder="Email Address"/>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <span class="text-danger">Email cannot be changed</span>

            <div class="mt-3 mb-3">
                <div class="inner-bar">
                    <button type="submit" class="tf-btn lg primary">Update</button>
                </div>
            </div>
        </form>

    </div>

    <div class="tf-container mt-3   ">

        <h5 class="border-bottom pb-3">Change Password</h5>

            <form action="{{route('profile.update',auth()->id())}}" method="post">
                @csrf
                @method('PATCH')
                <div class="d-flex mt-3 justify-content-between align-items-center">
                    <span>Old Password:</span>
                </div>
                <div class="mt-12 box-input-field mb-3">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password"  placeholder="Password"/>
                </div>
                <x-input-error :messages="$errors->get('old_password')" class="mt-2" />

                <div class="d-flex mt-3 justify-content-between align-items-center">
                    <span>Old Password:</span>
                </div>
                <div class="mt-12 box-input-field mb-3">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="new_password"
                                  required autocomplete="current-password"  placeholder="New Password"/>
                </div>
                <x-input-error :messages="$errors->get('old_password')" class="mt-2" />

                <div class="d-flex mt-3 justify-content-between align-items-center">
                    <span>Confirm New Password:</span>
                </div>
                <div class="mt-12  mb-3">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="confirm_new_password"
                                  required autocomplete="current-password"  placeholder="Confirm New Password"/>
                </div>
                <x-input-error :messages="$errors->get('confirm_new_password')" class="mt-2" />

                <div class="mt-5">
                    <div class="inner-bar">
                        <button type="submit" class="tf-btn lg primary">Update</button>
                    </div>
                </div>
            </form>

    </div>
@endpush
