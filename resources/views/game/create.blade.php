@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 text-lg-center">
                <h1><span class="badge badge-info">게임 등록</span></h1>
            </div>
            <div class="col-8">
                <div class="alert alert-info alert-dismissible"><a class="panel-close close" data-dismiss="alert">×</a>
                    알림 메세지창
                </div>
            </div>
            <div class="col-lg-4 pull-lg-8 text-xs-center">
                <img src="//placehold.it/600" class="m-x-auto img-fluid img-circle"/>
                <h6 class="text-center">이미지를 업로드 해주세요.</h6>
                <label class="custom-file">
                    <input type="file" id="game_thumbnail" name="game_thumbnail" class="custom-file-label">
                </label>
            </div>
            <div class="col-lg-8 push-lg-4 personal-info">
                <form role="form">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">게임 이름</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" id="game_name" name="game_name"
                                   placeholder="게임 이름" value="{{old('game_name')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">개발사</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="game_developer" name="game_developer"
                                   placeholder="개발사" value="{{old('game_developer')}}"/>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="url" id="game_developer_url" name="game_developer_url"
                                   placeholder="개발사 홈페이지" value="{{old('game_developer_url')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">유통사</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="game_distribution" name="game_distribution"
                                   placeholder="유통사" value="{{old('game_distribution')}}"/>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="url" id="game_distribution_url"
                                   name="game_distribution_url"
                                   placeholder="유통사 홈페이지" value="{{old('game_distribution_url')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">플랫폼</label>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_plattform1" name="game_plattform1">
                                <option value="1">PC</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_plattform2" name="game_plattform2">
                                <option value="1">PC</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label"></label>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_plattform3" name="game_plattform3">
                                <option value="1">PC</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_plattform4" name="game_plattform4">
                                <option value="1">PC</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">출시일</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="date" placeholder="출시일" id="game_release"
                                   name="game_release" value="{{old('game_release')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">장르</label>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_genre1"
                                    name="game_genre1">
                                <option value="1">액션</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_genre2"
                                    name="game_genre2">
                                <option value="1">액션</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label"></label>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_genre3"
                                    name="game_genre3">
                                <option value="1">액션</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" id="game_genre4"
                                    name="game_genre4">
                                <option value="1">액션</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">엔진</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" placeholder="엔진" id="game_engine"
                                   name="game_engine" value="{{old('game_engine')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">최소 사양</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="OS" id="game_minimun_spec1"
                                   name="game_minimun_spec1" value="{{old('game_minimun_spec1')}}"/>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="CPU" id="game_minimun_spec2"
                                   name="game_minimun_spec2" value="{{old('game_minimun_spec2')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label"></label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="RAM" id="game_minimun_spec3"
                                   name="game_minimun_spec3" value="{{old('game_minimun_spec3')}}"/>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="VGA" id="game_minimun_spec4"
                                   name="game_minimun_spec4" value="{{old('game_minimun_spec4')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">권장 사양</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="OS" id="game_recommend_spec1"
                                   name="game_recommend_spec1" value="{{old('game_recommend_spec1')}}"/>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="CPU" id="game_recommend_spec2"
                                   name="game_recommend_spec2" value="{{old('game_recommend_spec2')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label"></label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="RAM" id="game_recommend_spec3"
                                   name="game_recommend_spec3" value="{{old('game_recommend_spec3')}}"/>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" placeholder="VGA" id="game_recommend_spec4"
                                   name="game_recommend_spec4" value="{{old('game_recommend_spec4')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label">게임 설명</label>
                        <div class="col-lg-8">
                            <textarea class="form-control" id="game_description" name="game_description"
                                      placeholder="게임에 대한 설명을 적어주세요."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <input type="button" class="btn btn-outline-primary" value="등록"/>
                            <a href="javascript:window.history.back()"><input type="button"
                                                                              class="btn btn-outline-secondary"
                                                                              value="취소"/></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection