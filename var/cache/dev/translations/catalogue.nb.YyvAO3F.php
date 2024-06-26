<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nb', array (
  'time' => 
  array (
    'diff.ago.year' => '%count% år siden',
    'diff.ago.month' => '1 måned siden|%count% måneder',
    'diff.ago.day' => '1 dag siden|%count% dager siden',
    'diff.ago.hour' => '1 time siden|%count% timer siden',
    'diff.ago.minute' => '1 minutt siden|%count% minutter siden',
    'diff.ago.second' => '1 sekund siden|%count% sekunder siden',
    'diff.empty' => 'nå',
    'diff.in.second' => 'om 1 sekund|om %count% sekunder',
    'diff.in.hour' => 'om 1 time|om %count% timer',
    'diff.in.minute' => 'om 1 minutt|om %count% minutter',
    'diff.in.day' => 'om 1 dag|om %count% dager',
    'diff.in.month' => 'om 1 måned|om %count% måneder',
    'diff.in.year' => 'om %count% år',
    'duration.second' => '1 sekund|%count% sekunder',
    'duration.minute' => '1 minutt|%count% minutter',
    'duration.hour' => '1 time|%count% timer',
    'duration.day' => '1 dag|%count% dager',
    'duration.none' => '< 1 sekund',
  ),
));

$catalogueNo = new MessageCatalogue('no', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Forrige',
    'Next' => 'Neste',
  ),
));
$catalogue->addFallbackCatalogue($catalogueNo);
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
$catalogueNo->addFallbackCatalogue($catalogueEn);

return $catalogue;
