<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableControlOperateReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableControlOperateReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identifier  控制策略ID。
    * targetIdentifier  组织单元的ID信息。
    * parameters  策略参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identifier' => 'string',
            'targetIdentifier' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Rgc\V1\Model\EnableControlParameters[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identifier  控制策略ID。
    * targetIdentifier  组织单元的ID信息。
    * parameters  策略参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identifier' => null,
        'targetIdentifier' => null,
        'parameters' => null
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
    * identifier  控制策略ID。
    * targetIdentifier  组织单元的ID信息。
    * parameters  策略参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identifier' => 'identifier',
            'targetIdentifier' => 'target_identifier',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identifier  控制策略ID。
    * targetIdentifier  组织单元的ID信息。
    * parameters  策略参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'identifier' => 'setIdentifier',
            'targetIdentifier' => 'setTargetIdentifier',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identifier  控制策略ID。
    * targetIdentifier  组织单元的ID信息。
    * parameters  策略参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'identifier' => 'getIdentifier',
            'targetIdentifier' => 'getTargetIdentifier',
            'parameters' => 'getParameters'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['targetIdentifier'] = isset($data['targetIdentifier']) ? $data['targetIdentifier'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
            if ((mb_strlen($this->container['identifier']) > 128)) {
                $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['identifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_\\-:\/]+$/", $this->container['identifier'])) {
                $invalidProperties[] = "invalid value for 'identifier', must be conform to the pattern /^[0-9a-zA-Z_\\-:\/]+$/.";
            }
        if ($this->container['targetIdentifier'] === null) {
            $invalidProperties[] = "'targetIdentifier' can't be null";
        }
            if ((mb_strlen($this->container['targetIdentifier']) > 2048)) {
                $invalidProperties[] = "invalid value for 'targetIdentifier', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['targetIdentifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetIdentifier', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_\\-:\/]+$/", $this->container['targetIdentifier'])) {
                $invalidProperties[] = "invalid value for 'targetIdentifier', must be conform to the pattern /^[0-9a-zA-Z_\\-:\/]+$/.";
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
    * Gets identifier
    *  控制策略ID。
    *
    * @return string
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string $identifier 控制策略ID。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets targetIdentifier
    *  组织单元的ID信息。
    *
    * @return string
    */
    public function getTargetIdentifier()
    {
        return $this->container['targetIdentifier'];
    }

    /**
    * Sets targetIdentifier
    *
    * @param string $targetIdentifier 组织单元的ID信息。
    *
    * @return $this
    */
    public function setTargetIdentifier($targetIdentifier)
    {
        $this->container['targetIdentifier'] = $targetIdentifier;
        return $this;
    }

    /**
    * Gets parameters
    *  策略参数。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\EnableControlParameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\EnableControlParameters[]|null $parameters 策略参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

