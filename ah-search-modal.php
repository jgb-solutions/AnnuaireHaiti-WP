<div class="modal fade" id="ahSearchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" hidden="true">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Rechercher une Entreprise</h4>
			</div>
			<div class="modal-body">
				<form id="ahSearchModalForm" role="search" action="<?php echo home_url( '/' ); ?>">
					<div class="input-group">
						<input id="s" name="s" type="text" class="form-control" placeholder="Rechercher une Entreprise...">
						<span class="input-group-btn">
							<button class="btn btn-yellow" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<div id="ahSearchResults"></div>
			</div>
			<div class="modal-footer" hidden="true">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>