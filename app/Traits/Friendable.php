<?php 

namespace App\Traits;
use App\Friendship;

trait Friendable {
	public function test()
	{
			echo "hi";
	}

	public function addFriend($id)
	{
		$friendship = Friendship::create([
			'requester' => $this->id,
			'user_requested' => $id
		]);

		if ($friendship) {
			return $friendship;
		}
		else
			return "Failed";
	}
}