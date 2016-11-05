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

| Option | Type | Default | Description |
|---|---|---|---|
|networks|array|-|Array of links to the social networks|
|attributes|array|-|HTML attributes for all links|
|enableSeo|boolean|true|Enable or disable appending SEO attributes from `seoAttributes` array for links|
|seoAttributes|array|['target' => '_blank', 'rel' => 'nofollow']|Array of SEO attributes for links|

#### Configuration properties of networks array
| Option | Type | Default |
|---|---|---|
|label|string|Text for link|
|link|string|Route to the current social network|
|attributes|array|HTML attributes for link|

Using
-----
You should use the widget for adding the share links on page
```php
    <?= \bl\socialNetworks\SocialNetworks::widget([
        'componentId' => 'socialNetworks' // SocialNetworks component ID from application config
    ]) ?>
```
