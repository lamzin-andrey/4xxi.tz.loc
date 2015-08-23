<?php
namespace StudyApp\CronBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CronController extends Controller {
    public function __construct() {
        /*             проверяем что контроллер вызывается из скрипта а не через http-запрос,
         *             вместо 'cron_script.php' подставьте имя файла скрипта который будет запускаться
         *             через cron
        */
        if (basename($_SERVER["SCRIPT_NAME"]) != "cron_script.php") {
            print("disallowed");
            exit( $_SERVER["SCRIPT_NAME"] );
        }
    }
    /**
     * @Route("/cron")
     * @Template()
     */
    public function cronAction() {
        /* здесь логика вашего скрипта */
        // чтобы не было ошибки
        return new Response('');
    }
}