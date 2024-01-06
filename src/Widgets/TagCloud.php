<?php

namespace Botble\TagCloud\Widgets;

use Botble\Widget\AbstractWidget;

class TagCloud extends AbstractWidget
{
    protected $frontendTemplate = 'plugins/tag-cloud::widget.frontend';

    protected $backendTemplate = 'plugins/tag-cloud::widget.backend';

    protected $isCore = true;

    public function __construct()
    {
        parent::__construct([
            'name' => trans('plugins/tag-cloud::tag-cloud.widget_name'),
            'description' => trans('plugins/tag-cloud::tag-cloud.widget_description'),
            'number_display' => 10,
        ]);

        if (version_compare('7.0.0', get_core_version(), '<')) {
            $this->setFrontendTemplate($this->frontendTemplate);
            $this->setBackendTemplate($this->backendTemplate);
        }
    }
}
