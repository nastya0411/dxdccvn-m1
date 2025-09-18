<?php

/** @var yii\web\View $this */

$this->title = 'Корочки.есть';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Корочки.есть!</h1>
        <p class="lead">Информационная система для записи на онлайн курсы дополнительного профессионального образования</p>
    </div>

    <div class="body-content text-center">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <img src="/web/img/1.jpg" alt="1" class="img-style mb-3">
                <h2>Качественное <br> обучение</h2>
            </div>
            <div class="col-lg-4 mb-3">
                <img src="/web/img/2.jpg" alt="1" class="img-style mb-3">
                <h2>Дистанционный <br> формат</h2>
            </div>
            <div class="col-lg-4">
                <img src="/web/img/3.jpg" alt="1" class="img-style mb-3">
                <h2>Квалифицированные педагоги</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6">

                <div id="carouselExampleInterval" class="carousel slide carousel-style" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="/web/img/5.jpg" class="d-block w-100" alt="5">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="/web/img/6.jpg" class="d-block w-100" alt="6">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="/web/img/7.jpg" class="d-block w-100" alt="7">
                        </div>
                    </div>
                    <button class="carousel-control-prev m-3" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Назад</span>
                    </button>
                    <button class="carousel-control-next m-3" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Вперед</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6 text-center">
                <p class="p-style pt-5">
                    Повышайте свой уровень образования вместе с нашим образовательным порталом!
                </p>
            </div>
        </div>

    </div>
</div>