<?php 
	function getSpan($_){
		if(isset($_['label'])){
			$r = '<span class="pull-right-container">';
  			if(is_array($_['label'])){
  				foreach(array_reverse($_['label']) as $keyL1 => $l1){
  					$r .= '<small class="label bg-'.$l1['label-color'].' pull-right">'.$l1['label'].'</small>';
  				}
  			}else{
  				$r .= '<span class="label bg-'.($_['label-color']??'blue').' pull-right">'.$_['label'].'</span>';
  			}
  			$r .= '</span>';
  			return $r;
		}
	}

	function getLi($_,$__){
		print_r('
			<li>
	    		<a href="'.route($_['route']).'" data-toggle="tooltip" data-placement="right" title="'.$__.'">
	          		<i class="fa '.($_['icon'] ?? 'fa-circle-o').'"></i>
	          		<span>'.$__.'</span>
	          		'.getSpan($_).'
	          	</a>
      		</li>
		');
	}
	function getA($_,$__){
		if(isset($_['icon']) && is_string($_['icon'])){
			$r = '<i class="fa '.$_['icon'].'"></i>';
			//unset($_['icon']);
		}else{
			$r = '<i class="fa fa-circle-o"></i>';
		}
		print_r('
			<a href="#">
				'.$r.'
				<span>'.$__.'</span>
				<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
		');
	}
?>


<!-- Optionally, you can add icons to the links -->
{{--generarMenu(config('adminlte.Menu'),'') --}}


@foreach(config('adminlte.Menu') ?? [] as $key1 => $module)
	@if(isset($module['route']))
		{{ getLi($module,$key1) }}
  	@else
      	<li class="treeview">
			@php
	        	getA($module,$key1);
	        	unset($module['icon']);
			@endphp
            <ul class="treeview-menu">
				@foreach ($module as $key2 => $agrupacion)
					@if(isset($agrupacion['route']))
						{{ getLi($agrupacion,$key2) }}
					@else
						<li class="treeview">
		                    @php
		                    	getA($agrupacion,$key2);
		                    	unset($agrupacion['icon']);
		                    @endphp
		                    <ul class="treeview-menu">
								@foreach ($agrupacion as $key3 => $opciones)
									@if(isset($opciones['route']))
										{{ getLi($opciones,$key3) }}
									@else
										<li class="treeview">
											@php
						                    	getA($opciones,$key3);
						                    	unset($opciones['icon']);
						                    @endphp
											<ul class="treeview-menu">
												@foreach ($opciones as $key4 => $subopciones)
													@if(isset($subopciones['route']))
														{{ getLi($subopciones,$key4) }}
													@else

													@endif
												@endforeach
											</ul>
										</li>
									@endif
								@endforeach
		                    </ul>
	                  	</li>
					@endif
				@endforeach
            </ul>
		</li>
  	@endif
@endforeach

    
