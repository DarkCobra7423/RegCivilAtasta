<?php
$this->title = "Error";
?>
<link href="<?= Yii::$app->homeUrl ?>css/codeerrorStyle.css" rel="stylesheet" type="text/css"/>
<style>
    /*! CSS Used from: https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css */
@media print {

.form-control1 {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
    -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.form-control1:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control1::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control1:-ms-input-placeholder {
  color: #999;
}
.form-control1::-webkit-input-placeholder {
  color: #999;
}
.form-control1::-ms-expand {
  background-color: transparent;
  border: 0;
}

.btn-default:active {
  background-image: none;
}
.form-control1 {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.form-control1:focus {
  z-index: 3;
}
.form-control1 {
  display: table-cell;
}

.input-group .form-control1:first-child {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

</style>
<body>

  <div class="container error-container">
    <div class="row  d-flex align-items-center justify-content-center">
      <div class="col-md-12 text-center">
        <h1 class="big-text">Oops!</h1>
        <h2 class="small-text">ERROR CODIGO NO REGISTRADO</h2>

      </div>
      <div class="col-md-6  text-center">
        <p>Es posible que el codigo no este correctamente escrito. Por favor reintente escribir el codigo si lo prefiere.</p>

          <div class="form-group">
              <input class="form-control1 col-md-12" maxlength="6" placeholder="Codigo de seguimiento" onkeypress="findOffice($(this).val())">            
          </div>

        <h2 class="small-text">O</h2>

        <a href="<?= Yii::$app->homeUrl ?>" class="button button-dark-blue iq-mt-15 text-center">IR A LA PÁGINA DE INICIO</a>

      </div>

    </div>

  </div>
    <script>
    function findOffice(value) {
                    if (event.keyCode === 13) {
                        //console.log("Enter key pressed!!!!!");
                        location.href = "<?= Yii::$app->homeUrl ?>site/trackcraft?code=" + value;
                    }
                }
    </script>
</body>