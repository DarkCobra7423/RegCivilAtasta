<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

//use PHPMailer\PHPMailer;
/* require Yii::$app->basePath .'/web/PHPMailer/SMTP.php';
  require Yii::$app->basePath .'/web/PHPMailer/Exception';
  require Yii::$app->basePath .'/web/PHPMailer/PHPMailer.php'; */

/**
 * EmailController implements the CRUD actions for Email model.
 */
class EmailController extends Controller {

    public $freeAccess = true;
    public $sendCode = 0;
    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
        /*
          return [
          'verbs' => [
          'class' => VerbFilter::className(),
          'actions' => [
          'delete' => ['POST'],
          ],
          ],
          ]; */
    }

    /**
     * Lists all Email models.
     * @return mixed
     */
    public function actionValidateemail($setto) {
        //MAS INFORMACION...
        //https://github.com/yiisoft/yii2-swiftmailer
        //https://www.yiiframework.com/doc/guide/2.0/es/tutorial-mailing
        //USO BASICO
        
        $code = $this->actionGeneratecode(6);
        
        $body = '<link href="' . Yii::$app->homeUrl . 'css/emailStyle.css" rel="stylesheet" type="text/css"/>  <div style="margin:0;padding:0">
            
  <table align="center" border="0" cellpadding="0" cellspacing="0" width="310" style="border-collapse:collapse;width:310px;margin:0 auto">
    <tbody>
      <tr style="page-break-before:always">
        <td align="center" id="m_3193616724511801997m_9072162798162753153firefox-logo" style="padding:20px 0">
          <img src="../../web/image/regcivil1.png" height="60" width="60" alt="" class="CToWUd">

        </td>
      </tr>

      <tr style="page-break-before:always">
        <td valign="top">
          <h1 style="font-family:sans-serif;font-size:21px;line-height:29px;font-weight:normal;margin:0 0 11px 0;text-align:center">¿Es su correo electrónico?</h1>

          <p style="font-family:sans-serif;font-size:13px;line-height:20px;font-weight:normal;margin:0 0 24px 0px;text-align:center;color:#4a4a4f">

            Por favor! Ingrese este codigo que se le pide para continuar con el envío del oficio.
          </p>
        </td>
      </tr>

      <tr style="page-break-before:always">
        <td valign="top">
          <p style="font-family:sans-serif;font-size:14px;line-height:21px;font-weight:normal;margin:0 0 21px 0;text-align:center">
            En caso afirmativo, aquí está el código de verificación:
          </p>

          <p style="font-family:monospace!important;font-size:32px;line-height:26px;font-weight:normal;margin:0 0 24px 0;text-align:center">' . $code . '</p>

          <p style="font-family:sans-serif;font-size:14px;line-height:21px;font-weight:normal;margin:0 0 21px 0;text-align:center">
            Caduca en 5 minutos.
          </p>
        </td>
      </tr>

      <tr style="page-break-before:always">
        <td border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
          <p style="font-family:sans-serif;font-weight:normal;margin:24px 0 12px 0;text-align:center;color:#737373;font-size:11px;line-height:18px;width:310px!important;word-wrap:break-word">
            Este es un correo electrónico automatizado; si no autorizaste esta acción, entonces <a href="//support.google.com/mail/answer/41078?hl=es&co=GENIE.Platform%3DDesktop" style="color:#0a84ff;text-decoration:none;font-family:sans-serif" rel="noreferrer"> por favor cambia tu contraseña</a>.
            Para más información, por favor visita <a href="<?= Yii::$app->homeUrl ?>" style="color:#0a84ff;text-decoration:none;font-family:sans-serif" rel="noreferrer">Sistema de correspondencia</a>.
          </p>
        </td>
      </tr>

    </tbody>
  </table>
  <div class="yj6qo"></div>
  <div class="adL">
  </div>
</div>';

        if (Yii::$app->mailer->compose()->
                        //setFrom('yeseniadiazhernandez977@gmail.com')
                        setFrom(Yii::$app->params['adminEmail'])
                        ->setTo($setto)
                        ->setSubject('Codigo de Verificación')
                        //->setTextBody('Contenido en texto plano')
                        ->setHtmlBody($body)
                        ->send()) {


            return $code;
        } else {
            return "No enviado";
        }

        //USO QUE PODRIA SERVIRNOS PERO NO ESTOY SEGURO
        /*
          $message = Yii::$app->mailer->compose();
          if (Yii::$app->user->isGuest) {
          $message->setFrom('from@domain.com');
          } else {
          $message->setFrom(Yii::$app->user->identity->email);
          }
          $message->setTo(Yii::$app->params['adminEmail'])
          ->setSubject('Asunto del mensaje')
          ->setTextBody('Contenido en texto plano')
          ->send();

         */
        //return $this->render('index', []);
        //return 'Enviado';
    }
    
    public function actionComparationcode($param, $send) {
        
        if($send == $param){
            return 'true';
        }else{
            return 'false';
        }
    }

    public function actionGeneratecode($length = 6) {
        $characters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $code = '';

        for ($i = 1; $i <= $length; $i++) {
            $code .= $characters[$this->randomNumber(0, 35)];
        }

        return $code;
    }

    public function randomNumber($ninicial, $nfinal) {
        $number = rand($ninicial, $nfinal);

        return $number;
    }

}
