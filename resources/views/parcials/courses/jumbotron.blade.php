<div class="row" >
    <div class="col-md-12">
        <div class="card pt-5" style="background-image: url('{{ url('/images/jumbotron.png') }}')">
            <div class="text-center text-white d-flex align-items-center py-5 px-4 my-5">
                <div class="col-3" >
                    <img class="img-fluid" src="{{ $course->pathAttachment() }}">
                </div>
                <div class="col-6 text-left">
                    <h1>{{__("Curso")}}: {{ $course->name }}</h1>
                    <h4>{{__("Maestro")}}: {{ $course->teacher->user->name }}</h4>
                    <h5>{{__("Categoria")}}: {{ $course->category->name }}</h5>
                    <h5>{{__("Fecha publicado")}}: {{ $course->created_at->format('d/m/Y') }}</h5>
                    <h5>{{__("Fecha actualizado")}}: {{ $course->updated_at->format('d/m/Y') }}</h5>
                    <h5>{{__("Estudiantes Inscritos")}}: {{ $course->students_count }}</h5>
                    <h5>{{__("Numero de valoraciones")}}: {{ $course->reviews_count }}</h5>
                    @include('parcials.courses.rating')
                </div>
                @include('parcials.courses.action_button')
            </div>
        </div>
    </div>
</div>