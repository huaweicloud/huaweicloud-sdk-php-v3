<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLtsConfigsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLtsConfigsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceLtsConfigs  实例LTS日志配置列表
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceLtsConfigs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\LtsConfigsV3[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceLtsConfigs  实例LTS日志配置列表
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceLtsConfigs' => null,
        'totalCount' => null
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
    * instanceLtsConfigs  实例LTS日志配置列表
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceLtsConfigs' => 'instance_lts_configs',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceLtsConfigs  实例LTS日志配置列表
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceLtsConfigs' => 'setInstanceLtsConfigs',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceLtsConfigs  实例LTS日志配置列表
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceLtsConfigs' => 'getInstanceLtsConfigs',
            'totalCount' => 'getTotalCount'
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
        $this->container['instanceLtsConfigs'] = isset($data['instanceLtsConfigs']) ? $data['instanceLtsConfigs'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets instanceLtsConfigs
    *  实例LTS日志配置列表
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\LtsConfigsV3[]|null
    */
    public function getInstanceLtsConfigs()
    {
        return $this->container['instanceLtsConfigs'];
    }

    /**
    * Sets instanceLtsConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\LtsConfigsV3[]|null $instanceLtsConfigs 实例LTS日志配置列表
    *
    * @return $this
    */
    public function setInstanceLtsConfigs($instanceLtsConfigs)
    {
        $this->container['instanceLtsConfigs'] = $instanceLtsConfigs;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

