@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    Frame Page
                </div>
                <div class="card-body">
                    loream
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    VenoBox
                </div>
                <div class="card-body">

                    <x-vimage gall="poe" small="{{asset('images/post-5.jpeg')}}" style="height: 100px"/>
                    <x-vimage gall="poe" small="{{asset('images/post-4.jpeg')}}" style="height: 100px"/>
                    <x-vimage gall="poe" small="{{asset('images/post-1.jpeg')}}" style="height: 100px"/>
                    <x-vimage small="{{asset('images/post-2.jpeg')}}" style="height: 100px"/>
                    <x-vimage small="{{asset('images/post-3.jpeg')}}" style="height: 100px"/>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    Form Elements
                </div>
                <div class="card-body">

                    <form action="">

                        <x-input name="name" title="Your Name"/>
                        <x-input name="password" type="password" title="Password"/>
                        <x-text-area name="address" title="Address" rows="15"/>

                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
