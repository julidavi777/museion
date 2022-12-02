<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ' El campo :attribute debe ser accepted.',
    'accepted_if' => 'El campo :attribute debe ser accepted when :other is :value.',
    'active_url' => 'El campo :attribute no es un URL valido.',
    'after' => 'El campo :attribute debe ser a date after :date.',
    'after_or_equal' => 'El campo :attribute debe ser a date after or equal to :date.',
    'alpha' => 'El campo :attribute debe only contain letters.',
    'alpha_dash' => 'El campo :attribute debe only contain letters, numbers, dashes y underscores.',
    'alpha_num' => 'El campo :attribute debe only contain letters y numbers.',
    'array' => 'El campo :attribute debe ser an array.',
    'before' => 'El campo :attribute debe ser a date before :date.',
    'before_or_equal' => 'El campo :attribute debe ser a date before or equal to :date.',
    'between' => [
        'array' => 'El campo :attribute debe have between :min y :max items.',
        'file' => 'El campo :attribute debe ser between :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe ser between :min y :max.',
        'string' => 'El campo :attribute debe ser between :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute field debe ser true or false.',
    'confirmed' => 'El campo :attribute confirmation does not match.',
    'current_password' => 'password is incorrect.',
    'date' => 'El campo :attribute no es un date valido.',
    'date_equals' => 'El campo :attribute debe ser a date equal to :date.',
    'date_format' => 'El campo :attribute does not match format :format.',
    'declined' => 'El campo :attribute debe ser declined.',
    'declined_if' => 'El campo :attribute debe ser declined when :other is :value.',
    'different' => 'El campo :attribute y :other debe ser different.',
    'digits' => 'El campo :attribute debe ser :digits digits.',
    'digits_between' => 'El campo :attribute debe ser between :min y :max digits.',
    'dimensions' => 'El campo :attribute has invalid image dimensions.',
    'distinct' => 'El campo :attribute field has a duplicate value.',
    'doesnt_end_with' => 'El campo :attribute may not end with one of following: :values.',
    'doesnt_start_with' => 'El campo :attribute may not start with one of following: :values.',
    'email' => 'El campo :attribute debe ser a valid email address.',
    'ends_with' => 'El campo :attribute debe end with one of following: :values.',
    'enum' => 'El campo :attribute es invalido.',
    'exists' => 'El campo :attribute es invalido.',
    'file' => 'El campo :attribute debe ser a file.',
    'filled' => 'El campo :attribute field debe have a value.',
    'gt' => [
        'array' => 'El campo :attribute debe have more than :value items.',
        'file' => 'El campo :attribute debe ser greater than :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser greater than :value.',
        'string' => 'El campo :attribute debe ser greater than :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe have :value items or more.',
        'file' => 'El campo :attribute debe ser greater than or equal to :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser greater than or equal to :value.',
        'string' => 'El campo :attribute debe ser greater than or equal to :value caracteres.',
    ],
    'image' => 'El campo :attribute debe ser an image.',
    'in' => 'El campo :attribute es invalido.',
    'in_array' => 'El campo :attribute field does not exist in :other.',
    'integer' => 'El campo :attribute debe ser un dato entero.',
    'ip' => 'El campo :attribute debe ser a valid IP address.',
    'ipv4' => 'El campo :attribute debe ser a valid IPv4 address.',
    'ipv6' => 'El campo :attribute debe ser a valid IPv6 address.',
    'json' => 'El campo :attribute debe ser a valid JSON string.',
    'lowercase' => 'El campo :attribute debe ser lowercase.',
    'lt' => [
        'array' => 'El campo :attribute debe have less than :value items.',
        'file' => 'El campo :attribute debe ser less than :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser less than :value.',
        'string' => 'El campo :attribute debe ser less than :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe not have more than :value items.',
        'file' => 'El campo :attribute debe ser less than or equal to :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser less than or equal to :value.',
        'string' => 'El campo :attribute debe ser less than or equal to :value caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser a valid MAC address.',
    'max' => [
        'array' => 'El campo :attribute debe not have more than :max items.',
        'file' => 'El campo :attribute debe not ser greater than :max kilobytes.',
        'numeric' => 'El campo :attribute debe not ser greater than :max.',
        'string' => 'El campo :attribute debe not ser greater than :max caracteres.',
    ],
    'max_digits' => 'El campo :attribute debe not have more than :max digits.',
    'mimes' => 'El campo :attribute debe ser a file of type: :values.',
    'mimetypes' => 'El campo :attribute debe ser a file of type: :values.',
    'min' => [
        'array' => 'El campo :attribute debe have at least :min items.',
        'file' => 'El campo :attribute debe ser at least :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor a :min.',
        'string' => 'El campo :attribute debe ser de al menos :min caracteres.',
    ],
    'min_digits' => 'El campo :attribute debe contener al menos :min digitos.',
    'multiple_of' => 'El campo :attribute debe ser a multiple of :value.',
    'not_in' => 'El campo :attribute no es valido.',
    'not_regex' => 'El campo :attribute format is invalid.',
    'numeric' => 'El campo :attribute debe ser numerico.',
    'password' => [
        'letters' => 'El campo :attribute debe contener al menos una letra.',
        'mixed' => 'El campo :attribute debe contener al menos una mayuscula y una minuscula.',
        'numbers' => 'El campo :attribute debe contener al menos un numero.',
        'symbols' => 'El campo :attribute debe contener al menos un simbolo.',
        'uncompromised' => 'given El campo :attribute has appeared in a data leak. Please choose a different El campo :attribute.',
    ],
    'present' => 'El campo :attribute field debe ser present.',
    'prohibited' => 'El campo :attribute field is prohibited.',
    'prohibited_if' => 'El campo :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'El campo :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'El campo :attribute field prohibits :other from being present.',
    'regex' => 'El campo :attribute format is invalid.',
    'required' => 'El campo :attribute Es obligatorio.',
    'required_array_keys' => 'El campo :attribute field debe contain entries for: :values.',
    'required_if' => 'El campo :attribute es obligatorio when :other is :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio when :other is accepted.',
    'required_unless' => 'El campo :attribute es obligatorio unless :other is in :values.',
    'required_with' => 'El campo :attribute es obligatorio when :values is present.',
    'required_with_all' => 'El campo :attribute es obligatorio when :values are present.',
    'required_without' => 'El campo :attribute es obligatorio when :values is not present.',
    'required_without_all' => 'El campo :attribute es obligatorio when none of :values are present.',
    'same' => 'El campo :attribute y :other debe match.',
    'size' => [
        'array' => 'El campo :attribute debe contain :size items.',
        'file' => 'El campo :attribute debe ser :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :attribute debe ser :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe start with one of following: :values.',
    'string' => 'El campo :attribute debe ser a string.',
    'timezone' => 'El campo :attribute debe ser a valid timezone.',
    'unique' => 'El campo :attribute Ya existe seleccione otro por favor .',
    'uploaded' => 'El campo :attribute failed to upload.',
    'uppercase' => 'El campo :attribute debe ser uppercase.',
    'url' => 'El campo :attribute debe ser a valid URL.',
    'uuid' => 'El campo :attribute debe ser a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title'=>'Título',
        'author'=>'Autor',
        'pages'=>'paginas',
        'ISBN'=>'ISBN',
        'on_stock'=>'Disponible',
        'name'=>'nombre',
        'last_name'=>'apellido',
        'type_id'=>'tipo de documento',
        'nic'=>'Documento',
        'email'=>'Correo electrónico',
        'password'=>'contraseña',
        'birth'=>'Fecha de nacimiento',
        'address'=>'Dirección',
        'phone'=>'Teléfono',
    ],

];
