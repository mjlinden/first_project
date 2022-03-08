<?php
/**
 * Created by PhpStorm.
 * User: LINM04
 * Date: 8-3-2022
 * Time: 13:57
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class QuestionController
{
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }
}