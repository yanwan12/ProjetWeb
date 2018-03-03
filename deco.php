<?php

require 'init.php';

App::getUser()->deco();

Session::getInstance()->setFlash('success','Vous êtes maintenant déconnecté');

header ('Location: connex.php');