@extends ('admin.layouts.dashboard')
@section('page_heading','Charts')
@section('section')
<div class="col-sm-12">	
	<div class="row">
		<div class="col-sm-6">
			@section ('cchart1_panel_title','Line Chart')
			@section ('cchart1_panel_body')
			@include('admin.widgets.charts.clinechart')
			@endsection
			@include('admin.widgets.panel', array('header'=>true, 'as'=>'cchart1'))

			@section ('cchart3_panel_title','Donut Chart')
			@section ('cchart3_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('admin.widgets.charts.cdonutchart')</div>
			@endsection
			@include('admin.widgets.panel', array('header'=>true, 'as'=>'cchart3'))
		</div>
		<div class="col-sm-6">
			
			@section ('cchart2_panel_title','Pie Chart')
			@section ('cchart2_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('admin.widgets.charts.cpiechart')</div>
			@endsection
			@include('admin.widgets.panel', array('header'=>true, 'as'=>'cchart2'))

			@section ('cchart4_panel_title','Bar Chart')
			@section ('cchart4_panel_body')
			@include('admin.widgets.charts.cbarchart')
			@endsection
			@include('admin.widgets.panel', array('header'=>true, 'as'=>'cchart4'))
		</div> 
	</div>
	
	
</div>
@stop
