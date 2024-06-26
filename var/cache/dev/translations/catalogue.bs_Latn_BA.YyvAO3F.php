<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bs_Latn_BA', array (
  'time' => 
  array (
    'diff.ago.year' => 'prije 1 godine|%count% godina',
    'diff.ago.month' => 'prije 1 mjeseca|%count% mjeseci',
    'diff.ago.day' => 'prije 1 dan|%count% dana',
    'diff.ago.hour' => 'prije 1 sat|%count% sati',
    'diff.ago.minute' => 'prije 1 minute|%count% minuta',
    'diff.ago.second' => 'prije 1 sekunde|%count% sekundi',
    'diff.empty' => 'trenutno',
    'diff.in.second' => 'u 1 sekundi|%count% sekundi',
    'diff.in.hour' => ' u 1 satu|%count% sati',
    'diff.in.minute' => 'u 1 minuti|%count% minuti',
    'diff.in.day' => 'u 1 danu|%count% dana',
    'diff.in.month' => 'u 1 mjesecu|%count% mjeseca',
    'diff.in.year' => 'u 1 godini|%count% godine',
  ),
));

$catalogueBs_Latn = new MessageCatalogue('bs_Latn', array (
));
$catalogue->addFallbackCatalogue($catalogueBs_Latn);
$catalogueBs = new MessageCatalogue('bs', array (
));
$catalogueBs_Latn->addFallbackCatalogue($catalogueBs);
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
$catalogueBs->addFallbackCatalogue($catalogueEn);

return $catalogue;
