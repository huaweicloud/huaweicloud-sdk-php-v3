<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsConfigsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsConfigsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceLtsConfigs  每个实例的LTS日志配置信息和实例简要信息。
    * totalCount  全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceLtsConfigs' => '\HuaweiCloud\SDK\Dds\V3\Model\ListLtsLogPolicyRespondBodyInstanceLtsConfigs[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceLtsConfigs  每个实例的LTS日志配置信息和实例简要信息。
    * totalCount  全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
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
    * instanceLtsConfigs  每个实例的LTS日志配置信息和实例简要信息。
    * totalCount  全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceLtsConfigs' => 'instance_lts_configs',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceLtsConfigs  每个实例的LTS日志配置信息和实例简要信息。
    * totalCount  全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceLtsConfigs' => 'setInstanceLtsConfigs',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceLtsConfigs  每个实例的LTS日志配置信息和实例简要信息。
    * totalCount  全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
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
    *  每个实例的LTS日志配置信息和实例简要信息。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\ListLtsLogPolicyRespondBodyInstanceLtsConfigs[]|null
    */
    public function getInstanceLtsConfigs()
    {
        return $this->container['instanceLtsConfigs'];
    }

    /**
    * Sets instanceLtsConfigs
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\ListLtsLogPolicyRespondBodyInstanceLtsConfigs[]|null $instanceLtsConfigs 每个实例的LTS日志配置信息和实例简要信息。
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
    *  全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
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
    * @param int|null $totalCount 全部可查询的云服务日志配置结果个数，等于所有DDS实例的个数。
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

