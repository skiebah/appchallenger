@extends('layouts.app')

@section('content')
    <div class="callout callout-info">
        <div class="col-md-8">
            <h5><i class="fas fa-info"></i> Detalle del Personaje:</h5>
            Detalle del Personaje de la Serie Breaking Bad
        </div>
        <div class="col-md-4">
            <a style="text-decoration: none;" class="col-md-2 btn btn-outline-secondary btn-block btn-sm"
                href="{{ route('personajes') }}"><i class="fa fa-backward"></i> Volver</a>
        </div>
    </div>
    <div class="card card-secondary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ $data[0]->img }}" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">{{ $data[0]->name }}</h3>
            <p class="text-muted text-center">{{ $data[0]->nickname }}</p>
            <div class="tab-pane active" id="timeline">

                <div class="timeline timeline-inverse">

                    <div class="time-label">
                        <span class="bg-danger">
                            Detalle
                        </span>
                    </div>
                    <div>
                        <i class="fas fa-user bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><b>Fecha Nacimiento</b></h3>
                            <div class="timeline-body">
                                {{ $data[0]->birthday }}
                            </div>
                        </div>
                    </div>

                    <div>
                        <i class="fas fa-globe bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><b>Estado</b></h3>
                            <div class="timeline-body">
                                {{ $data[0]->status }}
                            </div>
                        </div>
                    </div>

                    <div>
                        <i class="fas fa-pencil-alt bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><b>Reparto</b></h3>
                            <div class="timeline-body">
                                {{ $data[0]->portrayed }}
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-edit bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><b>Ocupación</b></h3>
                            <div class="timeline-body">
                                @foreach ($data[0]->occupation as $d)
                                    <span class="badge badge-success">{{ $d }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-search bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><b>Apariciones</b></h3>
                            <div class="timeline-body">
                                @foreach ($data[0]->appearance as $d)
                                    <span class="badge badge-secondary">Temporada: {{ $d }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div>
                        <i class="far fa-clock bg-gray"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
