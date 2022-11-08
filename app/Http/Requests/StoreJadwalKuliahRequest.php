<?php

namespace App\Http\Requests;

use App\Lesson;
use App\Rules\JadwalKuliahTimeAvailabilityRule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreJadwalKuliahRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mata_kuliah_id'   => [
                'required',],
            'hari'    => [
                'required',
                'string',],
            'start_time' => [
                'required',
                new JadwalKuliahTimeAvailabilityRule(),
                'date_format:' . config('panel.lesson_time_format')],
            'end_time'   => [
                'required',
                'after:start_time',
                'date_format:' . config('panel.lesson_time_format')],
        ];
    }
}
