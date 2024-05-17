<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% год назад|%count% года назад|%count% лет назад',
    'diff.ago.month' => '%count% месяц назад|%count% месяца назад|%count% месяцев назад',
    'diff.ago.day' => '%count% день назад|%count% дня назад|%count% дней назад',
    'diff.ago.hour' => '%count% час назад|%count% часа назад|%count% часов назад',
    'diff.ago.minute' => '%count% минуту назад|%count% минуты назад|%count% минут назад',
    'diff.ago.second' => '%count% секунду назад|%count% секунды назад|%count% секунд назад',
    'diff.empty' => 'сейчас',
    'diff.in.second' => 'через %count% секунду|через %count% секунды|через %count% секунд',
    'diff.in.hour' => 'через %count% час|через %count% часа|через %count% часов',
    'diff.in.minute' => 'через %count% минуту|через %count% минуты|через %count% минут',
    'diff.in.day' => 'через %count% день|через %count% дня|через %count% дней',
    'diff.in.month' => 'через %count% месяц|через %count% месяца|через %count% месяцев',
    'diff.in.year' => 'через %count% год|через %count% года|через %count% лет',
    'duration.second' => '1 секунда|%count% секунд',
    'duration.minute' => '1 минута|%count% минут',
    'duration.hour' => '1 час|%count% часов',
    'duration.day' => '1 день|%count% дней',
    'duration.none' => '< 1 секунды',
  ),
  'pagerfanta' => 
  array (
    'Previous' => 'Предыдущая',
    'Next' => 'Следующая',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'time' => 
  array (
    'diff.ago.year' => '1 year ago|%count% years ago',
    'diff.ago.month' => '1 month ago|%count% months ago',
    'diff.ago.day' => '1 day ago|%count% days ago',
    'diff.ago.hour' => '1 hour ago|%count% hours ago',
    'diff.ago.minute' => '1 minute ago|%count% minutes ago',
    'diff.ago.second' => '1 second ago|%count% seconds ago',
    'diff.empty' => 'now',
    'diff.in.second' => 'in 1 second|in %count% seconds',
    'diff.in.hour' => 'in 1 hour|in %count% hours',
    'diff.in.minute' => 'in 1 minute|in %count% minutes',
    'diff.in.day' => 'in 1 day|in %count% days',
    'diff.in.month' => 'in 1 month|in %count% months',
    'diff.in.year' => 'in 1 year|in %count% years',
    'duration.second' => '1 second|%count% seconds',
    'duration.minute' => '1 minute|%count% minutes',
    'duration.hour' => '1 hour|%count% hours',
    'duration.day' => '1 day|%count% days',
    'duration.none' => '< 1 second',
    'age' => '1 year old|%count% years old',
  ),
  'pagerfanta' => 
  array (
    'Previous' => 'Previous',
    'Next' => 'Next',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
