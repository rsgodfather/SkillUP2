<?php

interface ValidatorInterface
{

	public function validate(string $value): bool;

	public function getMessage(): string;

}
