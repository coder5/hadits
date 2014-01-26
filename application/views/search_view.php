<div class="col-md-10">
	<div class="jumbotron">
		<h2>Pencarian Hadits</h2>
		<p>Anda Dapat Mencari Hadits yg memenuhi keyword yg anda masukan pada
			pilahan 1 , Jika Anda Ingin Mengeluarkan Kata yg tidak di inginkan
			bisa masukan di input minus no.2 .</p>
		<p>
			<a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a>
		</p>
		<div class="row">
			<div class="col-md-6">
				<h3>
					Bhs Indonesia<span class="glyphicon glyphicon-search white"></span>
				</h3>
				<form class="navbar-form navbar-left" class="form-search"
					role="search" enctype="multipart/form-data"
					action="<?php echo site_url();?>search/result/" method="POST" />

				<div class="form-group">
					<p>
						<input placeholder="Keyowrd" id="search_bool" name="search_bool"
							type="text" class="form-control" /> <input id="search_bool_min"
							placeholder="Keluarkan Keyword" name="search_bool_min"
							type="text" class="form-control" />
					</p>
					<p>
						<input id="search_bab_kitab" placeholder="Search by Bab or Kitab"
							name="search_bab_kitab" type="text" class="form-control" />
					</p>
					<p>
						<input id="search_like" placeholder="Search Match"
							name="search_like" type="text" class="form-control" />
					</p>
					<p>
						<input id="search_like_exact" placeholder="Search Exact"
							name="search_like_exact" type="text" class="form-control" />
					</p>

					<p>
						<input id="search_no" placeholder="Cari No Hadits"
							name="search_no" type="text" class="form-control" />
					</p>
					<label class="checkbox"> <input type="checkbox" name="imam_id[]"
						checked="checked" value="0"> All
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="1"> Bukhari
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="2"> Muslim
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="3"> Abu Daud
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="4"> Tirmidzi
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="5"> Nasa'i
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="6">Ibnu Majah
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="7">Ahmad
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="8">Malik
					</label> <label class="checkbox"> <input type="checkbox"
						name="imam_id[]" value="9"> Ad Darimi
					</label>
					<p>
						<input type="submit" value="Search" class="btn" name="search"
							class="submit" />
					</p>
				</div>
				</form>
				<p>
					<a class="btn" href="#">Help &raquo;</a>
				</p>
			</div>
			<!--/span-->
			<div class="col-md-6">
				<form action="<?php echo site_url();?>search/result/" method="POST"
					class="form-search" />
				<div class="form-group">
					<h3>Bhs Arab</h3>
					<p>
						<input placeholder="Arabic Search Contain Harakat"
							id="search_bool_arab" name="search_bool_arab" type="text"
							class="keyboardInput form-control" /><input
							id="search_bool_min_arab" placeholder="keluarkan kata Arab"
							name="search_bool_min_arab" type="text"
							class="keyboardInput form-control" />
					</p>
					<p>
						<label>Cari Bhs Arab tanpa harakat (Gundul)</label> <input
							placeholder="Arabic Search Contain Tanpa Harakat"
							id="search_bool_arab_gundul" name="search_bool_arab_gundul"
							type="text" class="keyboardInput form-control" /><input
							id="search_bool_min_arab_gundul"
							placeholder="keluarkan kata Arab"
							name="search_bool_min_arab_gundul" type="text"
							class="keyboardInput form-control" />
					</p>
					<p>
						<input id="search_like_arab" placeholder="Search Match"
							="search_like_arab" type="text"
							class="keyboardInput form-control" />
					</p>
					<p>
						<input placeholder="Search Exact" id="search_like_exact_arab"
							name="search_like_exact_arab" type="text"
							class="keyboardInput form-control" />
					</p>
					<p>
						<input type="submit" value="SearchArab" class="btn" name="search"
							class="submit" />
					</p>
				</div>
				</form>
				<p>
					<a class="btn" href="#">Help &raquo;</a>
				</p>
			</div>
			<!--/span-->
		</div>
		<!--/row-->
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>Heading</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus.
				<button id="clickme">ReadMore</button>
				<span id="expendable" style="display: none">Fusce dapibus, tellus ac
					cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
					justo sit amet risus. Etiam porta sem malesuada magna mollis
					euismod. Donec sed odio dui.</span>
			</p>
			<p>
				<a class="btn" href="#">View details &raquo;</a>
			</p>
		</div>
		<!--/span-->
		<div class="col-md-6">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus commodo, tortor mauris condimentum nibh, ut
				fermentum massa justo sit amet risus. Etiam porta sem malesuada
				magna mollis euismod. Donec sed odio dui.</p>
			<p>
				<a class="btn" href="#">View details &raquo;</a>
			</p>
		</div>
		<!--/span-->
	</div>
	<!--/row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus commodo, tortor mauris condimentum nibh, ut
				fermentum massa justo sit amet risus. Etiam porta sem malesuada
				magna mollis euismod. Donec sed odio dui.</p>
			<p>
				<a class="btn" href="#">View details &raquo;</a>
			</p>
		</div>
		<!--/span-->
		<div class="col-md-4">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus commodo, tortor mauris condimentum nibh, ut
				fermentum massa justo sit amet risus. Etiam porta sem malesuada
				magna mollis euismod. Donec sed odio dui.</p>
			<p>
				<a class="btn" href="#">View details &raquo;</a>
			</p>
		</div>
		<!--/span-->
		<div class="col-md-4">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus commodo, tortor mauris condimentum nibh, ut
				fermentum massa justo sit amet risus. Etiam porta sem malesuada
				magna mollis euismod. Donec sed odio dui.</p>
			<p>
				<a class="btn" href="#">View details &raquo;</a>
			</p>
		</div>
		<!--/span-->
	</div>
	<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->

<hr>
