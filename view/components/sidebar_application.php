<div id="camadas">
	<div class="row right-align">
		<a href="admin.php"><i class="fas fa-user"></i></a>
		<a class="modal-trigger" href="#save-drawing-modal""><i class="fas fa-save"></i></a>
		<a href="controller/logout.php"><i class="fas fa-sign-out-alt"></i></a>
	</div>
	<div id="layers">
		<ul id="listObjetos" class="collection black-text">
		</ul>
	</div>
	<div id="colors-config">
		<h1 class="title">Colors</h1>
		<div id="colorSelector">
			<div></div>
		</div>
		<div id="borderSelector">
			<div></div>
		</div>
	</div>
	<a id="deletar-item" class="red-text darken-1 tooltipped right" data-position="bottom" data-delay="50" data-tooltip="Deletar" data-item="" ><i class="material-icons">delete</i></a>

	<div class="row">
		<p>Espessura da borda:</p>
	</div>
	<form action="#">
		<p class="range-field">
			<input type="range" id="range" min="0" max="50" />
		</p>
	</form>
</div>
