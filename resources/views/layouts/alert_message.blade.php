@if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
    </p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger">
        {{ session()->get('error') }}
    </p>
@endif
{{--@php--}}
{{--    if (app()->getLocale() == 'no'){--}}
{{--        setlocale(LC_TIME, array('nb_NO.UTF-8','nb_NO@norw','nb_NO','norwegian'));--}}
{{--        }--}}
{{--@endphp--}}
