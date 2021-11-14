<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [

    // 'items' => ['ItemController', 'index',],s
    // 'items/edit' => ['ItemController', 'edit', ['id']],
    // 'items/show' => ['ItemController', 'show', ['id']],
    // 'items/add' => ['ItemController', 'add',],
    // 'items/delete' => ['ItemController', 'delete',],


// partie admin 
    'private/connexion' => ['Private\\ConnexionController', 'connexion'],
    'private/logout' => ['Private\\ConnexionController', 'logout'],
    'private/chats' => ['Private\\ChatsController', 'index'],
    'private/ajout' => ['Private\\AjoutChatController', 'ajout'],
    'private/delete' => ['Private\\ChatsController', 'delete', ['id']],
    'private/edit' => ['Private\\ChatsController', 'edit', ['id']],
    'private/chats/add' => ['Private\\ChatsController', 'add'],

//partie public
    '' => ['HomeController', 'index',],
    'histoire' => ['HomeController', 'histoire'],
    'listechats' => ['HomeController', 'listechats'],
    'chat' => ['HomeController', 'chat'], 
    'chatadoptOK' => ['HomeController', 'chatadoptOK', ['id']],
    'chatformadopt' => ['HomeController', 'chatformadopt', ['id']],

];
