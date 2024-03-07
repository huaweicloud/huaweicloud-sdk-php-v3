<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTextRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTextRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * detectDirection  图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    * characterMode  单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    * language  语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    * singleOrientationMode  单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'detectDirection' => 'bool',
            'quickMode' => 'bool',
            'characterMode' => 'bool',
            'language' => 'string',
            'singleOrientationMode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * detectDirection  图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    * characterMode  单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    * language  语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    * singleOrientationMode  单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'detectDirection' => null,
        'quickMode' => null,
        'characterMode' => null,
        'language' => null,
        'singleOrientationMode' => null
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
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * detectDirection  图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    * characterMode  单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    * language  语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    * singleOrientationMode  单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'detectDirection' => 'detect_direction',
            'quickMode' => 'quick_mode',
            'characterMode' => 'character_mode',
            'language' => 'language',
            'singleOrientationMode' => 'single_orientation_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * detectDirection  图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    * characterMode  单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    * language  语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    * singleOrientationMode  单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'detectDirection' => 'setDetectDirection',
            'quickMode' => 'setQuickMode',
            'characterMode' => 'setCharacterMode',
            'language' => 'setLanguage',
            'singleOrientationMode' => 'setSingleOrientationMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * detectDirection  图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    * characterMode  单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    * language  语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    * singleOrientationMode  单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'detectDirection' => 'getDetectDirection',
            'quickMode' => 'getQuickMode',
            'characterMode' => 'getCharacterMode',
            'language' => 'getLanguage',
            'singleOrientationMode' => 'getSingleOrientationMode'
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
        $this->container['detectDirection'] = isset($data['detectDirection']) ? $data['detectDirection'] : null;
        $this->container['quickMode'] = isset($data['quickMode']) ? $data['quickMode'] : null;
        $this->container['characterMode'] = isset($data['characterMode']) ? $data['characterMode'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['singleOrientationMode'] = isset($data['singleOrientationMode']) ? $data['singleOrientationMode'] : null;
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
    *  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    * @param string|null $image 与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过4096px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    *  与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
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
    * @param string|null $url 与image二选一 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets detectDirection
    *  图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    *
    * @return bool|null
    */
    public function getDetectDirection()
    {
        return $this->container['detectDirection'];
    }

    /**
    * Sets detectDirection
    *
    * @param bool|null $detectDirection 图片朝向检测开关，可选值包括： - true：检测图片朝向; - false：不检测图片朝向。  > 说明： - 支持任意角度的图片朝向检测。未传入该参数时默认为false，即不检测图片朝向。
    *
    * @return $this
    */
    public function setDetectDirection($detectDirection)
    {
        $this->container['detectDirection'] = $detectDirection;
        return $this;
    }

    /**
    * Gets quickMode
    *  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    *
    * @return bool|null
    */
    public function getQuickMode()
    {
        return $this->container['quickMode'];
    }

    /**
    * Sets quickMode
    *
    * @param bool|null $quickMode 快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别。可选值包括： - true：打开快速模式； - false：关闭快速模式。  > 说明： - 未传入该参数时默认为false，即关闭快速模式。
    *
    * @return $this
    */
    public function setQuickMode($quickMode)
    {
        $this->container['quickMode'] = $quickMode;
        return $this;
    }

    /**
    * Gets characterMode
    *  单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    *
    * @return bool|null
    */
    public function getCharacterMode()
    {
        return $this->container['characterMode'];
    }

    /**
    * Sets characterMode
    *
    * @param bool|null $characterMode 单字符模式开关。可选值包括： - true：打开单字符模式 - false：关闭单字符模式  未传入该参数时默认为false，即不返回单个文本行的单字符信息。
    *
    * @return $this
    */
    public function setCharacterMode($characterMode)
    {
        $this->container['characterMode'] = $characterMode;
        return $this;
    }

    /**
    * Gets language
    *  语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语种选择，可选值可参考表1中英文列。未传入该参数时默认为中英文识别模式。 **表1* 语种选择说明 | 英文 |     中文     | | :--: | :----------: | | auto | 自动语种分类 | |  ms  |    马来语    | |  uk  |   乌克兰语   | |  hi  |    印地语    | |  ru  |     俄语     | |  vi  |    越南语    | |  id  |    印尼语    | |  th  |     泰语     | |  zh  |    中英文    | |  ar  |   阿拉伯语   | |  de  |     德语     | |  la  |    拉丁语    | |  fr  |     法语     | |  it  |   意大利语   | |  es  |   西班牙语   | |  pt  |   葡萄牙语   | |  ro  |  罗马尼亚语  | |  pl  |    波兰语    | |  am  |  阿姆哈拉语  | |  ja  |     日语     | |  ko  |     韩语     | |  tr  |   土耳其语   | |  no  |   挪威语     | |  da  |   丹麦语     | |  sv  |   瑞典语     | |  km  |   柬埔寨语   |
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets singleOrientationMode
    *  单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @return bool|null
    */
    public function getSingleOrientationMode()
    {
        return $this->container['singleOrientationMode'];
    }

    /**
    * Sets singleOrientationMode
    *
    * @param bool|null $singleOrientationMode 单朝向模式开关。可选值包括： - true：打开单朝向模式 - false：关闭单朝向模式  未传入该参数时默认为false，既默认图片中的字段为多朝向。
    *
    * @return $this
    */
    public function setSingleOrientationMode($singleOrientationMode)
    {
        $this->container['singleOrientationMode'] = $singleOrientationMode;
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

