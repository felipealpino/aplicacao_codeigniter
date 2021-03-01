<h2> <?php echo $title; ?></h2>

<?php echo validation_errors(); ?> 


<?php echo form_open('news/create'); ?>

    Titulo:  <br>
    <input type="text" name="title"> <br><br>

    Texto: <br>
    <textarea name="text" id="" cols="30" rows="10"></textarea> <br><br>

    <input type="submit" value="Salvar">
    
</form>