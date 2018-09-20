<div class="card card-01">
    <img class="card-img-bottom"
         src="{{ $course->pathAttachment() }}"
         alt="{{ $course->name }}">
    <div class="card-body">
        <span class="badge-box"><i class="fa fa-check"></i></span>
        <h4 class="card-title">{{ $course->name }}</h4>
        <hr>
        <div class="row justify-content-center">
            {{-- añadir parcial para el rating --}}
            @include('parcials.courses.rating')

        </div>
        <hr>
        <span class="badge badge-danger badge-cat">
            {{ $course->category->name }}
        </span>
        <p class="card-text">
            {{ str_limit($course->description, 100) }}
        </p>
        <a href="#" class="btn btn-course btn-block">{{__('Más información')}}</a>
    </div>
</div>