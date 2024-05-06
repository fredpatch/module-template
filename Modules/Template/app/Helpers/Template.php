<?php

namespace Modules\Template\App\Helpers;

use ByJG\JinjaPhp\Template as JinjaPhpTemplate;
use Modules\Template\Models\TemplatesModel;

class Template
{

    public static function getTemplate(TemplatesModel $templateModel, $data)
    {
        $template = new JinjaPhpTemplate($templateModel->content);
        return $template->render($data);
    }

    public static function getUserLeaveRequest($data) 
    {
        $templateModel = TemplatesModel::where('code', 'Template_code')->first();
        return self::getTemplate($templateModel, $data);
    }
}