<?php
return array(
	"quiz" => array(
		'scripts' => array('resources/quiz.js' ),
		'dependencies' => 'mw.KBaseScreen',
		'kalturaPluginName' => 'quiz',
		'styles' => 'resources/quiz.css',
//        'templates' => "../Quiz/resources/quiz.tmpl.html",

		'templates' => array(
            "quizstart" => "../Quiz/resources/templates/quiz.tmpl.html"
            //"displayQuestion" => "../Quiz/resources/templates/quizQuestion.tmpl.html",
        ),
		'messageFile' => 'Quiz.i18n.php',
	),
	"bigButton" => array(
		'scripts' => array( 'resources/bigButton.js' ),
		'dependencies' => 'mw.KBaseButton',
		'kalturaPluginName' => 'bigButton',
		'styles' => 'resources/bigButton.css',
		'messageFile' => 'BigButton.i18n.php',
	),
);