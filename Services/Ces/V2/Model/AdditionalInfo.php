<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdditionalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdditionalInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    * resourceName  **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    * eventId  **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceName' => 'string',
            'eventId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    * resourceName  **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    * eventId  **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceName' => null,
        'eventId' => null
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
    * resourceId  **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    * resourceName  **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    * eventId  **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'eventId' => 'event_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    * resourceName  **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    * eventId  **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'eventId' => 'setEventId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    * resourceName  **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    * eventId  **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'eventId' => 'getEventId'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) > 24)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) < 24)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 24.";
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
    * Gets resourceId
    *  **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 该条告警记录对应的资源ID；如：22d98f6c-16d2-4c2d-b424-50e79d82838f。 **取值范围**： 字符串长度最大为128。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释**： 该条告警记录对应的资源名称；如：ECS-Test01。 **取值范围**： 字符串长度最大为128。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets eventId
    *  **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId **参数解释**： 该条告警记录对应的事件监控ID，资源所产生的事件；如：ev16031292300990kKN8p17J。 **取值范围**： 字符串长度为24。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
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

