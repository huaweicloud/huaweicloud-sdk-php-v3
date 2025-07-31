<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchClusterProtectionModeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchClusterProtectionModeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterIds  集群ID列表
    * opr  - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterIds' => 'string[]',
            'opr' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterIds  集群ID列表
    * opr  - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterIds' => null,
        'opr' => 'int32'
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
    * clusterIds  集群ID列表
    * opr  - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterIds' => 'cluster_ids',
            'opr' => 'opr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterIds  集群ID列表
    * opr  - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterIds' => 'setClusterIds',
            'opr' => 'setOpr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterIds  集群ID列表
    * opr  - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterIds' => 'getClusterIds',
            'opr' => 'getOpr'
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
        $this->container['clusterIds'] = isset($data['clusterIds']) ? $data['clusterIds'] : null;
        $this->container['opr'] = isset($data['opr']) ? $data['opr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterIds'] === null) {
            $invalidProperties[] = "'clusterIds' can't be null";
        }
        if ($this->container['opr'] === null) {
            $invalidProperties[] = "'opr' can't be null";
        }
            if (($this->container['opr'] > 10)) {
                $invalidProperties[] = "invalid value for 'opr', must be smaller than or equal to 10.";
            }
            if (($this->container['opr'] < 0)) {
                $invalidProperties[] = "invalid value for 'opr', must be bigger than or equal to 0.";
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
    * Gets clusterIds
    *  集群ID列表
    *
    * @return string[]
    */
    public function getClusterIds()
    {
        return $this->container['clusterIds'];
    }

    /**
    * Sets clusterIds
    *
    * @param string[] $clusterIds 集群ID列表
    *
    * @return $this
    */
    public function setClusterIds($clusterIds)
    {
        $this->container['clusterIds'] = $clusterIds;
        return $this;
    }

    /**
    * Gets opr
    *  - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @return int
    */
    public function getOpr()
    {
        return $this->container['opr'];
    }

    /**
    * Sets opr
    *
    * @param int $opr - 1：开 - 0：关 - 2：关闭并卸载插件
    *
    * @return $this
    */
    public function setOpr($opr)
    {
        $this->container['opr'] = $opr;
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

