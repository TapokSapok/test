<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/components/styles/purchase.css">
   <title>SMC - Покупка проходки</title>
</head>

<body>
   <div class="header-title"><a href="index.php">SMC</a></div>
   <div class="purchase-modal">
      <div class="modal-title">Проходка SMC</div>
      <form action="components/rcon/admin.php" method="post">
         <input type="text" class="form-item-input" placeholder="Никнейм" name="whitelistName">
         <span class="alert">Обязательно перепроверьте данное поле</span>
         <br>
         <div class="main-alert">
            <input type="checkbox" class="form-item-checkbox" onchange="check()"><label class="form-label">После оплаты вы соглашаетесь с <a href="#" class="a-1">правилами</a> игрового сервера и <a href="#" class="a-1">пользовательским соглашением</a></label>
         </div>
         <button type="submit" class=form-item-button-submit disabled>Оплатить</button>
      </form>
   </div>
</body>
<script src="components/scripts/check_checkbox.js"></script>

</html>