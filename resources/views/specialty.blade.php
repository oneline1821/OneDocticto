@extends('layouts.main')

@section('content')

<div class="">
    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area2 clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <h4 class="specialty-title">{{ $general[0]->name }}</h4>
            </div>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <div class="container">
        <!-- ***** Special Area Start ***** -->
        <section class="special-area bg-grey" id="about">
            <!-- Special Description Area -->
            <div class="special_description_area section_padding_50" style="background-color: white">
                <div class="row">
                    <div class="col-md-5">
                        <div class="special_description_img">
                            <img src="/template/img/bg-img/auditiva.jpg" alt="" class="img-fluid img-responsive">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="special_description_content section_padding_50">
                            <p>{{ $general[0]->description }}</p>
                        </div>
                        <div class="special_description_content">
                            <h4>Especialistas</h4>
                            <div class="avatar-specialty">
                                <div>
                                    <img src="/template/img/bg-img/doctor.png" alt="" class="img-round">
                                </div>
                                <span>DR. Mario Zeballos</span>
                            </div>
                            <div class="avatar-specialty">
                                <div>
                                    <img src="/template/img/bg-img/doctor.png" alt="" class="img-round">
                                </div>
                                <span>DR. Mario Zeballos</span>
                            </div>
                            <div class="avatar-specialty">
                                <div>
                                    <img src="/template/img/bg-img/doctor.png" alt="" class="img-round">
                                </div>
                                <span>DR. Mario Zeballos</span>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <!-- ***** Special Area End ***** -->
    </div>

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area service_area section_padding_100_100 clearfix">
        <div class="container service-list">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading text-center">
                        <div class="conteiner-header">Nuestros Especialistas</div>
                    </div>
                    <div class="row list-service">
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Examen odontológico completo</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Detección de placa bacteriana</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Profilaxis con ultrasonido</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Fluorización</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Charlas educativas</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Atención en rayos X</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Emergencias odontológicas</button>
                        </div>
                    </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** --> 

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area service_area2 section_padding_100_100 clearfix">
        <div class="container service-list">
            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <div class="section-heading text-center">
                        <div class="conteiner-header">Nuestros Especialistas</div>
                    </div>
                    <div class="row list-service">
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Examen odontológico completo</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Detección de placa bacteriana</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Profilaxis con ultrasonido</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Fluorización</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Charlas educativas</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Atención en rayos X</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn submit-btn">Emergencias odontológicas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** --> 
</div>

    


@endsection