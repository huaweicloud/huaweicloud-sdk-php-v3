<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CambodianIdCardRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CambodianIdCardRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    * url  与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    * detectBorderIntegrity  返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    * detectBlur  返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    * detectGlare  返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    * returnAdjustedImage  返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    * detectTampering  返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    * detectReproduce  返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'returnPortraitImage' => 'bool',
            'returnPortraitLocation' => 'bool',
            'returnIdcardType' => 'bool',
            'detectBorderIntegrity' => 'bool',
            'detectBlockingWithinBorder' => 'bool',
            'detectBlur' => 'bool',
            'detectGlare' => 'bool',
            'returnAdjustedImage' => 'bool',
            'detectTampering' => 'bool',
            'detectReproduce' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    * url  与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    * detectBorderIntegrity  返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    * detectBlur  返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    * detectGlare  返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    * returnAdjustedImage  返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    * detectTampering  返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    * detectReproduce  返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'returnPortraitImage' => null,
        'returnPortraitLocation' => null,
        'returnIdcardType' => null,
        'detectBorderIntegrity' => null,
        'detectBlockingWithinBorder' => null,
        'detectBlur' => null,
        'detectGlare' => null,
        'returnAdjustedImage' => null,
        'detectTampering' => null,
        'detectReproduce' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * image  与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    * url  与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    * detectBorderIntegrity  返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    * detectBlur  返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    * detectGlare  返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    * returnAdjustedImage  返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    * detectTampering  返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    * detectReproduce  返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'returnPortraitImage' => 'return_portrait_image',
            'returnPortraitLocation' => 'return_portrait_location',
            'returnIdcardType' => 'return_idcard_type',
            'detectBorderIntegrity' => 'detect_border_integrity',
            'detectBlockingWithinBorder' => 'detect_blocking_within_border',
            'detectBlur' => 'detect_blur',
            'detectGlare' => 'detect_glare',
            'returnAdjustedImage' => 'return_adjusted_image',
            'detectTampering' => 'detect_tampering',
            'detectReproduce' => 'detect_reproduce'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    * url  与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    * detectBorderIntegrity  返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    * detectBlur  返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    * detectGlare  返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    * returnAdjustedImage  返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    * detectTampering  返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    * detectReproduce  返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'returnPortraitImage' => 'setReturnPortraitImage',
            'returnPortraitLocation' => 'setReturnPortraitLocation',
            'returnIdcardType' => 'setReturnIdcardType',
            'detectBorderIntegrity' => 'setDetectBorderIntegrity',
            'detectBlockingWithinBorder' => 'setDetectBlockingWithinBorder',
            'detectBlur' => 'setDetectBlur',
            'detectGlare' => 'setDetectGlare',
            'returnAdjustedImage' => 'setReturnAdjustedImage',
            'detectTampering' => 'setDetectTampering',
            'detectReproduce' => 'setDetectReproduce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    * url  与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    * detectBorderIntegrity  返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    * detectBlur  返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    * detectGlare  返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    * returnAdjustedImage  返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    * detectTampering  返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    * detectReproduce  返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'returnPortraitImage' => 'getReturnPortraitImage',
            'returnPortraitLocation' => 'getReturnPortraitLocation',
            'returnIdcardType' => 'getReturnIdcardType',
            'detectBorderIntegrity' => 'getDetectBorderIntegrity',
            'detectBlockingWithinBorder' => 'getDetectBlockingWithinBorder',
            'detectBlur' => 'getDetectBlur',
            'detectGlare' => 'getDetectGlare',
            'returnAdjustedImage' => 'getReturnAdjustedImage',
            'detectTampering' => 'getDetectTampering',
            'detectReproduce' => 'getDetectReproduce'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['returnPortraitImage'] = isset($data['returnPortraitImage']) ? $data['returnPortraitImage'] : null;
        $this->container['returnPortraitLocation'] = isset($data['returnPortraitLocation']) ? $data['returnPortraitLocation'] : null;
        $this->container['returnIdcardType'] = isset($data['returnIdcardType']) ? $data['returnIdcardType'] : null;
        $this->container['detectBorderIntegrity'] = isset($data['detectBorderIntegrity']) ? $data['detectBorderIntegrity'] : null;
        $this->container['detectBlockingWithinBorder'] = isset($data['detectBlockingWithinBorder']) ? $data['detectBlockingWithinBorder'] : null;
        $this->container['detectBlur'] = isset($data['detectBlur']) ? $data['detectBlur'] : null;
        $this->container['detectGlare'] = isset($data['detectGlare']) ? $data['detectGlare'] : null;
        $this->container['returnAdjustedImage'] = isset($data['returnAdjustedImage']) ? $data['returnAdjustedImage'] : null;
        $this->container['detectTampering'] = isset($data['detectTampering']) ? $data['detectTampering'] : null;
        $this->container['detectReproduce'] = isset($data['detectReproduce']) ? $data['detectReproduce'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets image
    *  与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 与url二选一。图像数据，base64编码。图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets url
    *  与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 与image二选一。  要求图片Base64编码后大小不超过10MB。 图片尺寸不小于15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIF格式。 图片的url路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets returnPortraitImage
    *  是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    *
    * @return bool|null
    */
    public function getReturnPortraitImage()
    {
        return $this->container['returnPortraitImage'];
    }

    /**
    * Sets returnPortraitImage
    *
    * @param bool|null $returnPortraitImage 是否返回头像内容开关，可选值如下所示： - true: 返回身份证头像照片的 base64 编码 - false: 不返回身份证头像照片的 base64 编码 未传入该参数时默认为“false”，即不返回身份证头像照片的 base64 编码。
    *
    * @return $this
    */
    public function setReturnPortraitImage($returnPortraitImage)
    {
        $this->container['returnPortraitImage'] = $returnPortraitImage;
        return $this;
    }

    /**
    * Gets returnPortraitLocation
    *  是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    *
    * @return bool|null
    */
    public function getReturnPortraitLocation()
    {
        return $this->container['returnPortraitLocation'];
    }

    /**
    * Sets returnPortraitLocation
    *
    * @param bool|null $returnPortraitLocation 是否返回头像坐标的开关，可选值如下所示： - true: 返回身份证头像的位置坐标 - false: 不返回身份证头像的位置坐标 未传入该参数时默认为“false”，即不返回身份证的头像坐标。
    *
    * @return $this
    */
    public function setReturnPortraitLocation($returnPortraitLocation)
    {
        $this->container['returnPortraitLocation'] = $returnPortraitLocation;
        return $this;
    }

    /**
    * Gets returnIdcardType
    *  是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    *
    * @return bool|null
    */
    public function getReturnIdcardType()
    {
        return $this->container['returnIdcardType'];
    }

    /**
    * Sets returnIdcardType
    *
    * @param bool|null $returnIdcardType 是否返回身份证类型的开关，可选值如下所示： - true:返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型
    *
    * @return $this
    */
    public function setReturnIdcardType($returnIdcardType)
    {
        $this->container['returnIdcardType'] = $returnIdcardType;
        return $this;
    }

    /**
    * Gets detectBorderIntegrity
    *  返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    *
    * @return bool|null
    */
    public function getDetectBorderIntegrity()
    {
        return $this->container['detectBorderIntegrity'];
    }

    /**
    * Sets detectBorderIntegrity
    *
    * @param bool|null $detectBorderIntegrity 返回身份证边框完整性的告警结果的开关，可选值如下所示 - true：打开身份证图像边框完整性告警功能  - false：关闭身份证图像边框完整性告警功能
    *
    * @return $this
    */
    public function setDetectBorderIntegrity($detectBorderIntegrity)
    {
        $this->container['detectBorderIntegrity'] = $detectBorderIntegrity;
        return $this;
    }

    /**
    * Gets detectBlockingWithinBorder
    *  返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    *
    * @return bool|null
    */
    public function getDetectBlockingWithinBorder()
    {
        return $this->container['detectBlockingWithinBorder'];
    }

    /**
    * Sets detectBlockingWithinBorder
    *
    * @param bool|null $detectBlockingWithinBorder 返回身份证内部是否有被遮挡的告警结果的开关，可选值如下所示 - true：打开身份证内部是否有被遮挡的告警功能  - false：关闭身份证内部是否有被遮挡的告警功能
    *
    * @return $this
    */
    public function setDetectBlockingWithinBorder($detectBlockingWithinBorder)
    {
        $this->container['detectBlockingWithinBorder'] = $detectBlockingWithinBorder;
        return $this;
    }

    /**
    * Gets detectBlur
    *  返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    *
    * @return bool|null
    */
    public function getDetectBlur()
    {
        return $this->container['detectBlur'];
    }

    /**
    * Sets detectBlur
    *
    * @param bool|null $detectBlur 返回身份证模糊告警结果的开关，可选值如下所示 - true:打开身份证是否模糊的告警功能 - false：关闭身份证是否模糊的告警功能
    *
    * @return $this
    */
    public function setDetectBlur($detectBlur)
    {
        $this->container['detectBlur'] = $detectBlur;
        return $this;
    }

    /**
    * Gets detectGlare
    *  返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    *
    * @return bool|null
    */
    public function getDetectGlare()
    {
        return $this->container['detectGlare'];
    }

    /**
    * Sets detectGlare
    *
    * @param bool|null $detectGlare 返回身份证是否反光的告警结果的开关，可选值如下所示 - true：打开身份证是否反光的告警功能  - false：关闭身份证是否反光的告警功能
    *
    * @return $this
    */
    public function setDetectGlare($detectGlare)
    {
        $this->container['detectGlare'] = $detectGlare;
        return $this;
    }

    /**
    * Gets returnAdjustedImage
    *  返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    *
    * @return bool|null
    */
    public function getReturnAdjustedImage()
    {
        return $this->container['returnAdjustedImage'];
    }

    /**
    * Sets returnAdjustedImage
    *
    * @param bool|null $returnAdjustedImage 返回身份证四点原图的base64编码 - true: 返回身份证原图的base64编码  - false：不返回身份证原图的base64编码
    *
    * @return $this
    */
    public function setReturnAdjustedImage($returnAdjustedImage)
    {
        $this->container['returnAdjustedImage'] = $returnAdjustedImage;
        return $this;
    }

    /**
    * Gets detectTampering
    *  返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    *
    * @return bool|null
    */
    public function getDetectTampering()
    {
        return $this->container['detectTampering'];
    }

    /**
    * Sets detectTampering
    *
    * @param bool|null $detectTampering 返回身份证人像是否被篡改的告警结果的开关，可选值如下所示 - true:  打开身份证人像是否被篡改的告警功能  - false：关闭身份证人像被篡改的告警功能 不支持精细化的P图
    *
    * @return $this
    */
    public function setDetectTampering($detectTampering)
    {
        $this->container['detectTampering'] = $detectTampering;
        return $this;
    }

    /**
    * Gets detectReproduce
    *  返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @return bool|null
    */
    public function getDetectReproduce()
    {
        return $this->container['detectReproduce'];
    }

    /**
    * Sets detectReproduce
    *
    * @param bool|null $detectReproduce 返回判断身份证图像是否经过翻拍告警的开关，可选值如下所示 - true:打开判断身份证图像是否经过翻拍告警的功能  - false:关闭判断身份证图像是否经过翻拍告警的功能
    *
    * @return $this
    */
    public function setDetectReproduce($detectReproduce)
    {
        $this->container['detectReproduce'] = $detectReproduce;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

