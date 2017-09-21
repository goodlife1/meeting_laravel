@extends('layouts.app')

@push('style')
<style>

    .post_list {

        background-color: whitesmoke;
    }

    .post_list li {
        list-style: none;
    }

</style>
@endpush




@section('content')
    <div class="container-fluid">
        <div class="col-md-3">
        @include('forum._postsCategoryList')
        </div>
        <div class="col-md-9 post_list">
            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, atque, doloribus ducimus eaque eius
                libero magnam maxime nostrum obcaecati odit officiis quasi soluta tempore? Alias aliquam amet labore
                placeat
                repudiandae!
            </div>
            <div class="row">
                <ul>
                    <li>text</li>
                    <li>text</li>
                    <li>text</li>
                    <li>text</li>
                    <li>text</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush