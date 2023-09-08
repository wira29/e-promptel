<?php

namespace App\Rules;

use App\Enums\ArticleStatusEnum;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ArticleStatusRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed $value
     * @param Closure $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        if (!in_array($value, [ArticleStatusEnum::ACTIVE->value, ArticleStatusEnum::DRAFT->value])) {
            $fail('The :attribute is not match');
        }
    }
}
