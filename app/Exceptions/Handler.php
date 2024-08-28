<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Http;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (NotFoundHttpException $e, $request) {
            $response = Http::get('https://wp.hostingexpert.be/' . $request->path());
            $result = $response->body();

            $result = str_replace('href="https://wp.hostingexpert.be', 'href="https://www.hostingexpert.be', $result);
            $result = str_replace('content="https://wp.hostingexpert.be', 'content="https://www.hostingexpert.be', $result);
            $result = str_replace('"@id":"https://wp.hostingexpert.be/', '"@id":"https://www.hostingexpert.be/', $result);
            $result = str_replace('"url":"https://wp.hostingexpert.be', '"url":"https://www.hostingexpert.be', $result);
            $result = str_replace('"item":"https://wp.hostingexpert.be', '"item":"https://www.hostingexpert.be', $result);
            $result = str_replace('"urlTemplate":"https://wp.hostingexpert.be', '"urlTemplate":"https://www.hostingexpert.be', $result);
            //$result = str_replace('', '', $result);

            return response($result, $response->status());
        });

        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
