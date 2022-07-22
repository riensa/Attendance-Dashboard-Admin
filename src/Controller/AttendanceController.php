<?php

declare(strict_types=1);

namespace App\Controller;

use App\Helper\ServicesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttendanceController extends AbstractController
{
    private $servicesHelper;

    public function __construct(ServicesHelper $servicesHelper) {
        $this->servicesHelper = $servicesHelper;
    }

    /**
     * @Route("/attendance", name="app_attendance")
     */
    public function index(): Response
    {

        $data = $this->servicesHelper->getAttendance();

        return $this->render('attendance/index.html.twig', [
            'data' => $data
        ]);
    }
}
