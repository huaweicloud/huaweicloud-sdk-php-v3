<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachDevServerPortResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachDevServerPortResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * macAddr  **参数解释**：端口MAC地址，由系统分配。
    * portId  **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * portState  **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    * virsubnetId  **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'macAddr' => 'string',
            'portId' => 'string',
            'portState' => 'string',
            'virsubnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * macAddr  **参数解释**：端口MAC地址，由系统分配。
    * portId  **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * portState  **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    * virsubnetId  **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'macAddr' => null,
        'portId' => null,
        'portState' => null,
        'virsubnetId' => null
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
    * macAddr  **参数解释**：端口MAC地址，由系统分配。
    * portId  **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * portState  **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    * virsubnetId  **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'macAddr' => 'mac_addr',
            'portId' => 'port_id',
            'portState' => 'port_state',
            'virsubnetId' => 'virsubnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * macAddr  **参数解释**：端口MAC地址，由系统分配。
    * portId  **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * portState  **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    * virsubnetId  **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $setters = [
            'macAddr' => 'setMacAddr',
            'portId' => 'setPortId',
            'portState' => 'setPortState',
            'virsubnetId' => 'setVirsubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * macAddr  **参数解释**：端口MAC地址，由系统分配。
    * portId  **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * portState  **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    * virsubnetId  **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $getters = [
            'macAddr' => 'getMacAddr',
            'portId' => 'getPortId',
            'portState' => 'getPortState',
            'virsubnetId' => 'getVirsubnetId'
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
    const PORT_STATE_ACTIVE = 'ACTIVE';
    const PORT_STATE_BUILD = 'BUILD';
    const PORT_STATE_DOWN = 'DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPortStateAllowableValues()
    {
        return [
            self::PORT_STATE_ACTIVE,
            self::PORT_STATE_BUILD,
            self::PORT_STATE_DOWN,
        ];
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
        $this->container['macAddr'] = isset($data['macAddr']) ? $data['macAddr'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['portState'] = isset($data['portState']) ? $data['portState'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['macAddr']) && (mb_strlen($this->container['macAddr']) > 64)) {
                $invalidProperties[] = "invalid value for 'macAddr', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['macAddr']) && (mb_strlen($this->container['macAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'macAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 64)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) < 1)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getPortStateAllowableValues();
                if (!is_null($this->container['portState']) && !in_array($this->container['portState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'portState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 1.";
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
    * Gets macAddr
    *  **参数解释**：端口MAC地址，由系统分配。
    *
    * @return string|null
    */
    public function getMacAddr()
    {
        return $this->container['macAddr'];
    }

    /**
    * Sets macAddr
    *
    * @param string|null $macAddr **参数解释**：端口MAC地址，由系统分配。
    *
    * @return $this
    */
    public function setMacAddr($macAddr)
    {
        $this->container['macAddr'] = $macAddr;
        return $this;
    }

    /**
    * Gets portId
    *  **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId **参数解释**：网卡ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets portState
    *  **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    *
    * @return string|null
    */
    public function getPortState()
    {
        return $this->container['portState'];
    }

    /**
    * Sets portState
    *
    * @param string|null $portState **参数解释**：端口状态。 **取值范围**： - ACTIVE：端口处于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。
    *
    * @return $this
    */
    public function setPortState($portState)
    {
        $this->container['portState'] = $portState;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId **参数解释**：端口所在子网ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
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

