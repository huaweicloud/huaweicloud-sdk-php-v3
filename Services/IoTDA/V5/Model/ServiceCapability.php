<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceCapability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceCapability';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * serviceType  **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * properties  **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    * commands  **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    * events  **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    * description  **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * option  **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'serviceType' => 'string',
            'properties' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServiceProperty[]',
            'commands' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCommand[]',
            'events' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServiceEvent[]',
            'description' => 'string',
            'option' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * serviceType  **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * properties  **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    * commands  **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    * events  **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    * description  **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * option  **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'serviceType' => null,
        'properties' => null,
        'commands' => null,
        'events' => null,
        'description' => null,
        'option' => null
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
    * serviceId  **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * serviceType  **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * properties  **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    * commands  **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    * events  **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    * description  **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * option  **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'serviceType' => 'service_type',
            'properties' => 'properties',
            'commands' => 'commands',
            'events' => 'events',
            'description' => 'description',
            'option' => 'option'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * serviceType  **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * properties  **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    * commands  **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    * events  **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    * description  **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * option  **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'serviceType' => 'setServiceType',
            'properties' => 'setProperties',
            'commands' => 'setCommands',
            'events' => 'setEvents',
            'description' => 'setDescription',
            'option' => 'setOption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * serviceType  **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    * properties  **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    * commands  **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    * events  **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    * description  **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * option  **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'serviceType' => 'getServiceType',
            'properties' => 'getProperties',
            'commands' => 'getCommands',
            'events' => 'getEvents',
            'description' => 'getDescription',
            'option' => 'getOption'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['commands'] = isset($data['commands']) ? $data['commands'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : 'Optional';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!\\-$]{1,64}$/", $this->container['serviceId'])) {
                $invalidProperties[] = "invalid value for 'serviceId', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!\\-$]{1,64}$/.";
            }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!\\-$]{1,32}$/", $this->container['serviceType'])) {
                $invalidProperties[] = "invalid value for 'serviceType', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!\\-$]{1,32}$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。\/]{1,128}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。\/]{1,128}$/.";
            }
            if (!is_null($this->container['option']) && !preg_match("/(Master|Mandatory|Optional)/", $this->container['option'])) {
                $invalidProperties[] = "invalid value for 'option', must be conform to the pattern /(Master|Mandatory|Optional)/.";
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
    * Gets serviceId
    *  **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId **参数说明**：设备的服务ID。注：产品内不允许重复。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    *
    * @return string
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string $serviceType **参数说明**：设备的服务类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-$等字符的组合。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets properties
    *  **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceProperty[]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceProperty[]|null $properties **参数说明**：设备服务支持的属性列表。 **取值范围**：数组长度大小不超过500。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets commands
    *  **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCommand[]|null
    */
    public function getCommands()
    {
        return $this->container['commands'];
    }

    /**
    * Sets commands
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCommand[]|null $commands **参数说明**：设备服务支持的命令列表。 **取值范围**：数组长度大小不超过500。
    *
    * @return $this
    */
    public function setCommands($commands)
    {
        $this->container['commands'] = $commands;
        return $this;
    }

    /**
    * Gets events
    *  **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceEvent[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceEvent[]|null $events **参数说明**：设备服务支持的事件列表。 **取值范围**：数组长度大小不超过500。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数说明**：设备服务的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets option
    *  **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @return string|null
    */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
    * Sets option
    *
    * @param string|null $option **参数说明**：指定设备服务是否必选。目前本字段为非功能性字段，仅起到标识作用。 **取值范围**： - Master：主服务 - Mandatory：必选服务 - Optional：可选服务 默认值为Optional。
    *
    * @return $this
    */
    public function setOption($option)
    {
        $this->container['option'] = $option;
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

