<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?= $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<link href="<?= $document_path ?>/StyleSheet.css" rel="stylesheet" type="text/css" />

<!-- jQuery -->
<script type="text/javascript" src="<?= $document_path ?>/menu/libs/jquery/jquery.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="<?= $document_path ?>/menu/jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8,
                        markCurrentItem: true
		});
	});
</script>

<!-- SmartMenus core CSS (required) -->
<link href="<?= $document_path ?>/menu/css/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-mint" menu theme (optional, you can use your own CSS, too) -->
<link href="<?= $document_path ?>/menu/css/sm-mint/sm-mint.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    