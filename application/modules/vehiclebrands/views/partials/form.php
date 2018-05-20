<form method="post" class="m-form">

	<div class="m-portlet__body">

		<?= validation_errors(); ?>

		<div class="form-group m-form__group">

			<label for="example_input_full_name">
				Marca:
			</label>

			<input name="name" value="<?= (isset( $id )) ? $getResult->getName() : set_value('name') ?>" class="form-control m-input" placeholder="Introduce el nombre de la marca" type="text">

		</div>

		<div class="form-group m-form__group">

			<label class="m-checkbox">

				<input name="state" value="1" <?= (isset( $id )) ? ( $getResult->getState() == 1 ) ? 'checked' : ''  : 'checked'  ?> type="checkbox">Estado<span></span>

			</label>

		</div>

	</div>

	<div class="m-portlet__foot m-portlet__foot--fit">

		<div class="m-form__actions m-form__actions">

			<button name="submit-form" type="submit" class="btn btn-primary"><i class="la la-floppy-o"></i> Gurdar</button>
			
			<?php if( isset( $id ) ): ?>

				<a href="<?= site_url('marcas') ?>" class="btn btn-secondary"><i class="la la-angle-left"></i> Volver</a>

			<?php endif ?>

		</div>


	</div>

</form>