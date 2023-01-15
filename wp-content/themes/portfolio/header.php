<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="/wp-content/themes/portfolio/css/component.css"> -->
  <?php if (is_user_logged_in()) : ?>
    <style type="text/css">
      body {
        margin-top: 32px;
      }
    </style>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body>

  <header></header>

  <main>