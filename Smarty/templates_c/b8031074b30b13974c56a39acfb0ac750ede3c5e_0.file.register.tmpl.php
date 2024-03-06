<?php
/* Smarty version 4.1.1, created on 2023-08-22 10:00:32
  from '/home/j2023d/public_html/Smarty/templates/register.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_64e408b0ae2738_70450142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8031074b30b13974c56a39acfb0ac750ede3c5e' => 
    array (
      0 => '/home/j2023d/public_html/Smarty/templates/register.tmpl',
      1 => 1692666014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e408b0ae2738_70450142 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <link rel="icon" href="./img/bungo_tabicon.png">
  <link href="css/login.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">




</head>

<body>
<title>新規登録</title>
  <nav class="navbar navbar-expand-sm" id="nav_style">
    <a href="index.php" class="navbar-brand"><img src="./img/logo1.png" id="site_logo" /></a>
  </nav>
  <div class="form-wrapper">
    <h1>新規登録</h1>
    <div class="midashi">ようこそ、ぶんごう！へ。</div>
    <p class="text-danger"><?php echo nl2br((string) $_smarty_tpl->tpl_vars['ERR_STR']->value, (bool) 1);?>
</p>
    <form action="register.php<?php if ($_smarty_tpl->tpl_vars['path']->value !== false) {?>?path=<?php echo $_smarty_tpl->tpl_vars['path']->value;
}?>" method="post">
      <div class="form-item">
        <label for="user_name"></label>
        <input type="text" name="user_name"  placeholder="ユーザー名" class="form-control"></input>
      </div>
      <div class="form-item">
        <label for="mail"></label>
        <input type="email" name="mail" placeholder="メールアドレス" class="form-control"></input>
      </div>
      <p>
        <font color="#696969">
          <font size="2"><span>※</span>既に登録のあるメールアドレスは利用できません
      </p>
      <div class="form-item">
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="パスワード" class="form-control"></input>
      </div>
      <div class="form-item">
        <label for="orm-item"></label>
        <input type="password" id="passwordConfirm"  placeholder="パスワード再確認" class="form-control"></input>
      </div>
      <p>
        <font color="#696969">
          <font size="2"><span>※</span>半角英数・記号：8～16文字
      </p>
      <div class="check">
        <input type="checkbox" id="scales" name="scales">
        <label for="scales"><a href="terms_of_service.php">利用規約</a>に同意する</label>
      </div>
      <div class="button-panel">
        <input type="submit" class="button bg-success" title="Sign In" value="登録する"></input>
      </div>


      
        <?php echo '<script'; ?>
>
          const namenode = document.querySelector('[name="user_name"]');
          const mailnode = document.querySelector('[name="mail"]');
          const passnode = document.getElementById('password');
          const passcnode = document.getElementById('passwordConfirm');
          const checknode = document.querySelector('[name="scales"]');
          //名前の正規表現パターン
          const namePatten = /^.{1,20}$/;
          // メールアドレスの正規表現パターン
          const mailPattern = /^[a-zA-Z0-9_+-]+(\.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/;
          // パスワードの正規表現パターン
          const passwordPattern = /^[\x21-\x7e]{8,}$/;
          // フォームの送信ボタンがクリックされたときの処理
          document.querySelector('input[type="submit"]').addEventListener('click', function(event) {
            let flag = false;
            let errMsg = '';
            // メールアドレスの検証

            if (namePatten.test(namenode.value)) {
              namenode.classList.remove('is-invalid');
              namenode.classList.add('is-valid');
            } else {
              namenode.classList.add('is-invalid');
              namenode.classList.remove('is-valid');
              errMsg += '1字から20字以内で入力してください\n';

            }


            if (mailPattern.test(mailnode.value)) {
              mailnode.classList.remove('is-invalid');
              mailnode.classList.add('is-valid');
            } else {
              mailnode.classList.add('is-invalid');
              mailnode.classList.remove('is-valid');
              errMsg += '有効なメールアドレスを入力してください。\n';
              flag = true;

            }

            const passTestFlag = passwordPattern.test(passnode.value);
            const passCheckFlag = passnode.value == passcnode.value;

            // パスワードの検証
            if (passTestFlag && passCheckFlag) {
              passnode.classList.remove('is-invalid');
              passnode.classList.add('is-valid');
            } else {
              if(!passTestFlag) {
                errMsg += 'パスワードは8文字以上の英数字の組み合わせで入力してください。\n';
              }else {
                errMsg += 'パスワードが一致しません。\n';
              }
              passnode.classList.add('is-invalid');
              passnode.classList.remove('is-valid');
              flag = true;
            }

            if(!checknode.checked){
              errMsg += '利用規約にチェックをつけてください';
              flag = true;
            }


            if (flag) {
              document.querySelector('.text-danger').innerText = errMsg;
              event.preventDefault(); // フォームの送信をキャンセルして検証を行う
            }
          });

          /*
                var input1 = document.getElementById("passwordConfirm");

                input1.addEventListener("input", function() {
                  if (this.value != document.getElementById('password').value) {
                    this.setCustomValidity('確認入力されたパスワードが異なります');
                  } else {

                    this.setCustomValidity('');
                  }
                  var elem = document.getElementById("form");
                  elem.addEventListener("submit", function() {
                    elem.reportValidity();
                  });

                });
                */
        <?php echo '</script'; ?>
>
      

    </form>


  </div>

</body>

</html><?php }
}
