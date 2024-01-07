<!DOCTYPE html>
<html lang="en">
<head>
    @include("partials.html-header",["title"=>"User Registeration"])
    <link rel="stylesheet" href="{{ asset('cssFile/graduatePF.css') }}">
</head>
<body>
    @include("partials.header",['isLogin' => false])
    @include("partials.nav-bar",['isLogin' => true])
    {{-- constent --}}
    <div>
        @if($type=='Admin')
        @include("user.partials.admin-registration")
        @endif
        @if($type=='Alumini')
        @include("user.partials.alumini-registration")
        @endif
        @if($type=='Student')
        @include("user.partials.student-registration")
        @endif

    </div> 

    {{-- end-constent --}}
    @include("partials.footer",["title"=>"Home"])
    @include("partials.scripts")
</body>
</html>