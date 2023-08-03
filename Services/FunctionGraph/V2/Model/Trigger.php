<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Trigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Trigger';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * triggerName  触发器名称
    * triggerType  触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    * enabled  是否启用触发器
    * triggerConfig  triggerConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'triggerName' => 'string',
            'triggerType' => 'string',
            'enabled' => 'bool',
            'triggerConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\OBSTriggerConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * triggerName  触发器名称
    * triggerType  触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    * enabled  是否启用触发器
    * triggerConfig  triggerConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'triggerName' => null,
        'triggerType' => null,
        'enabled' => null,
        'triggerConfig' => null
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
    * triggerName  触发器名称
    * triggerType  触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    * enabled  是否启用触发器
    * triggerConfig  triggerConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'triggerName' => 'trigger_name',
            'triggerType' => 'trigger_type',
            'enabled' => 'enabled',
            'triggerConfig' => 'trigger_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * triggerName  触发器名称
    * triggerType  触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    * enabled  是否启用触发器
    * triggerConfig  triggerConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'triggerName' => 'setTriggerName',
            'triggerType' => 'setTriggerType',
            'enabled' => 'setEnabled',
            'triggerConfig' => 'setTriggerConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * triggerName  触发器名称
    * triggerType  触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    * enabled  是否启用触发器
    * triggerConfig  triggerConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'triggerName' => 'getTriggerName',
            'triggerType' => 'getTriggerType',
            'enabled' => 'getEnabled',
            'triggerConfig' => 'getTriggerConfig'
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
    const TRIGGER_TYPE_FLOWTIMER = 'FLOWTIMER';
    const TRIGGER_TYPE_SMN = 'SMN';
    const TRIGGER_TYPE_APIG = 'APIG';
    const TRIGGER_TYPE_APIG_DE = 'APIG_DE';
    const TRIGGER_TYPE_OBS = 'OBS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_FLOWTIMER,
            self::TRIGGER_TYPE_SMN,
            self::TRIGGER_TYPE_APIG,
            self::TRIGGER_TYPE_APIG_DE,
            self::TRIGGER_TYPE_OBS,
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
        $this->container['triggerName'] = isset($data['triggerName']) ? $data['triggerName'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['triggerConfig'] = isset($data['triggerConfig']) ? $data['triggerConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['triggerName'] === null) {
            $invalidProperties[] = "'triggerName' can't be null";
        }
            if ((mb_strlen($this->container['triggerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'triggerName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['triggerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['triggerType'] === null) {
            $invalidProperties[] = "'triggerType' can't be null";
        }
            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['triggerType']) > 32)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['triggerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 1.";
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
    * Gets triggerName
    *  触发器名称
    *
    * @return string
    */
    public function getTriggerName()
    {
        return $this->container['triggerName'];
    }

    /**
    * Sets triggerName
    *
    * @param string $triggerName 触发器名称
    *
    * @return $this
    */
    public function setTriggerName($triggerName)
    {
        $this->container['triggerName'] = $triggerName;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    *
    * @return string
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string $triggerType 触发器类型 FLOWTIMER：定时触发器 SMN：SMN触发器 APIG：APIG触发器(共享版) APIG_DE：APIG触发器(专享版) OBS：OBS触发器
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用触发器
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用触发器
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets triggerConfig
    *  triggerConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\OBSTriggerConfig|null
    */
    public function getTriggerConfig()
    {
        return $this->container['triggerConfig'];
    }

    /**
    * Sets triggerConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\OBSTriggerConfig|null $triggerConfig triggerConfig
    *
    * @return $this
    */
    public function setTriggerConfig($triggerConfig)
    {
        $this->container['triggerConfig'] = $triggerConfig;
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

