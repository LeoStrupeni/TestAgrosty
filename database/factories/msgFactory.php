<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Message;
use App\Subject;
use Faker\Generator as Faker;

$asunto = Subject::all();

$factory->define(Message::class, function (Faker $faker) use ($asunto)  {
    return [
        'subjectid' => $asunto->shuffle()[0]->id,
        'body' => $faker->realText(100),
        'fromName' => $faker->name(),
        'FromEmail' => $faker->email(),
        'toEmail' => $faker->email(),
        'date'=> $faker->date('Y-m-d',now()),
        'spanScore' => $faker->randomFloat(2,0,5),
    ];
});
