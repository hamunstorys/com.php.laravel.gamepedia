@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-xs-center">
                <img src="//placehold.it/600" class="m-x-auto img-fluid img-circle"/>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h5>게임등록</h5>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href=""><i class="fas fa-pencil-alt fa-lg text-dark" title="수정"></i></a>
                        <a href=""><i class="fas fa-trash fa-lg text-dark" title="삭제"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h5><span class="badge badge-info">장르</span></h5>
                    </div>
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-sm-4">
                        <h6>개발사</h6>
                    </div>
                    <div class="col-sm-8">
                        <h6></h6>
                    </div>
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-sm-4">
                        <h6>유통사</h6>
                    </div>
                    <div class="col-sm-8">
                        <h6></h6>
                    </div>
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-sm-4">
                        <h6>플랫폼</h6>
                    </div>
                    <div class="col-sm-8">
                        <h6></h6>
                    </div>
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-sm-4">
                        <h6>출시일</h6>
                    </div>
                    <div class="col-sm-8">
                        <h6></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 offset-sm-1">
                <div>
                    <h4>Archives</h4>
                    <ol class="list-group">
                        <li class="list-group-item"><a href="#">March 2014</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('js/jquery/jquery.raty/jquery.raty.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('js/jquery/jquery.raty/jquery.raty.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#rating').raty({
                starType: 'i',
            });
        });
        // $('#rating').click(function () {
        //     if (confirm('별점을 주시겠습니까?') == true) {
        //         alert($('#rating').raty('score'));
        //     } else {
        //         alert($('#rating').raty('score'));
        //     }
        // });

    </script>
@endsection