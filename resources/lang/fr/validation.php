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

    'accepted'             => ':attribute doit être accepté.',
    'active_url'           => ':attribute n\'est pas une URL valide.',
    'after'                => ':attribute doit être une date après :date.',
    'after_or_equal'       => ':attribute doit être une date après ou égale à :date.',
    'alpha'                => ':attribute ne peut contenir que des lettres.',
    'alpha_dash'           => ':attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => ':attribute doit être un tableau.',
    'before'               => ':attribute doit être une date avant :date.',
    'before_or_equal'      => ':attribute doit être une date antérieure ou égale à :date.',
    'between'              => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file'    => ':attribute doit être compris entre :min et :max kilo-octets.',
        'string'  => ':attribute doit être compris entre :min et :max caractères .',
        'array'   => ':attribute doit avoir entre :min et :max items.',
    ],
    'boolean'              => ':attribute Le champ doit être vrai ou faux.',
    'confirmed'            => ':attribute la confirmation ne correspond pas.',
    'date'                 => ':attribute Ce n\'est pas une date valide.',
    'date_format'          => ':attribute ne correspond pas au format :format.',
    'different'            => ':attribute et :other doit être différent.',
    'digits'               => ':attribute doit être :digits charactère(s).',
    'digits_between'       => ':attribute doit être compris entre :min et :max charactère(s) .',
    'dimensions'           => ':attribute a des dimensions d\'image incorrectes.',
    'distinct'             => ':attribute champ a une valeur en double.',
    'email'                => 'l\'email doit être une adresse e-mail valide.',
    'exists'               => ':attribute séléctionner est invalide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute doit avoir une valeur.',
    'image'                => ':attribute doit être une image.',
    'in'                   => ':attribute séléctionner est invalide.',
    'in_array'             => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'              => ':attribute Doit être un entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'ipv4'                 => ':attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => ':attribute doit être une adresse IPv6 valide.',
    'json'                 => ':attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => ':attribute ne peut pas être supérieur à :max.',
        'file'    => ':attribute ne peut pas être supérieur à :max kilobytes.',
        'string'  => ':attribute ne peut pas être supérieur à :max charactèrs.',
        'array'   => ':attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes'                => ':attribute doit être un fichier de type: :values.',
    'mimetypes'            => ':attribute doit être un fichier de type: :values.',
    'min'                  => [
        'numeric' => ':attribute doit être au moins :min.',
        'file'    => ':attribute doit être au moins :min kilobytes.',
        'string'  => ':attribute doit être au moins :min charactèrs.',
        'array'   => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in'               => ':attribute séléctionner est invalide..',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => ':attribute le champ doit être présent.',
    'regex'                => ':attribute le format est invalide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless'      => 'Le champ :attribute est requis à moins :other est dans :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without'     => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque  aucun(e) :values n\'est présent(e)s.',
    'same'                 => ':attribute et :other doivent correspondres.',
    'size'                 => [
        'numeric' => ':attribute doit être :size.',
        'file'    => ':attribute doit être :size kilobytes.',
        'string'  => ':attribute doit être :size charactèrs.',
        'array'   => ':attribute doit contenir :size élément(s).',
    ],
    'string'               => ':attribute doit être une chaîne de caractères.',
    'timezone'             => ':attribute doit être une zone valide.',
    'unique'               => ':attribute a déjà été pris(e).',
    'uploaded'             => ':attribute échec du téléchargement.',
    'url'                  => ':attribute le format est invalide.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'email' => 'E-Mail',
        "password" => "mot de passe",
        'name' => 'prénom',
        'last' => 'nom',
        'phone' => 'téléphone',
        'title' => 'titre',
        'company' => 'socété',
    ],

];
