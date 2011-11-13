<?php

/*
 * This file is part of the GitWrapper package.
 *
 * (c) Matteo Giachino <matteog@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Just for fun...
 */

namespace GitElephant\Command;

use GitElephant\Command\BaseCommand;


/**
 * LsTreeCommand
 *
 * ls-tree command wrapper
 *
 * @author Matteo Giachino <matteog@gmail.com>
 */

class LsTreeCommand extends BaseCommand
{
    public function callLsTree($ref = 'HEAD')
    {
        $this->clearAll();

        $this->addCommandName('ls-tree');
        $this->addCommandSubject($ref);
        return $this->getCommand();
    }

    public function listTrees($ref = null)
    {
        if ($ref == null) $ref = 'master';
        $this->clearAll();

        $this->addCommandName('ls-tree');
        $this->addCommandArgument('-d');
        $this->addCommandSubject($ref);
        return $this->getCommand();
    }

    public function listAll($ref = null)
    {
        if ($ref == null) $ref = 'HEAD';
        $this->clearAll();

        $this->addCommandName('ls-tree');
        $this->addCommandSubject($ref);
        return $this->getCommand();
    }
}
