@extends(env('THEME').'.layouts.owner')

@section('navigation')
	{!! $navigation !!}
@endsection


@section('content')
	{!! $content !!}
@endsection


@section('footer')
	{!! $footer !!}
@endsection

