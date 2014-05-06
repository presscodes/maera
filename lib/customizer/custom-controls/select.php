<?php

class SS_Select_Control extends WP_Customize_Control {
	/**
	 * @access public
	 * @var string
	 */
	public $type = 'select';

	public function render_content() {

		if ( empty( $this->choices ) ) {
			return;
		} ?>

		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?>
				<?php if ( isset( $this->description ) && ! empty( $this->description ) { ?>
					<a href="#" class="button tooltip" title="<?php echo strip_tags( esc_html( $this->description ) ); ?>">?</a>
				<?php } ?>
			</span>

			<select <?php $this->link(); ?>>
				<?php
				foreach ( $this->choices as $value => $label ) {
					echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . $label . '</option>';
				} ?>
			</select>
		</label>
		<?php
	}
}
