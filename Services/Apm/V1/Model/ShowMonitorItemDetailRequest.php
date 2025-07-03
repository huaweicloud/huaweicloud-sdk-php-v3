<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMonitorItemDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMonitorItemDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * monitorItemId  监控项ID
    * envId  环境ID
    * xBusinessId  xBusinessId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'monitorItemId' => 'int',
            'envId' => 'int',
            'xBusinessId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * monitorItemId  监控项ID
    * envId  环境ID
    * xBusinessId  xBusinessId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'monitorItemId' => 'int64',
        'envId' => 'int64',
        'xBusinessId' => 'int64'
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
    * monitorItemId  监控项ID
    * envId  环境ID
    * xBusinessId  xBusinessId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'monitorItemId' => 'monitor_item_id',
            'envId' => 'env_id',
            'xBusinessId' => 'x-business-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * monitorItemId  监控项ID
    * envId  环境ID
    * xBusinessId  xBusinessId
    *
    * @var string[]
    */
    protected static $setters = [
            'monitorItemId' => 'setMonitorItemId',
            'envId' => 'setEnvId',
            'xBusinessId' => 'setXBusinessId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * monitorItemId  监控项ID
    * envId  环境ID
    * xBusinessId  xBusinessId
    *
    * @var string[]
    */
    protected static $getters = [
            'monitorItemId' => 'getMonitorItemId',
            'envId' => 'getEnvId',
            'xBusinessId' => 'getXBusinessId'
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
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['xBusinessId'] = isset($data['xBusinessId']) ? $data['xBusinessId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['monitorItemId'] === null) {
            $invalidProperties[] = "'monitorItemId' can't be null";
        }
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['xBusinessId'] === null) {
            $invalidProperties[] = "'xBusinessId' can't be null";
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
    * Gets monitorItemId
    *  监控项ID
    *
    * @return int
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int $monitorItemId 监控项ID
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets envId
    *  环境ID
    *
    * @return int
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int $envId 环境ID
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets xBusinessId
    *  xBusinessId
    *
    * @return int
    */
    public function getXBusinessId()
    {
        return $this->container['xBusinessId'];
    }

    /**
    * Sets xBusinessId
    *
    * @param int $xBusinessId xBusinessId
    *
    * @return $this
    */
    public function setXBusinessId($xBusinessId)
    {
        $this->container['xBusinessId'] = $xBusinessId;
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

