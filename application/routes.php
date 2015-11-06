<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

$DIGIT = '\d+';
$STRING = '[-a-z\d]+';

Route::set('INDEX_PAGE', '')->defaults(array(
    'controller' => 'index',
    'action' => 'index',
));
Route::set('JOIN_PAGE', 'join')->defaults(array(
    'controller' => 'pages',
    'action' => 'index',
));
Route::set('TASK_LIST', 'task')->defaults(array(
    'controller' => 'pages',
    'action' => 'All',
));
Route::set('TASK_PAGE', 'task/<who>', array('who' => $STRING))->defaults(array(
    'controller' => 'pages',
    'action' => 'whoSet',
));

Route::set('ARTICLE_LIST', 'article')->defaults(array(
    'controller' => 'articles_index',
    'action' => 'showAllArticles',
));

Route::set('ARTICLE_PAGE', 'article/<article_id>', array('article_id' => $DIGIT))->defaults(array(
    'controller' => 'articles_index',
    'action' => 'showArticle'
));

Route::set('NEW_ARTICLE_PAGE', 'article/newarticle')->defaults(array(
    'controller' => 'articles_index',
    'action' => 'newArticle'
));

// Scripts for articles

Route::set('ADD_ARTICLE_SCRIPT', 'article/addarticle')->defaults(array(
    'controller' => 'articles_action',
    'action' => 'add'
));

Route::set('DEL_ARTICLE_SCRIPT', 'article/delarticle/<article_id>', array('article_id' => $DIGIT))->defaults(array(
    'controller' => 'articles_action',
    'action' => 'delete'
));

//<<<<<<< HEAD
//=======
 // Scripts for users

Route::set('USER_PAGE', 'user/<user_id>', array('user_id' => $DIGIT))->defaults(array(
    'controller' => 'users_index',
    'action' => 'showUser'
));


//>>>>>>> a09a3302b66551df7a2598897eafd99b9f40e988
// Scripts for comments

Route::set('ADD_COMMENT_SCRIPT', 'article/addcomment')->defaults(array(
    'controller' => 'comments',
    'action' => 'add'
));

Route::set('DEL_COMMENT_SCRIPT', 'article/delcomment/<comment_id>', array('comment_id' => $DIGIT))->defaults(array(
    'controller' => 'comments',
    'action' => 'delete'
));

Route::set('DESIGN_PREVIEW', 'design/<page>')->defaults(array(
    'controller' => 'index',
    'action' => 'designPreview'
));

Route::set('AUTH', 'auth/<action>')->defaults(array(
    'controller' => 'auth',
    'action' => 'action'
));

// Defaults
// Route::set('default', '(<controller>(/<action>(/<id>)))')
//     ->defaults(array(
//         'controller' => 'index',
//         'action'     => 'index',
//     ));