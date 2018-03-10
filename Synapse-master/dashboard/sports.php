<?php $page="competition" ?>
<?php include('header.php') ?>

		<div class="content-wrapper">
			<div class="container-fluid"   id="sports_container" >
				<div>
					<h1> Sports </h1>
					<form>
						<div id="sports_content" >
							<label> Select Category </label> <br/>
							
								       <select> 
                                              <option value="Football"> Football </option>
                                              <option value="Cricket">Cricket </option>
                                              <option value="Basketball">Basketball</option>
                                              <option value="Volleyball">Volleyball </option>
                                              <option value="Table tennis">Table tennis</option>
                                              <option value="Badmintion">Badmintion</option>
                                              <option value="Futsal/Cristal">Futsal/Cristal</option>
                                              <option value="Chess">Chess</option>
                                              <option value="Computer Gaming">Computer Gaming</option>
                                          </select>
						</div>							
							
						<div id="sports_content" > 
							<label> Topic </label> <br/>
							<textarea rows="2" name="" id="" > </textarea>
						</div>

						<div id="sports_content" > 
							<label> Upload Photo </label> <br/>
							<input type="file" name="" id="" >
						</div>

						<div id="sports_content" > 
							<label>  Description </label> <br/>
							<textarea rows="5" name="" id="" > </textarea> 
						</div>

						<input type="submit" value="done" class="pull-right" id="done_button">
					</form>
				</div>

			</div>
		</div>
	</div>
