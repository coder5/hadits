<div class="span10">
	<div class="hero-unit">
		<h1>Pencarian Hadits</h1>
		<p>Anda Dapat Mencari Hadits yg memenuhi keyword yg anda masukan pada
			pilahan 1 , Jika Anda Ingin Mengeluarkan Kata yg tidak di inginkan
			bisa masukan di input minus no.2 .</p>
		<p>
			<a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a>
		</p>
		<div class="row-fluid">
			<div class="span6">
				<h2>Bhs Indonesia</h2>
				<form class="navbar-form pull-left" class="form-search"
					action="<?php echo site_url();?>search/result/" method="POST" />
				<p>
					<input placeholder="Keyowrd" id="search_bool" name="search_bool"
						type="text" /> <input id="search_bool_min"
						placeholder="Keluarkan Keyword" name="search_bool_min" type="text" />
				</p>
				<p>
					<input id="search_bab_kitab" placeholder="Search by Bab or Kitab"
						name="search_bab_kitab" type="text" />
				</p>
				<p>
					<input id="search_like" placeholder="Search Match"
						name="search_like" type="text" />
				</p>
				<p>
					<input id="search_like_exact" placeholder="Search Exact"
						name="search_like_exact" type="text" />
				</p>

				<p>
					<input id="search_no" placeholder="Cari No Hadits" name="search_no"
						type="text" />
				</p>
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" checked="checked" value="0"> All
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="1"> Bukhari
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="2"> Muslim
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="3"> Abu Daud
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="4"> Tirmidzi
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="5"> Nasa'i
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="6">Ibnu Majah
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="7">Ahmad
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="8">Malik
					</label> 
					<label class="checkbox"> 
					<input type="checkbox" name="imam_id" value="9"> Ad Darimi
					</label> 
				<p>
					<input type="submit" value="Search" class="btn" name="search"
						class="submit" />
				</p>
				</form>
				<p>
					<a class="btn" href="#">Help &raquo;</a>
				</p>
			</div>
			<!--/span-->
			<div class="span6">
				<form action="<?php echo site_url();?>search/result/" method="POST" />
				<h2>Bhs Arab</h2>
				<p>
					  <input placeholder="Arabic Search Contain Harakat"
						id="search_bool_arab" name="search_bool_arab" type="text"
						class="keyboardInput" /><input id="search_bool_min_arab" placeholder="keluarkan kata Arab"
						name="search_bool_min_arab" type="text" class="keyboardInput" />
				</p>
				<p><label>Cari Bhs Arab tanpa harakat (Gundul)</label>
					  <input placeholder="Arabic Search Contain Tanpa Harakat"
						id="search_bool_arab_gundul" name="search_bool_arab_gundul" type="text"
						class="keyboardInput" /><input id="search_bool_min_arab_gundul" placeholder="keluarkan kata Arab"
						name="search_bool_min_arab_gundul" type="text" class="keyboardInput" />
				</p>
				<p>		<input
						id="search_like_arab" placeholder="Search Match" ="search_like_arab" type="text"
						class="keyboardInput" />
				</p>
				<p>
					<input placeholder="Search Exact"
						id="search_like_exact_arab" name="search_like_exact_arab"
						type="text" class="keyboardInput" />
				</p>
				<p>
					<input type="submit" value="SubmitArab" class="btn" name="search"
						class="submit" />
				</p>
				</form>
				<p>
					<a class="btn" href="#">Help &raquo;</a>
				</p>
			</div>
			<!--/span-->
		</div>
		<!--/row-->
	</div>
	<div class="row-fluid">
		<div class="span6">
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
		<div class="span6">
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
	<div class="row-fluid">
		<div class="span4">
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
		<div class="span4">
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
		<div class="span4">
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
