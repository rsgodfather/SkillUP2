<?php


class EmailValidator implements ValidatorInterface
{

	public function validate(string $value): bool
	{
		return preg_match('|@.+\.|', $value);
	}

	public function getMessage(): string
	{
		return 'Email должен содержать @ и точку';
	}

}
