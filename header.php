<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="styles.css " rel="stylesheet" />
    <link href="design-system.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Document</title>
  </head>
  <body class="u-ff-body u-fs-normal u-fw-normal">
    <!-- Header -->
    <header class="u-bg-primary l-p-1" >
      <!-- Navbar -->
      <nav class="c-menu bg-primary-100 text-primary" id="navbar">
        <a
          href=""
          class="u-text-decoration-none u-text-primary u-ff-heading"
          >Design System</a
        >
        <div class="c-link">
          <a href="/view/about-me.php" class="u-text-decoration-none u-text-primary"
            >About me</a
          >
          <a class="text-primary">Demo site</a>
        </div>
      </nav>
      <a class="c-menu__icon" onclick="toggleButton()"
        ><i class="fa fa-bars"></i
      ></a>
    </header>

    <!-- Main Content -->
    <div class="l-wrapper">
      <!-- Side Navigation -->
      <div class="c-menu__sidenavigation bg-primary" id="side-navigation">
        <div class="c-links">
          <a href="about-me.php" class="u-text-decoration-none u-text-primary" >About me </a>
          <a class="text-primary">Demo site</a>
        </div>

        <div onclick="navToggle()">
          <p>Branding</p>
          <ul class="u-hidden" id="nav-list">
            <a href="colors.php" class="u-text-decoration-none u-text-primary"
              ><li>01 colors</li></a
            >
            <a
              href="<?= $base_uri ?>view/typography.php"
              class="u-text-decoration-none u-text-primary"
              ><li>02 typography</li></a
            >
            <li>03 logo</li>
          </ul>
        </div>

        <p>Utilities</p>
        <ul>
          <a href="spacing.php" class="u-text-decoration-none u-text-primary"
            ><li>04 spacing</li>
          </a>
          <a
            href="containers.php"
            class="u-text-decoration-none u-text-primary"
            ><li>05 containers</li>
          </a>
          <li>06 images</li>
          <li>07 interactive</li>
          <li>08 feedback</li>
        </ul>
        <p>Navigation</p>
        <ul>
          <li>09 navbar</li>
          <li>10 breadcrumbs</li>
          <li>11 pagination</li>
        </ul>
        <p>Blocks</p>
        <ul>
          <li>12 hero</li>
          <li>13 carousal</li>
          <li>14 slats</li>
          <li>15 footer</li>
        </ul>
        <p>Components</p>
        <ul>
          <li>16 cards</li>
          <li>17 forms</li>
          <li>18 accordion</li>
          <a href="lists.php" class="u-text-decoration-none u-text-primary"
            ><li>04 lists</li>
</a>
        </ul>
      </div>
      <div></div>