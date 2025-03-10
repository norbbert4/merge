<?php
class RestKezelo{
    public function sethttpFejlec($statusKod)

    public function gethttpStatusUzenet($statusKod)
    {
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad req',
            404 = 'not found',
        );
        return($httpStatus[$statusKod]);
    }
}