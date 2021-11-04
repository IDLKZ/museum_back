@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 my-2">
            <div class="card">
                <img class="d-flex align-self-center card-img-top" src="{{asset("images/users.gif")}}" style="max-width: 320px" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class=" align-self-center font-weight-bold text-dark">
                        Всего {{\App\Models\User::count()}} {{\App\Models\User::count()>4 ? " Пользователей" : " Пользователя"}}
                    </h3>
                    <br>
                    <a href="{{route("users.index")}}" class="btn btn-primary">Все пользователи</a>
                </div>
            </div>


        </div>
        <div class="col-md-6 my-2">
            <div class="card">
                <img class="d-flex align-self-center card-img-top" src="{{asset("images/museum.gif")}}" style="max-width: 320px" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class=" align-self-center font-weight-bold text-dark">
                        Всего {{\App\Models\Hall::count()}} Залов
                    </h3>
                    <br>
                    <a href="{{route("halls.index")}}" class="btn btn-primary">Все Залы</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card">
                <img class="d-flex align-self-center card-img-top" src="{{asset("images/tour.gif")}}" style="max-width: 320px" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class=" align-self-center font-weight-bold text-dark">
                        Всего {{\App\Models\Tour::count()}} 3D туров
                    </h3>
                    <br>
                    <a href="{{route("tours.index")}}" class="btn btn-primary">Все Туры</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card">
                <img class="d-flex align-self-center card-img-top" src="{{asset("images/model.gif")}}" style="max-width: 320px" alt="Card image cap">
                <div class="card-body text-center">
                    <h3 class=" align-self-center font-weight-bold text-dark">
                        Всего {{\App\Models\ThirdModel::count()}} 3D моделей
                    </h3>
                    <br>
                    <a href="{{route("thirdModels.index")}}" class="btn btn-primary">Все Модели</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
