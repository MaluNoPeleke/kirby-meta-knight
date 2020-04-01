<?php

return [
    'props' => [
        'headline' => function ($headline = 'Google Search Preview') {
            return $headline;
        }
    ],
    'computed' => [
      'title' => function () {
          return $this->model()->title();
      },
      'url' => function () {
          return $this->model()->url();
      }
    ]
];
