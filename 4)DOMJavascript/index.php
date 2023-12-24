<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>DOM таблица</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="jqui/jquery-ui.css" rel="stylesheet">
<script src="js/jquery-3.7.1.js"></script>
<script src="jqui/jquery-ui.js"></script>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 
<main class=" w-50 m-auto">
<form>
  <div class="mb-3">
    <h5>Введите текст</h5>
    <input type="text" class="form-control" id="text_input" >
  </div>
  <div class="mb-3">
  <select class="form-select" id="firstselect" aria-label="Default select example">
  <option selected>Выберите название мороженки </option>
  <option value="1">Шоколадное</option>
  <option value="2">Ванильное</option>
  <option value="3">Клубничное</option>
  <option value="4">Мятное</option>
  <option value="5">Фисташковое</option>
  <option value="6">Черничное</option>
  <option value="7">Карамельное</option>
</select>
  </div>
  <div class="mb-3">
  <select class="form-select"  id="secondselect" aria-label="Default select example">
  <option selected>Выберите название пирога</option>
  <option value="1">Яблочный</option>
  <option value="2">Вишневый</option>
  <option value="3">Малиновый</option>
  <option value="4">Клубничный</option>
  <option value="5">Черничный</option>
  <option value="6">Смородиновый</option>
  <option value="7">Грушевый</option>
  <option value="8">Медовый</option>
  <option value="9">Творожный</option>
</select>
  </div>
  <!-- Button trigger modal -->
  <button type="button" id="myButton" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Открыть модальное окно
</button>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Модальное окно</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Введеный текст <p id="text"></p>
      <p id="ice_p"></p>
      <p id="pie_p"></p>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $("#myButton").click(function(){
      //по клику на кнопку модального окна

      let text_input=$('#text_input ').val(); //получаем значение с текстового поля 
      $('#text').html(text_input);//присваиваем p тегу внутри модального окна

      var first_select = $('#firstselect option:selected').text();//получаем выбранное значение
	      $('#ice_p').html(' Выбранное мороженое: ' + first_select);//присваиваем p тегу внутри модального окна

       var second_select = $('#secondselect option:selected').text();//получаем выбранное значение
	      $('#pie_p').html(' Выбранный пирог: ' + second_select);//присваиваем p тегу внутри модального окна
 
    
    });
</script>
 
    </body>
</html>
