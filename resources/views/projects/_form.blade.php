@csrf                
        <div class="form-group">
			<label for="title">Titulo de Proyecto</label>
				<input  class="form-control bg-light shadow-sm 
				@error('title') is-invalid @else border-0 @enderror"
					id="title"
					name="title" 
					placeholder="Escribe aqui Titulo de Proyecto .." 
					value="{{ old('title')}}">
				@error('title')
					<span class="invalid-feedback" role="alert">	
						<strong>{{$message}}</strong>
					</span>			
				@enderror
		</div>
		<div class="form-group">
			<label for="name">URL de Proyecto</label>
				<input  class="form-control bg-light shadow-sm 
				@error('url') is-invalid @else border-0 @enderror"
					id="url"
					name="url" 
					placeholder="Escribe aqui URL del Proyecto .." 
					value="{{ old('url')}}">
				@error('url')
					<span class="invalid-feedback" role="alert">	
						<strong>{{$message}}</strong>
					</span>			
				@enderror
		</div>
		<div class="form-group">
					<label for="description">Descripcion de Proyecto</label>
					<input  class="form-control bg-light shadow-sm 	
					@error('description') is-invalid @else border-0 @enderror"
						id="description"
						name="description" 
						placeholder="Escribe aqui tu Mensaje.." 
						value="{{ old('description')}}">
						@error('description')
							<span class="invalid-feedback" role="alert">	
								<strong>{{$message}}</strong>
							</span>			
						@enderror
				</div>
<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>

<a class="btn btn-link btn-block"
	href="{{route('projects.index')}}">
    	Cancelar
</a>