<div class='header'>
	<div class='navbar navbar-default navbar-inverse'>
		<div class='logo'>
			<a class="navbar-brand" href="<?php echo $this->Html->url('/TopPage', true); ?>">　InsightTool Table Search</a>
		</div>
		<button class='navbar-toggle' data-target='#navbar-responsive-collapse' data-toggle='collapse' type='button'>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		</button>
		<div class='navbar-collapse collapse navbar-right' id='navbar-responsive-collapse'>
			<ul class='nav navbar-nav'>
				<li class=''><?php echo $this->Html->link('ALL', '/All'); ?></li>
				<li class=''><?php echo $this->Html->link('CombiBarcode', '/combi_barcode'); ?></li>
				<li class=''><?php echo $this->Html->link('Barcode', '/barcode'); ?></li>
				<li class=''><?php echo $this->Html->link('Plate', '/plate'); ?></li>
				<li class=''><?php echo $this->Html->link('Vial', '/vial'); ?></li>
			</ul>
		</div>
	</div>
</div>