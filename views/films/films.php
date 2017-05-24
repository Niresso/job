<?php include ROOT.'/views/layouts/header.php'; ?>

    <div class="container">

        <div class="hero-unit" style="text-align: center">
            <h1>Фильмы:</h1>
        </div>

      <form>
          <input type="submit" id="btnn" class="btn" value="Все фильмы" />
          <a href="#win" class="btn" style="float: right">Добавить фильм</a>
      </form>

        <script src="/template/js/common.js"></script>

    <div id="result_form"></div>

    <div class="container">

        <hr>
        <!-- Модальное окно -->
        <a href="#" class="overlay" id="win"></a>
        <div class="popup">

            <h2 style="text-align: center">Добавить фильм!</h2>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $err): ?>
                        <li><?php echo $err ; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form method="post"  id="" class="form-horizontal" style="margin-left:120px" enctype="multipart/form-data">

                <div class="control-group">
                    <label class="control-label" for="inputText">Название:</label>
                    <div class="controls">
                        <input type="text" id="inputText" placeholder="Name" name="name" class="span5" value="">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="exampleInputFile">Формат <br>(VHS, DVD, Blu-Ray):</label>
                    <div class="controls">
                        <input type="file" id="exampleInputFile" class="span5" name="film" value="">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputText">Актеры:</label>
                    <div class="controls">
                        <input type="text" id="inputText" placeholder="Name" name="actors" class="span5" value="">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputText">Год выхода:</label>
                    <div class="controls">
                        <input type="number" id="inputText" placeholder="Name" name="year" class="span5" value="">
                    </div>
                </div>

                <div class="control-group" >
                    <div class="controls">
                        <input type="submit" class="btn" name="addfilm" style="margin-left:280px">
                    </div>
                </div>

            </form>
        </div>
    </div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>