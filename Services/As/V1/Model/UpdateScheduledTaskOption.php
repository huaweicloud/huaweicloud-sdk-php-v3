<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateScheduledTaskOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateScheduledTaskOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  计划任务名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'scheduledPolicy' => '\HuaweiCloud\SDK\_As\V1\Model\ScheduledTaskPolicy',
            'instanceNumber' => '\HuaweiCloud\SDK\_As\V1\Model\IntegerRange'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  计划任务名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'scheduledPolicy' => null,
        'instanceNumber' => null
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
    * name  计划任务名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'scheduledPolicy' => 'scheduled_policy',
            'instanceNumber' => 'instance_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  计划任务名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'scheduledPolicy' => 'setScheduledPolicy',
            'instanceNumber' => 'setInstanceNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  计划任务名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'scheduledPolicy' => 'getScheduledPolicy',
            'instanceNumber' => 'getInstanceNumber'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['scheduledPolicy'] = isset($data['scheduledPolicy']) ? $data['scheduledPolicy'] : null;
        $this->container['instanceNumber'] = isset($data['instanceNumber']) ? $data['instanceNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  计划任务名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 计划任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets scheduledPolicy
    *  scheduledPolicy
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScheduledTaskPolicy|null
    */
    public function getScheduledPolicy()
    {
        return $this->container['scheduledPolicy'];
    }

    /**
    * Sets scheduledPolicy
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScheduledTaskPolicy|null $scheduledPolicy scheduledPolicy
    *
    * @return $this
    */
    public function setScheduledPolicy($scheduledPolicy)
    {
        $this->container['scheduledPolicy'] = $scheduledPolicy;
        return $this;
    }

    /**
    * Gets instanceNumber
    *  instanceNumber
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\IntegerRange|null
    */
    public function getInstanceNumber()
    {
        return $this->container['instanceNumber'];
    }

    /**
    * Sets instanceNumber
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\IntegerRange|null $instanceNumber instanceNumber
    *
    * @return $this
    */
    public function setInstanceNumber($instanceNumber)
    {
        $this->container['instanceNumber'] = $instanceNumber;
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

