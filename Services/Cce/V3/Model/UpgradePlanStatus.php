<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradePlanStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradePlanStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  自动升级计划状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  自动升级计划状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null
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
    * phase  自动升级计划状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  自动升级计划状态
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  自动升级计划状态
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase'
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
    const PHASE_PENDING = 'Pending';
    const PHASE_ENQUEUED = 'Enqueued';
    const PHASE_UPGRADING = 'Upgrading';
    const PHASE_SUCCESS = 'Success';
    const PHASE_FAILED = 'Failed';
    const PHASE_SKIPPED = 'Skipped';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPhaseAllowableValues()
    {
        return [
            self::PHASE_PENDING,
            self::PHASE_ENQUEUED,
            self::PHASE_UPGRADING,
            self::PHASE_SUCCESS,
            self::PHASE_FAILED,
            self::PHASE_SKIPPED,
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['phase'] === null) {
            $invalidProperties[] = "'phase' can't be null";
        }
            $allowedValues = $this->getPhaseAllowableValues();
                if (!is_null($this->container['phase']) && !in_array($this->container['phase'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'phase', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets phase
    *  自动升级计划状态
    *
    * @return string
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string $phase 自动升级计划状态
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
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

