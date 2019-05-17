<div class="alert">
    <form action="index.php" methor="get">
        <input type="submit" name="lang" id="en" value="en">
        <input type="submit" name="lang" id="fr" value="fr">
    </form>
</div>

<style>
    .alert {
        background: grey;
        z-index: 200;
        width: 100%;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #en,
    #fr {
        width: 30px;
        height: 30px;
    }

    #fr {
        background: url(../../assets/images/fr.svg);
    }
</style>