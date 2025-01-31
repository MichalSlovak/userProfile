<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Security\User;

final class UserPresenter extends Nette\Application\UI\Presenter
{
    /** @var Nette\Database\Context */
    private $database;

    /** @var Nette\Security\User */
    public $user;


    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;


    }
    /*
            public function renderDefault(): void
            {
                $this->template->posts = $this->database->table('posts')
                    ->order('created_at DESC')
                    ->limit(5);
            }
         */
             public function renderDefault($username = 1, $password = 1): void
             {
                 $user = $this->getUser();
                // $user->login($username, $password);

             }



}
