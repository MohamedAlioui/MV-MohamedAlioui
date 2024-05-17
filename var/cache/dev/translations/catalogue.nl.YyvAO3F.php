<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nl', array (
  'time' => 
  array (
    'diff.ago.year' => '1 jaar geleden|%count% jaar geleden',
    'diff.ago.month' => '1 maand geleden|%count% maanden geleden',
    'diff.ago.day' => '1 dag geleden|%count% dagen geleden',
    'diff.ago.hour' => '1 uur geleden|%count% uur geleden',
    'diff.ago.minute' => '1 minuut geleden|%count% minuten geleden',
    'diff.ago.second' => '1 seconde geleden|%count% seconden geleden',
    'diff.empty' => 'nu',
    'diff.in.second' => 'over 1 seconde|over %count% seconden',
    'diff.in.hour' => 'over 1 uur|over %count% uur',
    'diff.in.minute' => 'over 1 minuut|over %count% minuten',
    'diff.in.day' => 'over 1 dag|over %count% dagen',
    'diff.in.month' => 'over 1 maand|over %count% maanden',
    'diff.in.year' => 'over 1 jaar|over %count% jaar',
    'duration.second' => '1 seconde|%count% seconden',
    'duration.minute' => '1 minuut|%count% minuten',
    'duration.hour' => '1 uur|%count% uur',
    'duration.day' => '1 dag|%count% dagen',
    'duration.none' => '< 1 seconde',
  ),
  'pagerfanta' => 
  array (
    'Previous' => 'Vorige',
    'Next' => 'Volgende',
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
