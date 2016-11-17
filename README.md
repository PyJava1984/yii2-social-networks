Social networks widget for Yii2
===============================
This widget adds links to social networks.

[![Latest Stable Version](https://poser.pugx.org/black-lamp/yii2-social-networks/v/stable)](https://packagist.org/packages/black-lamp/yii2-social-networks)
[![Latest Unstable Version](https://poser.pugx.org/black-lamp/yii2-social-networks/v/unstable)](https://packagist.org/packages/black-lamp/yii2-social-networks)
[![License](https://poser.pugx.org/black-lamp/yii2-social-networks/license)](https://packagist.org/packages/black-lamp/yii2-social-networks)

Installation
------------
#### Run command
```
composer require black-lamp/yii2-social-networks
```
or add
```json
"black-lamp/yii2-social-networks": "*"
```
to the require section of your composer.json.
#### Add 'SocialNetworks' component to application config
```php
'components' => [
    // ...
    'socialNetworks' => [
        'class' => bl\socialNetworks\components\SocialNetworks::className(),
        'networks' => [
            'vk' => [
                'label' => 'VK',
                'link' => 'http://vk.com'
            ],
            'facebook' => [
                'label' => 'Facebook',
                'link' => 'https://facebook.com'
            ],
            'instagram' => [
                'label' => 'Instagram',
                'link' => 'https://instagram.com'
            ],
        ]
    ],
]
```

In this component you need to add and configure social network links
#### Component configuration properties

| Option | Description | Type | Default |
|---|---|---|---|
|networks|Array of links to the social networks|array|-|
|attributes|HTML attributes for all links|array|-|
|rewriteAttributes|If set `true` global HTML attributes will be rewritten by custom|boolean|true|
|enableSeo|Enable or disable appending SEO attributes from `seoAttributes` array for links|boolean|true|
|seoAttributes|Array of SEO attributes for links|array|['target' => '_blank', 'rel' => 'nofollow']|

#### Configuration properties of networks array
| Option | Description | Type |
|---|---|---|
|label|Text for link|string|
|link|Route to the current social network|string|
|attributes|HTML attributes for link|array|

Using
-----
You should use the widget for adding the share links on page
```php
    <?= \bl\socialNetworks\SocialNetworks::widget([
        'componentId' => 'socialNetworks' // SocialNetworks component ID from application config
    ]) ?>
```

Other extensions
----------------
[yii2-socialshare](https://github.com/black-lamp/yii2-socialshare) - this widget adds share links for social networks
