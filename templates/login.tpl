{include file='templates/header.tpl'}
{if isset($smarty.session.USER_ID) }
    <h1> LOGUEADO </h1>
    {else}
<h2>Login</h2>

<form  method="post" action="verify">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" required id="password" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    {/if}
{include file='templates/footer.tpl'}