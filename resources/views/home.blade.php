@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de Cotrol</div>

                <div class="card-body row">
                    <div class="col-md-4 col-6">
                        <a href="/doctores" class="menuItem">
                            <i class="ti ti-headphone-alt"></i><br>
                            <span>Citas</span>    
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="/doctores" class="menuItem">
                            <i class="ti ti-user"></i><br>
                            <span>Doctores</span> 
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="/doctores" class="menuItem">
                            <i class="ti ti-user"></i><br>
                            <span>Especialidades</span> 
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="/doctores" class="menuItem">
                            <i class="ti ti-user"></i><br>
                            <span>Dcotores</span> 
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="/doctores" class="menuItem">
                            <i class="ti ti-user"></i><br>
                            <span>Pacientes</span> 
                        </a>
                    </div>
                    <div class="col-md-4 col-6">
                        <a href="/doctores" class="menuItem">
                            <i class="ti ti-user"></i><br>
                            <span>Dcotores</span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
