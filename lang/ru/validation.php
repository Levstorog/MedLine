<?php 

return [
    'after_or_equal' => 'Поле «:attribute» должно быть не раньше :date.',
    'alpha_dash' => 'Поле «:attribute» может содержать только латинские буквы, цифры, «-» и «_».',
    'confirmed' => 'Пароли не совпадают.',
    'date' => 'Поле «:attribute» должно быть датой.',
    'date_format' => 'Поле «:attribute» должно быть в формате :format.',
    'email' => 'Поле «:attribute» должно быть корректным адресом.',
    'in' => 'Выберите значение из списка в поле «:attribute».',
    'max' => ['string' => 'Поле «:attribute» не длиннее :max символов.'],
    'min' => ['string' => 'Поле «:attribute» не короче :min символов.'],
    'regex' => 'Поле «:attribute» заполнено неверно.',
    'required' => 'Заполните поле «:attribute».',
    'string' => 'Поле «:attribute» должно быть строкой.',
    'unique' => 'Такой «:attribute» уже зарегистрирован.',
    'custom' => [
        'date' => ['after_or_equal' => 'Дата приёма не может быть в прошлом.'],
    ],
    'attributes' => [
        'lastname' => 'Фамилия', 'firstname' => 'Имя', 'middlename' => 'Отчество',
        'tel' => 'Телефон', 'email' => 'Email', 'login' => 'Логин', 'password' => 'Пароль',
        'specialization' => 'Специализация', 'doctor' => 'Врач', 'date' => 'Дата приёма',
        'time' => 'Время приёма', 'reason' => 'Причина обращения', 'payment' => 'Способ оплаты',
    ],
];
