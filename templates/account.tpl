
<div class="row">
	 
	<div id='accountContent'>

       
	<div class="col-lg-2"></div>	
		<!-- MAIN CONTENT OF THE ACCOUNT -->
		<!-- <article class="col-lg-offset-1 col-sm-offset-1 col-lg-8 col-sm-7 col-lg-push-3 col-sm-push-4"> -->
<article class="col-lg-8">
        <h3>My Account</h3>
        <hr><br>
        <fieldset disabled>
            <form action="" method="post" >
                <div class="form-group">
                    <label for="FirstName">First name</label>
                    <!-- <p class="error">{if isset($error.name)}{foreach $error.name as $errors}{$errors}<br>{/foreach}{/if}</p> -->
                    <input type="text"  class="form-control" id="name" value="{$data.first_name}" disabled>
                    <input type="hidden" name="name" value="{$data.first_name}">
                </div>

                  <div class="form-group">
                    <label for="LastName">Last name</label>
                    <!-- <p class="error">{if isset($error.name)}{foreach $error.name as $errors}{$errors}<br>{/foreach}{/if}</p> -->
                    <input type="text"  class="form-control" id="name" value="{$data.last_name}" disabled>
                    <input type="hidden" name="name" value="{$data.last_name}">
                </div>
                
                <div class="form-group">
                    <label for="Username">Username</label>
                    <!-- <p class="error">{if isset($error.username)}{foreach $error.username as $errors}{$errors}<br>{/foreach}{/if}</p> -->
                    <input type="text" name="username" class="form-control" id="Username" value="{$data.username}">
                </div>
                
                <div class="form-group">
                    <label for="Password">Password</label>
                    <!-- <p class="error">{if isset($error.password)}{foreach $error.password as $errors}{$errors}<br>{/foreach}{/if}</p> -->
                    <input type="password" name="password" class="form-control" id="Password" value="{*$data.password*}">
                </div>
                
                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <!-- <p class="error">{if isset($error.email)}{foreach $error.email as $errors}{$errors}<br>{/foreach}{/if}</p> -->
                    <input type="text" name="email" class="form-control" id="Email" value="{$data.email}">
                </div>

                <div class="form-group">
                    <label for="Email1">Total chips</label>
                    <!-- <p class="error">{if isset($error.email)}{foreach $error.email as $errors}{$errors}<br>{/foreach}{/if}</p> -->
                    <input type="text" name="email" class="form-control" id="Email" value="{$data.total_chips}">
                </div>
                    
                   
                    
            </form>
         </fieldset>
                <br>  
                <a href='{$data.id}/edit' class="btn btn-info col-lg-4 col-md-4 col-sm-4 "> Edit </a>
        </article>


        
     
       <div class="col-lg-1"></div>    
                
	</div>

</div>  
