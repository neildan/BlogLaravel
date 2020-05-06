<?php

namespace App\Traits;

trait ApiResponse
{
    /**
     * Devolver un respuesta exitosa de tipo json
     *
     * @param string $message
     * @param mixed $data
     * @param string $code
     * @param string $devmessage
     * @return string
     * @author Daniel Valencia <2020-05-04>
     */
    public function successResponse(
        $message = 'success',
        $data = null,
        $code = '200',
        $devmessage = ''
    )
    {
        return response()->json(array(
            'code' => $code,
            'data' => $data,
            'success' => true,
            'message' => $message,
            'devmessage' => $devmessage
        ), $code);
    }

    /**
     * Devolver una respuesta fallida de tipo json
     *
     * @param string $message
     * @param mixed $data
     * @param string $code
     * @param string $devmessage
     * @return string
     * @author Daniel Valencia <2020-05-04>
     */
    public function errorResponse(
        $message = 'error',
        $data = null,
        $code = '500',
        $devmessage = ''
    )
    {
        return response()->json(array(
            'code' => $code,
            'data' => $data,
            'success' => false,
            'message' => $message,
            'devmessage' => $devmessage
        ), $code);
    }
}