<?php

class EmptyValidator implements ValidatorInterface
{

	public function validate(string $value): bool
	{
		return !empty($value);
	}

	public function getMessage(): string
	{
		return 'Значение не может быть пустым';
	}

}
