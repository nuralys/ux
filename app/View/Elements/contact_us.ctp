<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">CONTACT US</span>
    <form method="POST" name="form1" action="form.php" >
		<input  name="name1" id="name" maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Name..."/>
		<input   name="phone1" id="user_phone" maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Number..."/>
		<button type="submit" name="submit1" >Отправить</button>
	</form>
</div>
<div id="overlay"></div>

<div id="modal2" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">Give feedback</span>
        <form method="POST" name="form1" action="form.php" >
			<input  name="name" id="name" maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Name..."/>
			<input   name="site"  maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Site..."/>
			<textarea   class="modal_f" required placeholder=" Text..."> </textarea>
			<button type="submit" name="submit1" >Отправить</button>
		</form>
	</div>
	<div id="overlay"></div>