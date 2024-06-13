<?php

return [
  'name' => 'Ichat',

  /*
|--------------------------------------------------------------------------
| Define config to the mediaFillable trait for each entity
|--------------------------------------------------------------------------
*/
  'mediaFillable' => [
    'message' => [
      'attachment' => 'single',
    ],
  ],

/*
|--------------------------------------------------------------------------
| Notification Source Configuration
|--------------------------------------------------------------------------
*/
  'notificationSource' => [
    'ichat' => ['label' => 'Chat', 'color' => 'green', 'icon' => 'fa-light fa-message']
  ],

];
