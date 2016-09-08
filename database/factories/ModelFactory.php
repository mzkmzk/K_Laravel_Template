<?php

function get_all_id(K_Laravel_Creator\Models\Base_Model $base_mobel) {
    /* dump($base_mobel);
     dump(\App\Models\User_Model::query()->get());
     error_log(\App\Models\User_Model::all());*/
    $model_datas = $base_mobel->all();
    //error_log($model_datas);
    $model_id = array();
    foreach($model_datas as $model_data){
        array_push($model_id,$model_data['id']);
    }
    return $model_id;
}

$factory->define(App\Models\User_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'wechat_id' => $faker->text(30),
'login_sum' => $faker->numberBetween(),
'visit_password' => $faker->text(30),

    ];
});

$factory->define(App\Models\Activity_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_at' => $faker->dateTime(),
'text' => $faker->text(30),
'place' => $faker->text(30),
'place2' => $faker->text(30),
'user_id' => $faker->randomElement(get_all_id(new \App\Models\User_Model())),

    ];
});

$factory->define(App\Models\Media_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_id' => $faker->randomElement(get_all_id(new \App\Models\Activity_Model())),
'url' => $faker->imageUrl(640,480),
'type' => $faker->numberBetween(),

    ];
});

$factory->define(App\Models\User_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'wechat_id' => $faker->text(30),
'login_sum' => $faker->numberBetween(),
'visit_password' => $faker->text(30),

    ];
});

$factory->define(App\Models\Activity_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_at' => $faker->dateTime(),
'text' => $faker->text(30),
'place' => $faker->text(30),
'place2' => $faker->text(30),
'user_id' => $faker->randomElement(get_all_id(new \App\Models\User_Model())),

    ];
});

$factory->define(App\Models\Media_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_id' => $faker->randomElement(get_all_id(new \App\Models\Activity_Model())),
'url' => $faker->imageUrl(640,480),
'type' => $faker->numberBetween(),

    ];
});

$factory->define(App\Models\User_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'wechat_id' => $faker->text(30),
'login_sum' => $faker->numberBetween(),
'visit_password' => $faker->text(30),

    ];
});

$factory->define(App\Models\Activity_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_at' => $faker->dateTime(),
'text' => $faker->text(30),
'place' => $faker->text(30),
'place2' => $faker->text(30),
'user_id' => $faker->randomElement(get_all_id(new \App\Models\User_Model())),

    ];
});

$factory->define(App\Models\Media_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_id' => $faker->randomElement(get_all_id(new \App\Models\Activity_Model())),
'url' => $faker->imageUrl(640,480),
'type' => $faker->numberBetween(),

    ];
});

$factory->define(App\Models\User_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'wechat_id' => $faker->text(30),
'login_sum' => $faker->numberBetween(),
'visit_password' => $faker->text(30),

    ];
});

$factory->define(App\Models\Activity_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_at' => $faker->dateTime(),
'text' => $faker->text(30),
'place' => $faker->text(30),
'place2' => $faker->text(30),
'user_id' => $faker->randomElement(get_all_id(new \App\Models\User_Model())),

    ];
});

$factory->define(App\Models\Media_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'activity_id' => $faker->randomElement(get_all_id(new \App\Models\Activity_Model())),
'url' => $faker->imageUrl(640,480),
'type' => $faker->numberBetween(),

    ];
});

