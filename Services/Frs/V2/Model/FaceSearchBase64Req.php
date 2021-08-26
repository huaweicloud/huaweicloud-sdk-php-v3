<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FaceSearchBase64Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FaceSearchBase64Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * returnFields  指定返回的自定义字段。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'string',
            'topN' => 'int',
            'imageBase64' => 'string',
            'returnFields' => 'string[]',
            'threshold' => 'double',
            'sort' => 'map[string,string][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * returnFields  指定返回的自定义字段。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'topN' => 'int32',
        'imageBase64' => null,
        'returnFields' => null,
        'threshold' => 'double',
        'sort' => null
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
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * returnFields  指定返回的自定义字段。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'topN' => 'top_n',
            'imageBase64' => 'image_base64',
            'returnFields' => 'return_fields',
            'threshold' => 'threshold',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * returnFields  指定返回的自定义字段。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'topN' => 'setTopN',
            'imageBase64' => 'setImageBase64',
            'returnFields' => 'setReturnFields',
            'threshold' => 'setThreshold',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * returnFields  指定返回的自定义字段。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'topN' => 'getTopN',
            'imageBase64' => 'getImageBase64',
            'returnFields' => 'getReturnFields',
            'threshold' => 'getThreshold',
            'sort' => 'getSort'
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['topN'] = isset($data['topN']) ? $data['topN'] : 10;
        $this->container['imageBase64'] = isset($data['imageBase64']) ? $data['imageBase64'] : null;
        $this->container['returnFields'] = isset($data['returnFields']) ? $data['returnFields'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageBase64'] === null) {
            $invalidProperties[] = "'imageBase64' can't be null";
        }
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
    * Gets filter
    *  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets topN
    *  返回查询到的最相似的N张人脸，N默认为10。
    *
    * @return int|null
    */
    public function getTopN()
    {
        return $this->container['topN'];
    }

    /**
    * Sets topN
    *
    * @param int|null $topN 返回查询到的最相似的N张人脸，N默认为10。
    *
    * @return $this
    */
    public function setTopN($topN)
    {
        $this->container['topN'] = $topN;
        return $this;
    }

    /**
    * Gets imageBase64
    *  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    *
    * @return string
    */
    public function getImageBase64()
    {
        return $this->container['imageBase64'];
    }

    /**
    * Sets imageBase64
    *
    * @param string $imageBase64 图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    *
    * @return $this
    */
    public function setImageBase64($imageBase64)
    {
        $this->container['imageBase64'] = $imageBase64;
        return $this;
    }

    /**
    * Gets returnFields
    *  指定返回的自定义字段。
    *
    * @return string[]|null
    */
    public function getReturnFields()
    {
        return $this->container['returnFields'];
    }

    /**
    * Sets returnFields
    *
    * @param string[]|null $returnFields 指定返回的自定义字段。
    *
    * @return $this
    */
    public function setReturnFields($returnFields)
    {
        $this->container['returnFields'] = $returnFields;
        return $this;
    }

    /**
    * Gets threshold
    *  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    *
    * @return double|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param double|null $threshold 人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets sort
    *  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @return map[string,string][]|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param map[string,string][]|null $sort 支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

