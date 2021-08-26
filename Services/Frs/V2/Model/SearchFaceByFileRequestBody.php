<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchFaceByFileRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchFaceByFileRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageFile  本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * returnFields  指定返回的自定义字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageFile' => '\SplFileObject',
            'topN' => 'int',
            'threshold' => 'double',
            'sort' => 'string',
            'filter' => 'string',
            'returnFields' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageFile  本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * returnFields  指定返回的自定义字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageFile' => 'binary',
        'topN' => 'int32',
        'threshold' => 'double',
        'sort' => null,
        'filter' => null,
        'returnFields' => null
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
    * imageFile  本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * returnFields  指定返回的自定义字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageFile' => 'image_file',
            'topN' => 'top_n',
            'threshold' => 'threshold',
            'sort' => 'sort',
            'filter' => 'filter',
            'returnFields' => 'return_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageFile  本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * returnFields  指定返回的自定义字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageFile' => 'setImageFile',
            'topN' => 'setTopN',
            'threshold' => 'setThreshold',
            'sort' => 'setSort',
            'filter' => 'setFilter',
            'returnFields' => 'setReturnFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageFile  本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    * topN  返回查询到的最相似的N张人脸，N默认为10。
    * threshold  人脸相似度阈值，低于这个阈值则不返回，取值范围0~1，一般情况下建议取值0.93，默认为0。
    * sort  支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    * filter  过滤条件，参考[filter语法](zh-cn_topic_0130807048.xml)。
    * returnFields  指定返回的自定义字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageFile' => 'getImageFile',
            'topN' => 'getTopN',
            'threshold' => 'getThreshold',
            'sort' => 'getSort',
            'filter' => 'getFilter',
            'returnFields' => 'getReturnFields'
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
        $this->container['imageFile'] = isset($data['imageFile']) ? $data['imageFile'] : null;
        $this->container['topN'] = isset($data['topN']) ? $data['topN'] : 10;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : 0.0;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['returnFields'] = isset($data['returnFields']) ? $data['returnFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageFile'] === null) {
            $invalidProperties[] = "'imageFile' can't be null";
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
    * Gets imageFile
    *  本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    *
    * @return \SplFileObject
    */
    public function getImageFile()
    {
        return $this->container['imageFile'];
    }

    /**
    * Sets imageFile
    *
    * @param \SplFileObject $imageFile 本地图片文件，图片不能超过8MB,建议小于1MB。上传文件时，请求格式为multipart。  必选，与image_url、image_base64、face_id四选一。
    *
    * @return $this
    */
    public function setImageFile($imageFile)
    {
        $this->container['imageFile'] = $imageFile;
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
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 支持字段排序，参考[sort语法](zh-cn_topic_0130807047.xml)。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
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
    * Gets returnFields
    *  指定返回的自定义字段。
    *
    * @return string|null
    */
    public function getReturnFields()
    {
        return $this->container['returnFields'];
    }

    /**
    * Sets returnFields
    *
    * @param string|null $returnFields 指定返回的自定义字段。
    *
    * @return $this
    */
    public function setReturnFields($returnFields)
    {
        $this->container['returnFields'] = $returnFields;
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

