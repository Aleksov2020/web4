<html lang="ru">
  <head>
      <title>Задание 4</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
  border: 2px solid red;
}
    </style>
  </head>
  <body>

<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>

    <form action="" method="POST">
      <!-- Name -->
      <label for="nameInput">Name </label>
      <input id="nameInput" name="name" type="text" <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>" />
      <br>
      <!-- Email -->
      <label for="emailInput">Email </label>
      <input id="emailInput" name="email" type="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" />
      <br>
      <!-- Year -->
      <label for="selectInput">Birthday year</label>
      <select name="year">
          <?php
            for ($i = 2014; $i > 1965; $i--) {
              print('<option value="'.$i.'" ');
              if ($values['year'] == $i) print('selected ');
              print('>'.$i.'</option> ');
            }
           ?>
      </select>
      <br>
      <!-- Sex -->
      <label>Пол</label><br>
      <label>
          <input type="radio" name="sex" value="male" <?php if ($values['sex'] == 'male') print("checked"); ?> >
           Male
      </label>
      <label>
          <input type="radio" name="sex" value="female" <?php if ($values['sex'] == 'female') print("checked"); ?> >
           Female
      </label>
      <br>
      <!-- Limbs -->
      <label>Пол</label><br>
      <label>
          <input type="radio" name="limbs" value="2" <?php if ($values['limbs'] == 2) print("checked"); ?> >
           2
      </label>
      <label>
          <input type="radio" name="limbs" value="4" <?php if ($values['limbs'] == 4) print("checked"); ?> >
           4
      </label>
      <label>
          <input type="radio" name="limbs" value="8" <?php if ($values['limbs'] == 8) print("checked"); ?> >
           8
      </label>
      <br>
      <!-- Button -->
      <input type="submit" value="Send" />
    </form>
  </body>
</html>
