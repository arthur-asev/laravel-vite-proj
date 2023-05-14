<?php
namespace App\Http\Validators;

use Illuminate\Foundation\Http\FormRequest;


class ModalValidator extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nome'           => 'required|max:30',
            'email'          => 'required|max:30',
            'telefone'       => 'required|max:30',
            'cidade'         => 'required|max:30',


        ];
    }


    public function messages(): array
    {
        return [

            'nome.required'     => 'O campo  nome é obrigatório !',
            'email.required'    =>  'O campo  email é obrigatório !',
            'telefone.required' =>     'O campo  telefone é obrigatório !',
            'cidade.required'   =>   'O campo  cidade é obrigatório !',

        ];
    }
}
