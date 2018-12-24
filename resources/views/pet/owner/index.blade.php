@extends(env('THEME').'.layouts.owner')

@section('navigation')
	{!! $navigation !!}
@endsection

@section('sideBar')
	{!! $sideBar !!}
@endsection

@section('content')
	{!! $content !!}
@endsection

@section('rightBar')
	{!! $rightBar !!}
@endsection


@section('footer')
	{!! $footer !!}
@endsection

