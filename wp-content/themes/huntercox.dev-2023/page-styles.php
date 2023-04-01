<?php
get_header();

?>
<div class="page">
	<div class="page__header">
		<div class="container">
			<div class="page__header--inner">
				<?php
				if (is_admin()) {
					the_title('<h1 class="page__title">', '</h1> (page)');
				} else {
					the_title('<h1 class="page__title">', '</h1>');
				}
				?>
			</div>
		</div>
	</div>
	<div class="page__content">
		<div class="container">
			<div class="page__wysiwyg">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="page__content--styles">

			<div class="tables">
				<div class="container">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Date</th>
								<th>Description</th>
								<th>True/False</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Item's Name</td>
								<td>03/31/2023</td>
								<td>The something item.</td>
								<td>True</td>
							</tr>
							<tr>
								<td>Item's Name</td>
								<td>03/31/2023</td>
								<td>The something item.</td>
								<td>False</td>
							</tr>
							<tr>
								<td>Item's Name</td>
								<td>03/31/2023</td>
								<td>The something item.</td>
								<td>True</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
