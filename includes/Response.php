<?php

class Response
{
    public static function formatResponse($response)
    {
        echo json_encode($response);
    }
}