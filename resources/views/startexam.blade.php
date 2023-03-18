<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enter Your Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{url('submitexamform')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label>Please Enter Your Full Name</label><br>
                        <input required disabled class="form-control" type="text" name="name" value="{{auth()->user()->name}}"/><br>
                        <br>
                        <label>Please Enter Your Registered Email Address</label><br>
                        <input required disabled class="form-control" type="text" name="email" value="{{auth()->user()->email}}"/><br>
                        <br>
                        <label>Please Choose One Of The Following</label><br>
                        <select required class="form-control"  name="profession">
                            @foreach($professions as $profession)
                            <option value="{{$profession->id}}">I'm A {{$profession->profession_name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <label>Please choose 3-5 of your legal fields of interests.</label><br>
                        <select required class="interests" name="interests[]" multiple="multiple">
                            @foreach($interests as $interest)
                                <option value="{{$interest->id}}">{{$interest->legal_field_name}}</option>
                            @endforeach
                        </select>
                        <br><br>
                        <input type="submit" class="button" value="Start Exam"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
