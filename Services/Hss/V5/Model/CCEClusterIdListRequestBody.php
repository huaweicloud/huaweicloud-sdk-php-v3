<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CCEClusterIdListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CCEClusterIdListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterIdList  集群id列表
    * detectType  查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterIdList' => 'string[]',
            'detectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterIdList  集群id列表
    * detectType  查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterIdList' => null,
        'detectType' => null
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
    * clusterIdList  集群id列表
    * detectType  查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterIdList' => 'cluster_id_list',
            'detectType' => 'detect_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterIdList  集群id列表
    * detectType  查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterIdList' => 'setClusterIdList',
            'detectType' => 'setDetectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterIdList  集群id列表
    * detectType  查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterIdList' => 'getClusterIdList',
            'detectType' => 'getDetectType'
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
        $this->container['clusterIdList'] = isset($data['clusterIdList']) ? $data['clusterIdList'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterIdList'] === null) {
            $invalidProperties[] = "'clusterIdList' can't be null";
        }
            if (!is_null($this->container['detectType']) && !preg_match("/(^image|baseline|vul|event$)/", $this->container['detectType'])) {
                $invalidProperties[] = "invalid value for 'detectType', must be conform to the pattern /(^image|baseline|vul|event$)/.";
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
    * Gets clusterIdList
    *  集群id列表
    *
    * @return string[]
    */
    public function getClusterIdList()
    {
        return $this->container['clusterIdList'];
    }

    /**
    * Sets clusterIdList
    *
    * @param string[] $clusterIdList 集群id列表
    *
    * @return $this
    */
    public function setClusterIdList($clusterIdList)
    {
        $this->container['clusterIdList'] = $clusterIdList;
        return $this;
    }

    /**
    * Gets detectType
    *  查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType 查询类型，包含如下:     - image : 镜像风险     - baseline : 基线风险     - vul : 漏洞风险     - event : 入侵风险
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
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

