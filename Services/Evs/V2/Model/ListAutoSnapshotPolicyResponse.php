<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAutoSnapshotPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAutoSnapshotPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * snapshotPolicies  查询的自动快照策略列表信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'snapshotPolicies' => '\HuaweiCloud\SDK\Evs\V2\Model\GetSnapshotPolicy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * snapshotPolicies  查询的自动快照策略列表信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'snapshotPolicies' => null
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
    * snapshotPolicies  查询的自动快照策略列表信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'snapshotPolicies' => 'snapshot_policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * snapshotPolicies  查询的自动快照策略列表信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'snapshotPolicies' => 'setSnapshotPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * snapshotPolicies  查询的自动快照策略列表信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'snapshotPolicies' => 'getSnapshotPolicies'
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
        $this->container['snapshotPolicies'] = isset($data['snapshotPolicies']) ? $data['snapshotPolicies'] : null;
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
    * Gets snapshotPolicies
    *  查询的自动快照策略列表信息。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\GetSnapshotPolicy[]|null
    */
    public function getSnapshotPolicies()
    {
        return $this->container['snapshotPolicies'];
    }

    /**
    * Sets snapshotPolicies
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\GetSnapshotPolicy[]|null $snapshotPolicies 查询的自动快照策略列表信息。
    *
    * @return $this
    */
    public function setSnapshotPolicies($snapshotPolicies)
    {
        $this->container['snapshotPolicies'] = $snapshotPolicies;
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

