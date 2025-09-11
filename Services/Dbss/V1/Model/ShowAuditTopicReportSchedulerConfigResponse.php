<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditTopicReportSchedulerConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditTopicReportSchedulerConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduler  scheduler
    * smnEffective  是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduler' => '\HuaweiCloud\SDK\Dbss\V1\Model\SchedulerConfigBase',
            'smnEffective' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduler  scheduler
    * smnEffective  是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduler' => null,
        'smnEffective' => null
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
    * scheduler  scheduler
    * smnEffective  是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduler' => 'scheduler',
            'smnEffective' => 'smn_effective'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduler  scheduler
    * smnEffective  是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduler' => 'setScheduler',
            'smnEffective' => 'setSmnEffective'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduler  scheduler
    * smnEffective  是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduler' => 'getScheduler',
            'smnEffective' => 'getSmnEffective'
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
        $this->container['scheduler'] = isset($data['scheduler']) ? $data['scheduler'] : null;
        $this->container['smnEffective'] = isset($data['smnEffective']) ? $data['smnEffective'] : null;
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
    * Gets scheduler
    *  scheduler
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\SchedulerConfigBase|null
    */
    public function getScheduler()
    {
        return $this->container['scheduler'];
    }

    /**
    * Sets scheduler
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\SchedulerConfigBase|null $scheduler scheduler
    *
    * @return $this
    */
    public function setScheduler($scheduler)
    {
        $this->container['scheduler'] = $scheduler;
        return $this;
    }

    /**
    * Gets smnEffective
    *  是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @return bool|null
    */
    public function getSmnEffective()
    {
        return $this->container['smnEffective'];
    }

    /**
    * Sets smnEffective
    *
    * @param bool|null $smnEffective 是否支持订阅  - true: 支持  - false: 不支持\"
    *
    * @return $this
    */
    public function setSmnEffective($smnEffective)
    {
        $this->container['smnEffective'] = $smnEffective;
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

