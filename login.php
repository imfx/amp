<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- App Style -->
		<link rel="stylesheet" href="css/app.css?<?php echo time(); ?>">

		<!-- Feather Icons -->
		<script src="https://unpkg.com/feather-icons"></script>
	</head>
	<body>
		<nav class="navbar navbar-custom is-dark">
			<div class="navbar-brand">
				<a class="navbar-item" href="http://bulma.io">
					<h1 class="subtitle has-text-white">Constellation</h1>
				</a>
				<div class="navbar-burger burger" data-target="navMenubd-example">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<!-- END navbar-brand -->

			<div class="navbar-menu">
				<div class="navbar-end">
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link" href="/documentation/overview/start/">
							<figure class="image is-24x24 mr-4">
								<img class="is-rounded" src="https://bulma.io/images/placeholders/32x32.png">
							</figure>
							<span>User</span>
						</a>
						<div class="navbar-dropdown is-right is-active">
							<a class="navbar-item has-text-danger" href="https://bulma.io/documentation/elements/box/">
								<i class="mr-4" data-feather="log-out"></i>
								<span>Logout</span>
							</a>
						</div>
					</div>
				</div>
				<!-- END navbar-end -->
			</div>
			<!-- END navbar-menu -->
		</nav>
		<!-- END navbar -->

		<div class="columns is-fullheight">
			<div class="column is-sidebar-menu is-hidden-mobile">
				<aside class="menu">
					<p class="menu-label">
						General
					</p>
					<ul class="menu-list">
						<li>
							<a>
								<i data-feather="image"></i>
								<span>Images</span>
							</a>
						</li>
						<li>
							<a class="is-active">
								<i data-feather="layers"></i>
								<span>Ads</span>
							</a>
							<ul>
								<li>
									<a class="is-active">
										<span>Members</span>
									</a>
								</li>
								<li><a>Plugins</a></li>
							</ul>
						</li>
						<li>
							<a>
								<i data-feather="cpu"></i>
								<span>Invitations</span>
							</a>
						</li>
						<li>
							<a>
								<i data-feather="cloud"></i>
								<span>Cloud Storage</span>
							</a>
						</li>
						<li>
							<a>
								<i data-feather="git-merge"></i>
								<span>Authentication</span>
							</a>
						</li>
					</ul>

					<div class="is-fixed-bottom">
						<ul class="menu-list">
							<li>
								<a>
									<i data-feather="settings"></i>
									<span>Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="column is-main-content">
				<h1 class="title">Override Class</h1>
				<h2 class="subtitle">Prepare your code</h2>
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
							<div class="select">
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
							<label class="checkbox">
								<input type="checkbox">
								I agree to the <a href="#">terms and conditions</a>
							</label>
						</div>
					</div>
					<div class="field">
						<div class="control">
							<label class="radio">
								<input type="radio" name="question">
								Yes
							</label>
							<label class="radio">
								<input type="radio" name="question">
								No
							</label>
						</div>
					</div>
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
		
		<script src="js/app.js"></script>
	</body>
</html>