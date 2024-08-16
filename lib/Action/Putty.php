<?php

namespace Rodzeta\Siteoptions\Action;

use Rodzeta\Siteoptions\Base;

final class Putty extends Base
{
	public function getName()
	{
		return 'putty';
	}

	public function getDescription()
	{
		return 'bx ' . $this->getName() . ' - Подключится по ssh через putty';
	}
}