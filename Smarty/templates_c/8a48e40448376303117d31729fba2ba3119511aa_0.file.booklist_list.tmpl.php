<?php
/* Smarty version 4.1.1, created on 2023-08-04 00:59:04
  from '/home/j2023d/public_html/Smarty/templates/admin/booklist_list.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_64cbcec8c5f659_08287328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a48e40448376303117d31729fba2ba3119511aa' => 
    array (
      0 => '/home/j2023d/public_html/Smarty/templates/admin/booklist_list.tmpl',
      1 => 1691078293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_64cbcec8c5f659_08287328 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>リスト一覧</title>

<?php echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>

</head>
<body>
<!-- 全体コンテナ　-->
<div id="container">
<?php $_smarty_tpl->_subTemplateRender('file:./gmenu.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="headTitle">
<h2>リスト一覧</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<?php if ($_smarty_tpl->tpl_vars['ERR_STR']->value != '') {?>
<p><?php echo $_smarty_tpl->tpl_vars['ERR_STR']->value;?>
</p>
<?php }?>
<p><?php echo $_smarty_tpl->tpl_vars['pager_arr']->value;?>
</p>
<table>
<tr>
<th>リストID</th>
<th>タイトル</th>
<th>書籍数</th>
<th>登録者ID</th>
<th>登録者名</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'k');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
<tr>
<td width="10%" class="center">
<a href="<?php echo $_smarty_tpl->tpl_vars['tgt_uri']->value;
echo $_smarty_tpl->tpl_vars['value']->value['list_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['list_id'];?>
</a>
</td>
<td width="50%" class="center">
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value['list_title'], ENT_QUOTES, 'UTF-8', true);?>

</td>
<td width="11%" class="center">
<?php echo $_smarty_tpl->tpl_vars['value']->value['book_count'];?>

</td>
<td width="10%" class="center">
<?php echo $_smarty_tpl->tpl_vars['value']->value['user_id'];?>

</td>
<td width="19%" class="center"> 
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value['user_name'], ENT_QUOTES, 'UTF-8', true);?>

</td>
</tr>
<?php
}
if ($_smarty_tpl->tpl_vars['value']->do_else) {
?>
<tr>
<tr><td colspan="3" class="nobottom">リストが見つかりません</td></tr>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<p>&nbsp;</p>

</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>
<?php }
}
