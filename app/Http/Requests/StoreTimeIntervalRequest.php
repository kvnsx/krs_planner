<?php

namespace App\Http\Requests;

use App\TimeInterval;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreTimeIntervalRequest extends FormRequest
{
    public function authorize()
    {
        // abort_if(Gate::denies('time_interval_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'start_time' => [
                'required',
                'date_format:' . config('panel.lesson_time_format')
            ],
            'end_time' => [
                'required',
                'date_format:' . config('panel.lesson_time_format')
            ],
        ];
    }
}
