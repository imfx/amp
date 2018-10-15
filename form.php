<div class="columns is-fullheight">
	<?php include('sidebar.php') ?>

	<div class="column is-main-content">
		<h1 class="title">Form Elements</h1>
		<h2 class="subtitle">The indispensable form controls, designed for maximum clarity.</h2>
		<div class="box">
			<div class="field">
				<label class="label">Name</label>
				<div class="control">
					<input class="input" type="text" placeholder="Text input">
				</div>
			</div>
			<div class="field">
				<label class="label">Username</label>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-success" type="text" placeholder="Text input" value="bulma">
					<span class="icon is-small is-left">
						<i data-feather="user"></i>
					</span>
					<span class="icon is-small is-right">
						<i data-feather="chevron-up"></i>
					</span>
				</div>
				<p class="help is-success">This username is available</p>
			</div>
			<div class="field">
				<label class="label">Email</label>
				<div class="control has-icons-left has-icons-right">
					<input class="input is-danger" type="email" placeholder="Email input" value="hello@">
					<span class="icon is-small is-left">
						<i data-feather="mail"></i>
					</span>
					<span class="icon is-small is-right">
						<i class="fas fa-exclamation-triangle"></i>
					</span>
				</div>
				<p class="help is-danger">This email is invalid</p>
			</div>
			<div class="field">
				<label class="label">Subject</label>
				<div class="control">
					<div class="select is-fullwidth">
						<select>
							<option>Select dropdown</option>
							<option>With options</option>
						</select>
					</div>
				</div>
			</div>
			<div class="field">
				<label class="label">Message</label>
				<div class="control">
					<textarea class="textarea" placeholder="Textarea"></textarea>
				</div>
			</div>

			<div class="field">
				<div class="control">
					
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span>I agree to the <a href="#">terms and conditions</a></span>
						</label>
					</div>
				</div>
				<!-- END control -->
			</div>
			<!-- END field -->

			<div class="field">
				<div class="control">
					<label class="label" for="exampleInputEmail1">Input Checkbox</label>

					<!-- Default checkbox -->
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span>Option 1</span>
						</label>
					</div>
					
					<!-- Default checkbox -->
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span>Option 2</span>
						</label>
					</div>
					
					<!-- Default checkbox -->
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							<span>Option 3</span>
						</label>
					</div>

					<label for="exampleInputEmail1">Checked</label>

					<!-- Checked checkbox -->
					<div class="checkbox">
						<label>
							<input type="checkbox" checked>
							<span>Option 4 is checked by default</span>
						</label>
					</div>

					
					<label for="exampleInputEmail1">Disabled</label>
					<!-- Disabled checkbox -->
					<div class="checkbox disabled">
						<label>
							<input type="checkbox" value="" disabled>
							<span>Option 5 is disabled</span>
						</label>
					</div>

					<label class="label" for="exampleInputEmail1">Radio</label>

					<div class="radio">
						<label>
							<input type="radio" name="radio">
							<span>Option 1</span>
						</label>
					</div>
					<!-- END radio -->

					<div class="radio">
						<label>
							<input type="radio" name="radio">
							<span>Option 2</span>
						</label>
					</div>
					<!-- END radio -->

					<div class="radio">
						<label>
							<input type="radio" name="radio" disabled>
							<span>Option Disabled</span>
						</label>
					</div>
					<!-- END radio -->

					<div class="radio">
						<label>
							<input type="radio" name="radio">
							<span>Option 3</span>
						</label>
					</div>
					<!-- END radio -->
				</div>
				<!-- END control -->
			</div>
			<!-- END field -->

			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link">Submit</button>
				</div>
				<div class="control">
					<button class="button is-text">Cancel</button>
				</div>
			</div>
		</div>
		<!-- END box -->
	</div>
	<!-- END column -->
</div>
<!-- END columns -->