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

'accept' => 'El: atributo debe ser aceptado.',
    'active_url' => 'El: atributo no es una URL válida.',
    'after' => 'El atributo: debe ser una fecha posterior a: date.',
    'after_or_equal' => 'El atributo: debe ser una fecha posterior o igual a: date.',
    'alpha' => 'El atributo: solo puede contener letras.',
    'alpha_dash' => 'El atributo: solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El atributo: solo puede contener letras y números.',
    'array' => 'El: atributo debe ser una matriz.',
    'before' => 'El atributo: debe ser una fecha anterior a: date.',
    'before_or_equal' => 'El atributo: debe ser una fecha anterior o igual a: fecha.',
    'entre' => [
        'numeric' => 'El atributo: debe estar entre: min y: max.',
        'file' => 'El atributo: debe estar entre: min y: max kilobytes.',
        'string' => 'El: atributo debe estar entre: min y: max caracteres.',
        'array' => 'El atributo: debe tener entre: min y: max items.',
    ],
    'boolean' => 'El: campo de atributo debe ser verdadero o falso.',
    'confirmado' => 'La confirmación del atributo: no coincide.',
    'date' => 'El: atributo no es una fecha válida.',
    'date_equals' => 'El atributo: debe ser una fecha igual a: fecha.',
    'date_format' => 'El atributo: no coincide con el formato: formato.',
    'diferente' => 'El: atributo y: otro deben ser diferentes.',
    'digits' => 'El atributo: debe ser: digits digits.',
    'digits_between' => 'El atributo: debe estar entre: min y: max digits.',
    'Dimensions' => 'El atributo: tiene dimensiones de imagen no válidas.',
    'distinto' => 'El: campo de atributo tiene un valor duplicado.',
    'email' => 'El atributo: debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El: atributo debe terminar con uno de los siguientes:: valores.',
    'existe' => 'El atributo seleccionado: no es válido.',
    'file' => 'El: atributo debe ser un archivo.',
    'fill' => 'El: campo de atributo debe tener un valor.',
    'gt' => [
        'numeric' => 'El: atributo debe ser mayor que: valor.',
        'file' => 'El: atributo debe ser mayor que: valor kilobytes.',
        'string' => 'El: atributo debe ser mayor que: valor caracteres.',
        'array' => 'El atributo: debe tener más de: elementos de valor.',
    ],
    'gte' => [
        'numeric' => 'El: atributo debe ser mayor o igual que: valor.',
        'file' => 'El atributo: debe ser mayor o igual que: valor kilobytes.',
        'string' => 'El: atributo debe ser mayor o igual que: valor caracteres.',
        'array' => 'El: atributo debe tener: elementos de valor o más.',
    ],
'image' => 'El: atributo debe ser una imagen.',
    'in' => 'El atributo seleccionado: no es válido.',
    'in_array' => 'El campo de atributo: no existe en: other.',
    'integer' => 'El: atributo debe ser un entero.',
    'ip' => 'El: atributo debe ser una dirección IP válida.',
    'ipv4' => 'El: atributo debe ser una dirección IPv4 válida.',
    'ipv6' => 'El: atributo debe ser una dirección IPv6 válida.',
    'json' => 'El: atributo debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El: atributo debe ser menor que: valor.',
        'file' => 'El atributo: debe ser menor que: valor kilobytes.',
        'string' => 'El: atributo debe ser menor que: valor caracteres.',
        'array' => 'El: atributo debe tener menos que: elementos de valor.',
    ],
    'lte' => [
        'numeric' => 'El: atributo debe ser menor o igual que: valor.',
        'file' => 'El atributo: debe ser menor o igual que: valor kilobytes.',
        'string' => 'El: atributo debe ser menor o igual que: valor caracteres.',
        'array' => 'El atributo: no debe tener más de: elementos de valor.',
    ],
    'max' => [
        'numeric' => 'El atributo: no puede ser mayor que: max.',
        'file' => 'El atributo: no puede ser mayor que: max kilobytes.',
        'string' => 'El: atributo no puede ser mayor que: max caracteres.',
        'array' => 'El atributo: no puede tener más de: elementos máximos.',
    ],
    'mimes' => 'El: atributo debe ser un archivo de tipo:: valores.',
    'mimetypes' => 'El: atributo debe ser un archivo de tipo:: valores.',
    'min' => [
        'numeric' => 'El: atributo debe ser al menos: min.',
        'file' => 'El atributo: debe ser al menos: min kilobytes.',
        'string' => 'El: atributo debe tener al menos: min caracteres.',
        'array' => 'El: atributo debe tener al menos: elementos mínimos.',
    ],
    'multiple_of' => 'El atributo: debe ser un múltiplo de: valor',
    'not_in' => 'El atributo seleccionado: no es válido.',
    'not_regex' => 'El formato del atributo: no es válido.',
    'numeric' => 'El: atributo debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo de atributo: debe estar presente.',
    'regex' => 'El formato de atributo: no es válido.',
    'required' => 'El: campo de atributo es obligatorio.',
    'required_if' => 'El campo: atributo es obligatorio cuando: other es: valor.',
    'required_unless' => 'El campo de atributo: es obligatorio a menos que: other esté en: valores.',
    'required_with' => 'El campo de atributo: es obligatorio cuando: valores está presente.',
    'required_with_all' => 'El campo de atributo: es obligatorio cuando: hay valores presentes.',
    'required_without' => 'El campo de atributo: es obligatorio cuando: los valores no están presentes.',
    'required_without_all' => 'El campo de atributo: es obligatorio cuando ninguno de los valores: está presente.',
    'mismo' => 'El: atributo y: otro deben coincidir.',
    'tamaño' => [
        'numeric' => 'El atributo: debe ser: tamaño.',
        'file' => 'El atributo: debe ser: tamaño kilobytes.',
        'string' => 'El atributo: debe ser: caracteres de tamaño.',
        'array' => 'El: atributo debe contener: artículos de tamaño.',
    ],
    'starts_with' => 'El: atributo debe comenzar con uno de los siguientes:: valores.',
    'string' => 'El: atributo debe ser una cadena.',
    'timezone' => 'El: atributo debe ser una zona válida.',
    'unique' => 'El atributo: ya ha sido tomado.',
    'uploaded' => 'El: atributo no se pudo cargar.',
    'url' => 'El formato del atributo: no es válido.',
    'uuid' => 'El: atributo debe ser un UUID válido.',

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

    'attributes' => [],

];
