<?php

require_once("navbar.php");

$pageid = "service"
?>
<style>
    .wrapper {
  margin: 5em auto;
  max-width: 1000px;
  background-color: #fff;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
}

.header {
  padding: 30px 30px 0;
  text-align: center;
}
.header__title {
  margin: 0;
  text-transform: uppercase;
  font-size: 2.5em;
  font-weight: 500;
  line-height: 1.1;
}
.header__subtitle {
  margin: 0;
  font-size: 1.5em;
  color: #949fb0;
  font-family: "Yesteryear", cursive;
  font-weight: 500;
  line-height: 1.1;
}

.cards {
  padding: 15px;
  display: flex;
  flex-flow: row wrap;
}

.card1 {
  margin: 15px;
  width: calc((100% / 3) - 30px);
  transition: all 0.2s ease-in-out;
}
@media screen and (max-width: 991px) {
  .card1 {
    width: calc((100% / 2) - 30px);
  }
}
@media screen and (max-width: 767px) {
  .card1 {
    width: 100%;
  }
}
.card1:hover .card__inner {
  background-color: #1abc9c;
  transform: scale(1.05);
}
.card__inner {
  width: 100%;
  padding: 30px;
  position: relative;
  cursor: pointer;
  background-color: #949fb0;
  color: #eceef1;
  font-size: 1.5em;
  text-transform: uppercase;
  text-align: center;
  transition: all 0.2s ease-in-out;
}
.card__inner:after {
  transition: all 0.3s ease-in-out;
}
.card__inner .fa {
  width: 100%;
  margin-top: 0.25em;
}
.card__expander {
  transition: all 0.2s ease-in-out;
  background-color: #333a45;
  width: 100%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  text-transform: uppercase;
  color: #eceef1;
  font-size: 1.5em;
}
.card__expander .fa {
  font-size: 0.75em;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
}
.card__expander .fa:hover {
  opacity: 0.9;
}
.card1.is-collapsed .card__inner:after {
  content: "";
  opacity: 0;
}
.card1.is-collapsed .card__expander {
  max-height: 0;
  min-height: 0;
  overflow: hidden;
  margin-top: 0;
  opacity: 0;
}
.card1.is-expanded .card__inner {
  background-color: #1abc9c;
}
.card1.is-expanded .card__inner:after {
  content: "";
  opacity: 1;
  display: block;
  height: 0;
  width: 0;
  position: absolute;
  bottom: -30px;
  left: calc(50% - 15px);
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #333a45;
}
.card1.is-expanded .card__inner .fa:before {
  content: "";
}
.card1.is-expanded .card__expander {
  max-height: 1000px;
  min-height: 200px;
  overflow: visible;
  margin-top: 30px;
  opacity: 1;
}
.card1.is-expanded:hover .card__inner {
  transform: scale(1);
}
.card1.is-inactive .card__inner {
  pointer-events: none;
  opacity: 0.5;
}
.card1.is-inactive:hover .card__inner {
  background-color: #949fb0;
  transform: scale(1);
}

@media screen and (min-width: 992px) {
  .card1:nth-of-type(3n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card1:nth-of-type(3n+3) .card__expander {
    margin-left: calc(-200% - 60px);
  }

  .card1:nth-of-type(3n+4) {
    clear: left;
  }

  .card__expander {
    width: calc(300% + 60px);
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .card1:nth-of-type(2n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card1:nth-of-type(2n+3) {
    clear: left;
  }

  .card__expander {
    width: calc(200% + 30px);
  }
}
</style>
<!-- service Title Section Start -->
<div class="service-title service-title-bg">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="service-title-text">
                    <h2>Our Services</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <i class="icofont-rounded-double-right"></i>
                            Services
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
<div class="wrapper">



<div class="cards">

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card1 [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span>Card</span>
      <i class="fa fa-folder-o"></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

</div>

</div>
</div>



<?php

require_once("footer.php");

?>

<script>
    var $cell = $('.card1');

//open and close card when clicked on card
$cell.find('.js-expander').click(function() {

  var $thisCell = $(this).closest('.card1');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    
    if ($cell.not($thisCell).hasClass('is-inactive')) {
      //do nothing
    } else {
      $cell.not($thisCell).addClass('is-inactive');
    }

  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    $cell.not($thisCell).removeClass('is-inactive');
  }
});

//close card when click on cross
$cell.find('.js-collapser').click(function() {

  var $thisCell = $(this).closest('.card1');

  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  $cell.not($thisCell).removeClass('is-inactive');

});
</script>