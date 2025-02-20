@php
    use GuzzleHttp\Client;

    $client = new Client();
    
    $headerband_response = $client->request('GET', 'http://127.0.0.1:8000/api/headerbands/company/2');
    $headerbands = json_decode($headerband_response->getBody(), true);
@endphp

@if(!empty($headerbands))
@foreach($headerbands as $hb)
	<style type="text/css">
		.headerband-{{ Str::slug($hb['title']) }}{
			background-color: {{ $hb['hex_background']  }} !important;
			color: {{ $hb['hex_text']  }} !important;
        }

        .headerband{
            padding: 10px 0;
            position: absolute  !important;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: 999;
        }
        
	</style>

	<div class="headerband headerband-{{ Str::slug($hb['title']) }}">
		<div class="container">
			<div class="row">
				<div class=" d-flex align-items-center justify-content-center">
					<h6 class="mb-0 me-3">{{ $hb['title'] }}</h6>
					{!! $hb['text'] !!}
				</div>
			</div>
		</div>
	</div>
	@endforeach
@endif