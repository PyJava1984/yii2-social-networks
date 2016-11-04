<?php
namespace bl\socialNetworks;

use yii;
use yii\base\Widget;
use yii\helpers\Html;

use bl\socialNetworks\components\SocialNetworks as SocialNetworksComponent;

/**
 * Widget for rendering links to the social networks
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * @link https://github.com/black-lamp/yii2-social-networks
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License
 *
 * @property string $componentId
 */
class SocialNetworks extends Widget
{
    /**
     * @var string SocialNetworks component ID from application config
     * @see SocialNetworks
     */
    public $componentId;

    /**
     * @var array of HTML links
     */
    protected $_socialNetworks = [];

    /**
     * @var array of HTML attribute for links
     */
    protected $_attributes = [];

    /**
     * Method for adding SEO attributes for links
     * 
     * @param array $seoAttributes
     */
    protected function initSeoAttrs($seoAttributes = [])
    {
        if(!empty($seoAttributes)) {
            foreach ($seoAttributes as $name => $value) {
                $this->_attributes[$name] = $value;
            }
        }
    }

    public function init()
    {
        /** @var SocialNetworksComponent $component */
        $component = Yii::$app->get($this->componentId);
        $socialNetworksList = $component->getNetworks();

        if($component->enableSeo) {
            $this->initSeoAttrs($component->getSeoAttributes());
        }

        foreach ($socialNetworksList as $name => $socialNetwork) {
            if(isset($socialNetwork['attributes'])) {
                foreach ($socialNetwork['attributes'] as $attr => $value) {
                    $this->_attributes[$attr] = $value;
                }
            }

            $link = Html::a($socialNetwork['label'], $socialNetwork['link'], $this->_attributes);
            $this->_socialNetworks[$name] = $link;
        }
    }

    public function run()
    {
        return $this->render('social-networks', [
            'socialNetworks' => $this->_socialNetworks
        ]);
    }
}