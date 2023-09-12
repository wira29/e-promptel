<?php

namespace App\Enums;

enum UploadDiskEnum: string
{
    case ARTICLES = 'articles';
    case ORGANIZATIONS = 'organizations';
    case AGENDAS = 'agendas';
    case ACTIVITIES = 'activities';
}
