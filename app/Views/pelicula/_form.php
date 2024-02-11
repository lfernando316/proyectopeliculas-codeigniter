<label for="titulo">Título</label>
<input type="text" name="titulo" placeholder="Título" id="titulo" value="<?= $pelicula['titulo'] ?>">
<label for="descripcion">Descripción</label>
<textarea type="text" name="descripcion" placeholder="Descripción"
    id="descripcion"><?= $pelicula['descripcion'] ?><?= $pelicula['titulo'] ?></textarea>
<button type="submit">
    <?= $op ?>
</button>