<?php

namespace Rodzeta\Siteoptions\Action;

use Rodzeta\Siteoptions\Base;
use Rodzeta\Siteoptions\Shell;

final class Pull extends Base
{
	public function getDescription()
	{
		return 'bx ' . $this->getName() . ' - Стянуть изменения по git-репозитариям решения' . "\n"
		. Shell::getDisplayEnvVariable('SOLUTION_GIT_REPOS', true);
	}

	public function run()
	{
		foreach ($this->git->iterateRepos() as $repoInfo)
		{
			Shell::run('pwd');
			Shell::run('git pull');
		}
	}
}
