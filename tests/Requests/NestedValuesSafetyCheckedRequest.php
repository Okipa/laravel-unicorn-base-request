<?php

namespace Okipa\LaravelRequestSanitizer\Test\Requests;

use Okipa\LaravelRequestSanitizer\RequestSanitizer;

class NestedValuesSafetyCheckedRequest extends RequestSanitizer
{
    protected $safetyChecks = [
        'user.activatedTrue'       => 'boolean',
        'user.activatedNotGiven'   => 'boolean',
        'user.permissionsFilled'   => 'array',
        'user.permissionsNotGiven' => 'array',
    ];

    /**
     * Execute some treatments just after the request creation
     */
    public function before()
    {
        //
    }

    /**
     * Set the validation rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}