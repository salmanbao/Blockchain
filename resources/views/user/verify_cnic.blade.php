@include('user.layout.header')
<body>
<br>
<div class="container">
    {{ Form::open(array('url' => 'foo/bar')) }}
    //
     {!! csrf_field() !!}
        {{ Form::close() }}
</div>

@include('user.layout.footer')
</body>

</html>
