<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegionResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegionResourceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    * isError  请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    * resources  资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'isError' => 'bool',
            'resources' => '\HuaweiCloud\SDK\Scm\V3\Model\ResourceDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    * isError  请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    * resources  资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'isError' => null,
        'resources' => null
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
    * regionId  局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    * isError  请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    * resources  资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'isError' => 'is_error',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    * isError  请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    * resources  资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'isError' => 'setIsError',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    * isError  请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    * resources  资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'isError' => 'getIsError',
            'resources' => 'getResources'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['isError'] = isset($data['isError']) ? $data['isError'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 63)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['isError'] === null) {
            $invalidProperties[] = "'isError' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
    * Gets regionId
    *  局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 局点ID。当服务为全局服务时，region_id为global，其余按照IAM的标准命名。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets isError
    *  请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    *
    * @return bool
    */
    public function getIsError()
    {
        return $this->container['isError'];
    }

    /**
    * Sets isError
    *
    * @param bool $isError 请求当前region资源信息过程中，响应是否存在异常的标志。 - true : 存在异常，当前region所统计数据不准确 - false: 无异常，当前region所统计数据准确
    *
    * @return $this
    */
    public function setIsError($isError)
    {
        $this->container['isError'] = $isError;
        return $this;
    }

    /**
    * Gets resources
    *  资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\ResourceDetail[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\ResourceDetail[] $resources 资源集合，每个资源的标识：资源ID + “:” + 资源名称，详情请参见ResourceDetail字段数据结构说明。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

