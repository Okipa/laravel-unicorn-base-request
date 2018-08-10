<?php

namespace Okipa\LaravelRequestSanitizer\Test\Requests;

use Okipa\LaravelRequestSanitizer\RequestSanitizer;

class DisabledNullEntriesExclusionRequest extends RequestSanitizer
{
    protected $excludeNullEntries = false;
    protected $exceptFromNullExclusion = [
        'otherNullEntry',
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