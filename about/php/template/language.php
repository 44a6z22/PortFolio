<div class="alert">
    <form action="index.php" methor="get" id="form">
        <input type="submit" name="lang" id="en" value="en">
        <input type="submit" name="lang" id="fr" value="fr">
    </form>
</div>

<style>
    .alert {
        height: 10%;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        flex-direction: column;
    }

    #form{
    } 
    
    #en,
    #fr {
        width: 50px;
        height: 50px;
    }
</style>