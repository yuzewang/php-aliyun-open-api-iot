The IOT SDK for Aliyun OpenAPI
==============================

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


The IOT SDK for Aliyun OpenAPI


## Install

Via Composer

``` bash
$ composer require yuzewang/aliyun-open-api-iot
```

## Usage

```php
/**
 * 访问信息
 */
$config = [
	'AccessKeyId'=>'<your access_key_id>',
	'AccessKeySecret'=>'<your access_key_secret>',
	'ProductKey'=>'<your product_key>',
];

/**
 * 配置网关
 */
$endpoint = new Endpoint('cn-shanghai', EndpointConfig::getRegionIds(), EndpointConfig::getProductDomains());
EndpointProvider::setEndpoints([ $endpoint ]);

/**
 * 授权资料
 */
$profile = DefaultProfile::getProfile('cn-shanghai', $config['AccessKeyId'], $config['AccessKeySecret']);


/**
 * 发消息到指定的Topic
 */
$client  = new DefaultAcsClient($profile);
$request = new Iot\PubRequest();
$request->setAppKey($config['ProductKey']);

$request->setTopicFullName($appKey . "/deviceId/" . $deviceId);
print_r($request->getTopicFullName());
print_r("\r\n");
$request->setMessageContent(base64_encode("open"));
$response = $client->getAcsResponse($request);
print_r($response);
print_r("\r\n");
sleep(10);
$request->setMessageContent(base64_encode("close"));
$response = $client->getAcsResponse($request);
print_r($response);
print_r("\r\n");

[官方文档](https://help.aliyun.com/document_detail/30568.html?spm=5176.doc30594.6.134.zdfioe)


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email yuzewang@gmail.com instead of using the issue tracker.

## Credits

- [yuzewang][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/yuzewang/aliyun-open-api-iot.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/yuzewang/aliyun-open-api-iot/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/yuzewang/aliyun-open-api-iot.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/yuzewang/aliyun-open-api-iot.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yuzewang/aliyun-open-api-iot.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yuzewang/aliyun-open-api-iot
[link-travis]: https://travis-ci.org/yuzewang/aliyun-open-api-iot
[link-scrutinizer]: https://scrutinizer-ci.com/g/yuzewang/aliyun-open-api-iot/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/yuzewang/aliyun-open-api-iot
[link-downloads]: https://packagist.org/packages/yuzewang/aliyun-open-api-iot
[link-author]: https://github.com/yuzewang
[link-contributors]: ../../contributors