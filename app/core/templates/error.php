<style>
    #openmvc-error {
        width: 820px;
        background: #f5f5f5;
        padding: 10px;
        box-shadow: 1px 1px 3px #333;
    }
</style>
<meta charset="utf-8">
<center>
    <h2 class='openmvc-error'>OpenMVC ERROR:: </h2>
    <?php echo (!empty($num_error) ? "<h1 style='font-size: 100px'>{$num_error}</h1> " : ""); ?>
    <div id='openmvc-error'><?php echo $error_message ?></div>
</center>