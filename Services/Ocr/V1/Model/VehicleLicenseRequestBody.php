<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleLicenseRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleLicenseRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    * returnIssuingAuthority  是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnTextLocation  识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * recognizeElectronicLicense  是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    * alarm  是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'side' => 'string',
            'returnIssuingAuthority' => 'bool',
            'returnTextLocation' => 'bool',
            'recognizeElectronicLicense' => 'bool',
            'alarm' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    * returnIssuingAuthority  是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnTextLocation  识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * recognizeElectronicLicense  是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    * alarm  是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'side' => null,
        'returnIssuingAuthority' => null,
        'returnTextLocation' => null,
        'recognizeElectronicLicense' => null,
        'alarm' => null
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
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    * returnIssuingAuthority  是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnTextLocation  识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * recognizeElectronicLicense  是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    * alarm  是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'side' => 'side',
            'returnIssuingAuthority' => 'return_issuing_authority',
            'returnTextLocation' => 'return_text_location',
            'recognizeElectronicLicense' => 'recognize_electronic_license',
            'alarm' => 'alarm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    * returnIssuingAuthority  是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnTextLocation  识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * recognizeElectronicLicense  是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    * alarm  是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'side' => 'setSide',
            'returnIssuingAuthority' => 'setReturnIssuingAuthority',
            'returnTextLocation' => 'setReturnTextLocation',
            'recognizeElectronicLicense' => 'setRecognizeElectronicLicense',
            'alarm' => 'setAlarm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    * returnIssuingAuthority  是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnTextLocation  识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * recognizeElectronicLicense  是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    * alarm  是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'side' => 'getSide',
            'returnIssuingAuthority' => 'getReturnIssuingAuthority',
            'returnTextLocation' => 'getReturnTextLocation',
            'recognizeElectronicLicense' => 'getRecognizeElectronicLicense',
            'alarm' => 'getAlarm'
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
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['returnIssuingAuthority'] = isset($data['returnIssuingAuthority']) ? $data['returnIssuingAuthority'] : null;
        $this->container['returnTextLocation'] = isset($data['returnTextLocation']) ? $data['returnTextLocation'] : null;
        $this->container['recognizeElectronicLicense'] = isset($data['recognizeElectronicLicense']) ? $data['recognizeElectronicLicense'] : null;
        $this->container['alarm'] = isset($data['alarm']) ? $data['alarm'] : null;
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
    *  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    * @param string|null $image 与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    *  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
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
    * @param string|null $url 与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets side
    *  - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    *
    * @return string|null
    */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
    * Sets side
    *
    * @param string|null $side - front：行驶证主页  - back：行驶证副页  - double_side：行驶证双页信息  > 说明： 如果参数值为空或无该参数，系统默认识别主页，建议填写，准确率更高。
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets returnIssuingAuthority
    *  是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return bool|null
    */
    public function getReturnIssuingAuthority()
    {
        return $this->container['returnIssuingAuthority'];
    }

    /**
    * Sets returnIssuingAuthority
    *
    * @param bool|null $returnIssuingAuthority 是否返回发证机关的开关，可选值包括： - true：返回发证机关 - false：不返回发证机关  > 说明： - 如果无该参数，系统默认不返回发证机关。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return $this
    */
    public function setReturnIssuingAuthority($returnIssuingAuthority)
    {
        $this->container['returnIssuingAuthority'] = $returnIssuingAuthority;
        return $this;
    }

    /**
    * Gets returnTextLocation
    *  识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return bool|null
    */
    public function getReturnTextLocation()
    {
        return $this->container['returnTextLocation'];
    }

    /**
    * Sets returnTextLocation
    *
    * @param bool|null $returnTextLocation 识别到的文字块的区域位置信息。取值范围：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return $this
    */
    public function setReturnTextLocation($returnTextLocation)
    {
        $this->container['returnTextLocation'] = $returnTextLocation;
        return $this;
    }

    /**
    * Gets recognizeElectronicLicense
    *  是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return bool|null
    */
    public function getRecognizeElectronicLicense()
    {
        return $this->container['recognizeElectronicLicense'];
    }

    /**
    * Sets recognizeElectronicLicense
    *
    * @param bool|null $recognizeElectronicLicense 是否支持识别电子行驶证，取值范围：  - true：支持识别电子行驶证  - false：不支持识别电子行驶证  默认不支持识别电子行驶证。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return $this
    */
    public function setRecognizeElectronicLicense($recognizeElectronicLicense)
    {
        $this->container['recognizeElectronicLicense'] = $recognizeElectronicLicense;
        return $this;
    }

    /**
    * Gets alarm
    *  是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return bool|null
    */
    public function getAlarm()
    {
        return $this->container['alarm'];
    }

    /**
    * Sets alarm
    *
    * @param bool|null $alarm 是否返回纸质行驶证图像的告警信息，可选值包括： - true：返回纸质行驶证图像的告警信息 - false：不返回纸质行驶证图像的告警信息 如果无该参数，系统默认不返回告警信息。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return $this
    */
    public function setAlarm($alarm)
    {
        $this->container['alarm'] = $alarm;
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

