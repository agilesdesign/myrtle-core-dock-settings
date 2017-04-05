<?php

namespace Myrtle\Core\Settings\Models\Traits;

use Myrtle\Settings\Models\Setting;

trait Settingable
{
	public function settings()
	{
		return $this->morphOne(Setting::class, 'settingable');
	}
}