<html>
	<head>
		<title>Agencies details</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

	<body>
		
		<header>
			<div class="admin_logo">
				<img src="../img/logo.png">
			</div>
			<div class="admin_title"><b>Pleasure</b>Chatting</div>
			<div><a href="" class="logout_button">Logout</a></div>
		</header>

		<div class="admin_content">
			<div class="sidebar">
				<div class="sidebar_title"><div>Welcome,<br>Administrator</div></div>
				<label>DISCOVER</label>
				<a class="list" href="">Agencies details</a>
				<label>TOOLS</label>
				<a class="list" href="">List of profiles</a>
			</div>

			<div class="main_content">
				<div class="content_header">
					<div class="col col_left sender_col">
						<label>Current Month</label>						
						<div class="month">December 2017</div>
						<div class="details_number_row"><div class="details_number">$ 1 502</div></div>
					</div>
					<div class="col col_left sender_col">
						
						<label>Total Agencies</label>
						<div class="details_number_row"><div class="details_number">12</div></div>
						
					</div>
					<div class="col col_right sender_col">
						
						<label>Total Profiles</label>
						<div class="details_number_row"><div class="details_number">299</div></div>
					</div>
				</div>
				<div class="profiles">

					<div class="profiles_top">
						<label>List of profiles</label>

						<form action="">
						  <input type="search" class="search_text" name="search" placeholder="Search...">
						  <input type="submit" value="" class="search_submit">
						</form>

					</div>
					

					
					<table>
						<thead>
							<tr>
								<th class="rb">#</th>
								<th>Agency name</th>
								<th>Registration date</th>
								<th>Number of profiles </th>
								<th>Total spent</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="rb">1</td>
								<td>Agency name 1</td>
								<td>23, Dec 2017</td>
								<td>49</td>
								<td>$397</td>
								
							</tr>
							<tr>
								<td class="rb">2</td>
								<td>Agency name 2</td>
								<td>23, Dec 2017</td>
								<td>59</td>
								<td>$447</td>
								
							</tr>
							<tr>
								<td class="rb">3</td>
								<td>Agency name 3</td>
								<td>23, Dec 2017</td>
								<td>30</td>
								<td>$247</td>
								
							</tr>
						</tbody>
					</table>

					<div class="buttons">
						<input type="button" name="" class="credit" value="Credit selected">
						<input type="button" name="" class="delete" value="Delete selected">
						<input type="button" name="" class="add" value="Add new profile">
					</div>

				</div>
			</div>
		</div>

		<div class="modal" id="editing">
			<div class="modal_box">
				<div class="modal_title">Editing profile</div>
				<form class="modal_content" action="" method="GET">
					<label>Lady's name:</label>
					<input type="text" value="" name="edit_name" class="edit_name">
				</form>
				<div class="modal_buttons">
					<input type="submit" class="confirm" value="Confirm" name="submit_modal">
					<input type="button" class="cancel" value="Cancel" name="submit_modal">
				</div>
			</div>
		</div>

		<div class="modal" id="add_new">
			<div class="modal_box">
				<div class="modal_title">Adding new profile</div>
				<form class="modal_content" action="" method="GET">
					<label>Profile ID:</label>
					<input type="text" value="" name="profile_id" class="profile_id">
					<label>Lady's name:</label>
					<input type="text" value="" name="lady_name" class="lady_name">
				</form>
				<div class="modal_buttons">
					<input type="submit" class="confirm" value="Add" name="submit_modal">
					<input type="button" class="cancel" value="Cancel" name="submit_modal">
				</div>
			</div>
		</div>

		<div class="modal" id="credit">
			<div class="modal_box">
				<div class="modal_title">Crediting selected profiles</div>
				<div class="modal_description">Please select services for selected profile</div>
				<form class="modal_content" action="" method="GET">		
					<div class="credit_box">
						<label>Chat:</label>

						<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    30
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="#">30</a></li>
						    <li><a href="#">40</a></li>
				
						  </ul>
						</div>

						<label>Email:</label>
						<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    30
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <li><a href="#">30</a></li>
						    <li><a href="#">40</a></li>
				
						  </ul>
						</div>

						<div class="total"><span>= </span>$9</div>
					</div>
				</form>
				<div class="modal_buttons">
					<input type="submit" class="confirm modal_credit" value="Credit" name="submit_modal">
					<input type="button" class="cancel" value="Cancel" name="submit_modal">
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>

	</body>
</html>

