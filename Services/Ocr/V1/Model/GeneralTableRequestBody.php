<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTableRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTableRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * returnTextLocation  返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
    * returnConfidence  是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    * returnExcel  是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'returnTextLocation' => 'bool',
            'returnConfidence' => 'bool',
            'returnExcel' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * returnTextLocation  返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
    * returnConfidence  是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    * returnExcel  是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'returnTextLocation' => null,
        'returnConfidence' => null,
        'returnExcel' => null
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
    * image  与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * returnTextLocation  返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
    * returnConfidence  是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    * returnExcel  是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'returnTextLocation' => 'return_text_location',
            'returnConfidence' => 'return_confidence',
            'returnExcel' => 'return_excel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * returnTextLocation  返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
    * returnConfidence  是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    * returnExcel  是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'returnTextLocation' => 'setReturnTextLocation',
            'returnConfidence' => 'setReturnConfidence',
            'returnExcel' => 'setReturnExcel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * returnTextLocation  返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
    * returnConfidence  是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    * returnExcel  是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'returnTextLocation' => 'getReturnTextLocation',
            'returnConfidence' => 'getReturnConfidence',
            'returnExcel' => 'getReturnExcel'
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
        $this->container['returnTextLocation'] = isset($data['returnTextLocation']) ? $data['returnTextLocation'] : null;
        $this->container['returnConfidence'] = isset($data['returnConfidence']) ? $data['returnConfidence'] : null;
        $this->container['returnExcel'] = isset($data['returnExcel']) ? $data['returnExcel'] : null;
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
    *  与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    * @param string|null $image 与url二选一  图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    *  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
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
    * @param string|null $url 与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets returnTextLocation
    *  返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
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
    * @param bool|null $returnTextLocation 返回文本块坐标及单元格坐标信息，可选值如下所示：  - true：返回文本块和单元格坐标  - false：不返回  > 说明：  - 如果未传入该参数时默认为false，即不返回。
    *
    * @return $this
    */
    public function setReturnTextLocation($returnTextLocation)
    {
        $this->container['returnTextLocation'] = $returnTextLocation;
        return $this;
    }

    /**
    * Gets returnConfidence
    *  是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    *
    * @return bool|null
    */
    public function getReturnConfidence()
    {
        return $this->container['returnConfidence'];
    }

    /**
    * Sets returnConfidence
    *
    * @param bool|null $returnConfidence 是否返回置信度的开关，可选值包括：  - true：返回置信度  - false：不返回置信度  > 说明：  - 如果未传入该参数，系统默认为“false”，即不返回置信度。
    *
    * @return $this
    */
    public function setReturnConfidence($returnConfidence)
    {
        $this->container['returnConfidence'] = $returnConfidence;
        return $this;
    }

    /**
    * Gets returnExcel
    *  是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @return bool|null
    */
    public function getReturnExcel()
    {
        return $this->container['returnExcel'];
    }

    /**
    * Sets returnExcel
    *
    * @param bool|null $returnExcel 是否返回表格转换Microsoft Excel的base64编码字段。可选值包括：  - true：返回'excel'字段，表示xlsx格式的表格识别结果的base64编码  - false：不返回。默认为false  > 说明：  - 对返回的Excel编码，可用Python函数 base64.b64decode解码后保存为.xlsx文件。
    *
    * @return $this
    */
    public function setReturnExcel($returnExcel)
    {
        $this->container['returnExcel'] = $returnExcel;
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

