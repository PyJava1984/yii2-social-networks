<?php
namespace bl\socialNetworks\components;

use yii\base\Object;

/**
 * Component for configuration of social networks
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * @link https://github.com/black-lamp/yii2-social-networks
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License
 *
 * @property array $networks
 * @property array $attributes
 * @property boolean $enableSeo
 * @property array $seoAttributes
 */
class SocialNetworks extends Object
{
    /**
     * @var array of links to social networks
     *
     * Example
     * ```php
     * 'networks' => [
     *      'vk' = [
     *          'label' => 'VK',
     *          'link' => 'https://vk.com'
     *      ],
     *      'facebook' => [
     *          'label' => 'Facebook',
     *          'link' => 'https://facebook.com'
     *      ],
     *      // ...
     * ]
     * ```
     */
    public $networks = [];

    /**
     * @var array of HTML attributes for link
     */
    public $attributes = [];

    /**
     * @var boolean If set `true` for all links will be appended
     * SEO attributes from $seoAttributes array
     */
    public $enableSeo = true;

    /**
     * @var array of SEO attributes for link
     */
    public $seoAttributes = [
        'target' => '_blank',
        'rel' => 'nofollow'
    ];

    /**
     * Getter for $networks
     * @return array
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * Getter for $seoAttributes
     * @return array
     */
    public function getSeoAttributes()
    {
        return $this->seoAttributes;
    }

    /**
     * Getter for $attributes
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}