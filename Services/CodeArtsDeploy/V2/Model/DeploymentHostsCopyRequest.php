<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentHostsCopyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentHostsCopyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostUuids  主机id列表
    * targetGroupId  目标主机集群id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostUuids' => 'string[]',
            'targetGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostUuids  主机id列表
    * targetGroupId  目标主机集群id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostUuids' => null,
        'targetGroupId' => null
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
    * hostUuids  主机id列表
    * targetGroupId  目标主机集群id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostUuids' => 'host_uuids',
            'targetGroupId' => 'target_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostUuids  主机id列表
    * targetGroupId  目标主机集群id
    *
    * @var string[]
    */
    protected static $setters = [
            'hostUuids' => 'setHostUuids',
            'targetGroupId' => 'setTargetGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostUuids  主机id列表
    * targetGroupId  目标主机集群id
    *
    * @var string[]
    */
    protected static $getters = [
            'hostUuids' => 'getHostUuids',
            'targetGroupId' => 'getTargetGroupId'
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
        $this->container['hostUuids'] = isset($data['hostUuids']) ? $data['hostUuids'] : null;
        $this->container['targetGroupId'] = isset($data['targetGroupId']) ? $data['targetGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostUuids'] === null) {
            $invalidProperties[] = "'hostUuids' can't be null";
        }
        if ($this->container['targetGroupId'] === null) {
            $invalidProperties[] = "'targetGroupId' can't be null";
        }
            if ((mb_strlen($this->container['targetGroupId']) > 32)) {
                $invalidProperties[] = "invalid value for 'targetGroupId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['targetGroupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'targetGroupId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['targetGroupId'])) {
                $invalidProperties[] = "invalid value for 'targetGroupId', must be conform to the pattern /^[0-9a-z]{32}$/.";
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
    * Gets hostUuids
    *  主机id列表
    *
    * @return string[]
    */
    public function getHostUuids()
    {
        return $this->container['hostUuids'];
    }

    /**
    * Sets hostUuids
    *
    * @param string[] $hostUuids 主机id列表
    *
    * @return $this
    */
    public function setHostUuids($hostUuids)
    {
        $this->container['hostUuids'] = $hostUuids;
        return $this;
    }

    /**
    * Gets targetGroupId
    *  目标主机集群id
    *
    * @return string
    */
    public function getTargetGroupId()
    {
        return $this->container['targetGroupId'];
    }

    /**
    * Sets targetGroupId
    *
    * @param string $targetGroupId 目标主机集群id
    *
    * @return $this
    */
    public function setTargetGroupId($targetGroupId)
    {
        $this->container['targetGroupId'] = $targetGroupId;
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

