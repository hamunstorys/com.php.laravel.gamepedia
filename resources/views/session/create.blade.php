@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h3 class="mb-0">로그인</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="POST">
                            <div class="form-group">
                                <label for="email">이메일</label>
                                <input type="email" class="form-control form-control-lg rounded-0" name="email"
                                       id="email">
                                <div class="invalid-feedback">이메일 오류</div>
                            </div>
                            <div class="form-group">
                                <label>비밀번호</label>
                                <input type="password" class="form-control form-control-lg rounded-0" id="password"
                                       name="password">
                                <div class="invalid-feedback">비밀번호 오류</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="login">로그인</button>
                            <button class="btn btn-secondary btn-lg btn-block" id="cancel">취소</button>
                            <p>
                            <h5 class="text-center">소셜 로그인</h5>
                            <hr class="divider">
                            </p>
                            <div class="btn-group d-flex">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <a href="#" class="btn btn-lg btn-block btn-fc">
                                        <i class="fab fa-facebook fa-2x"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <a href="#" class="btn btn-lg btn-block btn-tw">
                                        <i class="fab fa-twitter fa-2x"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <a href="#" class="btn btn-lg btn-block btn-gp">
                                        <i class="fab fa-google-plus fa-2x"></i>
                                    </a>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <a href="#" class="btn btn-lg btn-block btn-is">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/card-block-->
                </div>
                <!-- /form card login -->
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
    </div>
    <!--/container-->
@stop