            <?php include 'include/pre-head.php'; ?>
            <?php include 'plugins/fancyslidingform/links.php'; ?>
	    <?php include 'include/pre-body.php'; ?>
	    
        	<div id="content">		
		<div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="" method="post">
                        <fieldset class="step">
                            <legend>Type of Recovery</legend>
                            <select name="cars">
			  	<option value="email">E-mail</option>
			  	<option value="question">Security Question</option>
			    </select>
                        </fieldset>
			<fieldset class="step">
                            <legend>Confirm</legend>
				<p>
				Everything in the form was correctly filled 
				if all the steps have a green checkmark icon.
				A red checkmark icon indicates that some field 
				is missing or filled out with invalid data. In this
				last step the user can confirm the submission of
				the form.
				</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Reset</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
            </div>   
            </div>       

	    <?php include 'include/post.php'; ?>
