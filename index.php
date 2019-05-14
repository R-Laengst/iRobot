<?php

function get_robots($category)
{
	//echo "<div class=\"irobot-puppers irobot-body mdc-layout-grid\">";
	echo "<div class=\"irobot-puppers irobot-body mdc-layout-grid\">";
	echo 	"<div class=\"mdc-layout-grid__inner\">";
	$pdo = new PDO ('mysql:host=localhost;dbname=irobot_db', 'apache', 'start123');
	$sql = "SELECT * FROM Artikel WHERE Kategorie = '$category'";
	foreach ($pdo->query($sql) as $row)
	{
		echo "<div class=\"mdc-layout-grid__cell\">
                  <div class=\"mdc-card mdc-card--outlined irobot-card\">
                    <div class=\"irobot-image mdc-card__media mdc-card__media--square\"
                      style=\"background-image: url('./media/1.jpg')\"></div>
                    <div class=\"irobot-card__text-label\">";
		echo $row['Name'];
		echo "</div>
                    <div class=\"irobot-card__secondary mdc-typography--body2\">";
		echo $row['Beschreibung'];
		echo "</div>
                    <div class=\"mdc-card__actions\">
                      <div class=\"mdc-card__action-buttons\">
                        <button class=\"mdc-button mdc-card__action mdc-card__action--button adopt-form__button\">
                          <i class=\"material-icons mdc-button__icon adopt-form__button-icon\">pets</i> <span
                            class=\"adopt-form__button-text\">Adopt</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>";
	}
	echo "</div> </div>";
}

?>



<html>

<head>
  <title>myRobot24 - OnlineShop</title>
  <meta name="description"
    content="A sample app to help you get started with Material Theming and Components on the web">
  <link rel="stylesheet" href="bundle.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link id="favicon" rel="icon" href="https://cdn.glitch.com/a896fd72-865f-434a-b620-d564f4cf0b12%2Ffavicon.ico"
    type="image/x-icon">
  <!-- Change theme-color to your primary theme color -->
  <meta name="theme-color" content="#880e4f">
</head>

<body>
  <div id="root">
    <div class="drawer-frame-root">
      <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
        <div class="mdc-drawer__header">
          <h3 class="mdc-drawer__title">Mail</h3>
          <h6 class="mdc-drawer__subtitle">email@material.io</h6>
        </div>
        <div class="mdc-drawer__content">
          <nav class="mdc-list"><a class="mdc-list-item" href="#" tabindex="-1" aria-selected="false"><i
                class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>Inbox</a><a
              class="mdc-list-item" href="#" tabindex="-1" aria-selected="false"><i
                class="material-icons mdc-list-item__graphic" aria-hidden="true">star</i>Star</a><a
              class="mdc-list-item" href="#" tabindex="-1"><i class="material-icons mdc-list-item__graphic"
                aria-hidden="true">send</i>Sent Mail</a><a class="mdc-list-item" href="#" tabindex="-1"><i
                class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>Drafts</a>
            <hr class="mdc-list-divider">
            <h6 class="mdc-list-group__subheader">Labels</h6><a class="mdc-list-item" href="#" tabindex="-1"><i
                class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>Family</a><a
              class="mdc-list-item" href="#" tabindex="-1"><i class="material-icons mdc-list-item__graphic"
                aria-hidden="true">bookmark</i>Friends</a><a class="mdc-list-item" href="#" tabindex="-1"><i
                class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>Work</a>
            <hr class="mdc-list-divider"><a class="mdc-list-item mdc-list-item--activated" href="#" tabindex="0"
              aria-selected="true"><i class="material-icons mdc-list-item__graphic"
                aria-hidden="true">settings</i>Settings</a><a class="mdc-list-item" href="#" tabindex="-1"><i
                class="material-icons mdc-list-item__graphic" aria-hidden="true">announcement</i>Help &amp; feedback</a>
          </nav>
        </div>
      </aside>
      <div class="mdc-drawer-app-content">

        <header class="mdc-top-app-bar mdc-top-app-bar--fixed app-bar" id="app-bar">
          <div class="mdc-top-app-bar__row">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
              <!-- <a href="#" class="material-icons mdc-top-app-bar__navigation-icon">menu</a> -->
              <button
                class="material-icons mdc-top-app-bar__navigation-icon mdc-ripple-upgraded--unbounded mdc-ripple-upgraded">menu</button>
              <span class="mdc-top-app-bar__title">myRobot 24 - OnlineShop</span>
            </section>
          </div>

          <div class="irobot-top-navigation">
            <div class="mdc-tab-bar" role="tablist">
              <div class="mdc-tab-scroller">
                <div class="mdc-tab-scroller__scroll-area">
                  <div class="mdc-tab-scroller__scroll-content">

                    <button class="mdc-tab mdc-tab--active irobot-tab" role="tab" aria-selected="true" tabindex="0">
                      <span class="mdc-tab__content">
                        <span class="mdc-tab__text-label">Service-Roboter</span>
                      </span>
                      <span class="mdc-tab-indicator mdc-tab-indicator--active irobot-tab-indicator">
                        <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                      </span>
                      <span class="mdc-tab__ripple"></span>
                    </button>

                    <button class="mdc-tab irobot-tab" role="tab" aria-selected="false" tabindex="-1">
                      <span class="mdc-tab__content">
                        <span class="mdc-tab__text-label">Freizeit-Roboter</span>
                      </span>
                      <span class="mdc-tab-indicator irobot-tab-indicator">
                        <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                      </span>
                      <span class="mdc-tab__ripple"></span>
                    </button>

                    <button class="mdc-tab irobot-tab" role="tab" aria-selected="false" tabindex="-1">
                      <span class="mdc-tab__content">
                        <span class="mdc-tab__text-label">Zubehör</span>
                      </span>
                      <span class="mdc-tab-indicator irobot-tab-indicator">
                        <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                      </span>
                      <span class="mdc-tab__ripple"></span>
                    </button>

                  </div>
                </div>
              </div>
            </div>
          </div>
		  </header>

        <main class="main-content" id="main-content">

          <div class="irobot--fixed-adjust">
            
			
			 
			    <?php get_robots("Haushalt");?>
			 
			    <?php get_robots("Freizeit");?>
			
			    <?php get_robots("Zubehoer");?>
			 
				 
		   </div>	 
				 <div class="adopt-form adopt-form--hidden">
            <div class="adopt-form__animating-container">
              <p class="mdc-typography--caption">Interested in adopting a pup? Send us your contact info and we'll be in
                touch!
              </p>
              <div class="mdc-text-field adopt-form__input-field">
                <input type="text" required id="fullname-text-field" class="mdc-text-field__input">
                <label class="mdc-floating-label" for="fullname-text-field">Full Name</label>
                <div class="mdc-line-ripple"></div>
              </div>

              <div class="mdc-text-field adopt-form__input-field">
                <input type="number" required id="my-text-field" class="mdc-text-field__input">
                <label class="mdc-floating-label" for="my-text-field">Phone</label>
                <div class="mdc-line-ripple"></div>
              </div>

              <div class="mdc-select adopt-form__input-field">
                <input type="hidden" name="enhanced-select">
                <i class="mdc-select__dropdown-icon"></i>
                <div class="mdc-select__selected-text"></div>
                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                  <ul class="mdc-list adopt-form__states">
                    <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true"></li>
                  </ul>
                </div>
                <span class="mdc-floating-label">State</span>
                <div class="mdc-line-ripple"></div>
              </div>

              <p class="mdc-typography--caption">When should we call you?</p>
              <div class="mdc-chip-set mdc-chip-set--choice">
                <div class="mdc-chip" tabindex="0">
                  <i class="material-icons mdc-chip__icon mdc-chip__icon--leading">wb_sunny</i>
                  <div class="mdc-chip__text">Morning</div>
                </div>
                <div class="mdc-chip" tabindex="-1">
                  <i class="material-icons mdc-chip__icon mdc-chip__icon--leading">beach_access</i>
                  <div class="mdc-chip__text">Afternoon</div>
                </div>
                <div class="mdc-chip" tabindex="-1">
                  <i class="material-icons mdc-chip__icon mdc-chip__icon--leading">brightness_1</i>
                  <div class="mdc-chip__text">Evening</div>
                </div>
                <div class="mdc-chip" tabindex="-1">
                  <i class="material-icons mdc-chip__icon mdc-chip__icon--leading">brightness_3</i>
                  <div class="mdc-chip__text">After
                    <a class="adopt-form__link" target="_blank" rel="noreferrer"
                      href="https://yt.be/centered">Survivor</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </main>



      </div>
    </div>
  </div>

</body>
<script src="bundle.js" async></script>

</html>
