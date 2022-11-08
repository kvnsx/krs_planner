<?php

namespace App\Http\Requests;

use App\Rules\JadwalKuliahTimeAvailabilityRule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateJadwalKuliahRequest extends FormRequest
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
                new JadwalKuliahTimeAvailabilityRule($this->route('jadwal_kuliah')->id),
                'date_format:' . config('panel.lesson_time_format')],
            'end_time'   => [
                'required',
                'after:start_time',
                'date_format:' . config('panel.lesson_time_format')],
        ];
    }
}
