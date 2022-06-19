<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdDocumentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdDocumentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
    * url  该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    * idType  证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * returnPortraitImage  控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'countryRegion' => 'string[]',
            'idType' => 'string[]',
            'returnPortraitImage' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
    * url  该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    * idType  证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * returnPortraitImage  控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'countryRegion' => null,
        'idType' => null,
        'returnPortraitImage' => null
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
    * image  该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
    * url  该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    * idType  证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * returnPortraitImage  控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'countryRegion' => 'country_region',
            'idType' => 'id_type',
            'returnPortraitImage' => 'return_portrait_image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
    * url  该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    * idType  证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * returnPortraitImage  控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'countryRegion' => 'setCountryRegion',
            'idType' => 'setIdType',
            'returnPortraitImage' => 'setReturnPortraitImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
    * url  该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * countryRegion  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    * idType  证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    * returnPortraitImage  控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'countryRegion' => 'getCountryRegion',
            'idType' => 'getIdType',
            'returnPortraitImage' => 'getReturnPortraitImage'
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
        $this->container['countryRegion'] = isset($data['countryRegion']) ? $data['countryRegion'] : null;
        $this->container['idType'] = isset($data['idType']) ? $data['idType'] : null;
        $this->container['returnPortraitImage'] = isset($data['returnPortraitImage']) ? $data['returnPortraitImage'] : null;
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
    *  该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
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
    * @param string|null $image 该参数与url二选一。图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF。
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
    *  该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
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
    * @param string|null $url 该参数与image二选一。图片的url路径，目前支持：  Image URL. Currently, the following URLs are supported: - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。 > 说明: - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets countryRegion
    *  证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    *
    * @return string[]|null
    */
    public function getCountryRegion()
    {
        return $this->container['countryRegion'];
    }

    /**
    * Sets countryRegion
    *
    * @param string[]|null $countryRegion 证件签发国家或地区代码，命名遵循ISO-3166 3位代码。可选值。支持填写1个或多个地区。指定参数后，服务只识别指定地区的卡证，如留空，则识别所有地区卡证。建议地区固定或有限范围的情况下填写。支持国家列表见表1。
    *
    * @return $this
    */
    public function setCountryRegion($countryRegion)
    {
        $this->container['countryRegion'] = $countryRegion;
        return $this;
    }

    /**
    * Gets idType
    *  证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    *
    * @return string[]|null
    */
    public function getIdType()
    {
        return $this->container['idType'];
    }

    /**
    * Sets idType
    *
    * @param string[]|null $idType 证件类型。可选值。支持填写1种或多种证件。指定参数后，服务只识别指定类型的卡证，如留空，默认识别所有类型卡证，建议已知证件类型的情况下填写。支持证件类型如下： - PP: passport，国际护照。 - DL: driving license，驾驶证。 - ID: identification card，各国颁发的身份证类型证件，比如身份证、选民卡、社保卡等。
    *
    * @return $this
    */
    public function setIdType($idType)
    {
        $this->container['idType'] = $idType;
        return $this;
    }

    /**
    * Gets returnPortraitImage
    *  控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
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
    * @param bool|null $returnPortraitImage 控制是否返回portrait_image（证件中的人像图片），True代表需要返回，False代表不需要。
    *
    * @return $this
    */
    public function setReturnPortraitImage($returnPortraitImage)
    {
        $this->container['returnPortraitImage'] = $returnPortraitImage;
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

