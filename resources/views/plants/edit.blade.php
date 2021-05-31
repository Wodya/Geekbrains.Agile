@extends('layouts.main')
@section('content')

<div class="col-md-4  offset-2">
    <form method="post" action="{{route('plant.update', ['id' => $plants->id])}}">
        @csrf
        @method('PUT')
        <input type="text" class="form-control" name="photoSmallPath" placeholder="photoSmallPath"
            value="{{$plants->photoSmallPath}}" style="display: none;">
        <input type="text" class="form-control" name="photoBigPath" placeholder="photoBigPath"
            value="{{$plants->photoBigPath}}" style="display: none;">

        <div class=" div-box mb mt">
            <div class="container">
                <h1 id="name">Редактировать растение<span></span></h1><br><br>
                @method('PUT')
                <div class="row">
                    <div class="col-md-5">
                        <div class="single-product-slider">
                            <div id="sync1" class="owl-carousel owl-template">
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide"
                                            width="1080" height="768" /></figure>
                                </div>
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide"
                                            width="1080" height="768" /></figure>
                                </div>
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide"
                                            width="1080" height="768" /></figure>
                                </div>
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide"
                                            width="1080" height="768" /></figure>
                                </div>
                            </div>
                            <div id="sync2" class="owl-carousel owl-template">
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide" width="180"
                                            height="130" /></figure>
                                </div>
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide" width="180"
                                            height="130" /></figure>
                                </div>
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide" width="180"
                                            height="130" /></figure>
                                </div>
                                <div class="item">
                                    <figure><img src="/Images/Small/{{$plants->photoSmallPath}}" alt="slide" width="180"
                                            height="130" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <div class="summary-product entry-summary">
                                <label for="name">
                                    <h3>Название растения</h3><br>
                                </label>
                                <input type="text" class="form-control" name="name" placeholder="name"
                                    value="{{$plants->name}}">
                                <label for="shortInfo">
                                    <br>
                                    <h3>Короткое описание продукта</h3><br>
                                </label>
                                <div class="product-single-short-description">
                                    <p><input type="text" class="form-control" name="shortInfo" placeholder="shortInfo"
                                            value="{{$plants->shortInfo}}"></p>
                                </div>

                                <div class="product_meta" style="margin-top: 30px;">
                                    <span class="product-stock-status-wrapper" style="display: flex;">
                                        <label for="start" style="align-self: center; width: 100%;">
                                            Дата старта для расчёта календаря:
                                        </label>
                                        <span class="product-stock-status in-stock">
                                            <input type="date" class="form-control" name="addDate" placeholder="addDate"
                                                value="{{$plants->addDate}}" style="width: min-content;">
                                        </span>
                                    </span>
                                    <span class="posted_in" style="display: flex;">
                                        <label for="wateringDays" style="align-self: center; width: 100%;">
                                            Частота полива:
                                        </label>
                                        <select class="form-control" name="wateringDays" style="width: min-content;">
                                            <option selected="selected">
                                                {{$plants->wateringDays}}
                                            </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </span>
                                    <span class="posted_in" style="display: flex;">
                                        <label for="wateringDays" style="align-self: center; width: 100%;">
                                            Теги:
                                        </label>
                                        <select class="tag_edit" name="tag1" placeholder="tag1">
                                            <option selected="selected">
                                                {{$plants->tag1}}
                                            </option>
                                            <option>напольные</option>
                                            <option>настольные</option>
                                            <option>подвесные</option>
                                        </select>
                                        <select class="tag_edit" name="tag2" placeholder="tag2">
                                            <option selected="selected">
                                                {{$plants->tag2}}
                                            </option>
                                            <option>теневыносливые</option>
                                            <option>светолюбивые</option>
                                        </select>
                                        <select class="tag_edit" name="tag3" placeholder="tag3">
                                            <option selected="selected">
                                                {{$plants->tag3}}
                                            </option>
                                            <option>не цветущие</option>
                                            <option>цветущие</option>
                                        </select>
                                        <select class="tag_edit" name="tag4" placeholder="tag4">
                                            <option selected="selected">
                                                {{$plants->tag4}}
                                            </option>
                                            <option>выделяют кислород</option>
                                            <option>очищают воздух</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mt mb">
            <div class="product-begreen-tabs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#tab-description" data-toggle="tab">Description</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <div class="desc-review-content tab-content clearfix">
                                <div id="tab-description" class="tab-pane active">
                                    <label for="fullInfo">
                                        <h3>Подробное описание продукта</h3><br>
                                    </label>
                                    <textarea rows="7" cols="30" style="width:95%;" class="form-control" name="fullInfo"
                                        placeholder="{{$plants->fullInfo}}" value="{{$plants->fullInfo}}"></textarea>
                                    <!-- <h2 class="mb-20">Подробное описание продукта</h2>
                                    <p><input type="text" class="form-control" name="fullInfo" placeholder="fullInfo"
                                            value="{{$plants->fullInfo}}"></p> -->
                                </div>
                                <br /><input class="btn btn-primary" style="float: right" type="submit"
                                    value="Сохранить"><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <p><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{$plants->name}}">


            <button type="submit" class="btn btn-success">Сохранить</button> -->
    </form>
</div>






@endsection