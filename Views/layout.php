<!doctype html>
<html lang="<?= $this->theme->lang;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= $this->escape($title);?></title>
<!-- Bootstrap core CSS -->
<link href="<?= $this->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
<?= $this->theme->head;?>
</head>
<body>
<?= $this->theme->beginBody;?>
<?= $content;?>
<?= $this->theme->endBody;?>
</body>
</html>