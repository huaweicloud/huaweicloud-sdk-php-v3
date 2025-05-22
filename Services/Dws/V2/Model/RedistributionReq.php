<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedistributionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedistributionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisMode  **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    * parallelJobs  **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisMode' => 'string',
            'parallelJobs' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisMode  **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    * parallelJobs  **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisMode' => null,
        'parallelJobs' => null
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
    * redisMode  **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    * parallelJobs  **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisMode' => 'redis_mode',
            'parallelJobs' => 'parallel_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisMode  **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    * parallelJobs  **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @var string[]
    */
    protected static $setters = [
            'redisMode' => 'setRedisMode',
            'parallelJobs' => 'setParallelJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisMode  **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    * parallelJobs  **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @var string[]
    */
    protected static $getters = [
            'redisMode' => 'getRedisMode',
            'parallelJobs' => 'getParallelJobs'
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
    const REDIS_MODE_OFFLINE = 'offline';
    const REDIS_MODE_ONLINE = 'online';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRedisModeAllowableValues()
    {
        return [
            self::REDIS_MODE_OFFLINE,
            self::REDIS_MODE_ONLINE,
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
        $this->container['redisMode'] = isset($data['redisMode']) ? $data['redisMode'] : null;
        $this->container['parallelJobs'] = isset($data['parallelJobs']) ? $data['parallelJobs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['redisMode'] === null) {
            $invalidProperties[] = "'redisMode' can't be null";
        }
            $allowedValues = $this->getRedisModeAllowableValues();
                if (!is_null($this->container['redisMode']) && !in_array($this->container['redisMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'redisMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['redisMode']) > 16)) {
                $invalidProperties[] = "invalid value for 'redisMode', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['redisMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'redisMode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['parallelJobs'] === null) {
            $invalidProperties[] = "'parallelJobs' can't be null";
        }
            if (($this->container['parallelJobs'] > 200)) {
                $invalidProperties[] = "invalid value for 'parallelJobs', must be smaller than or equal to 200.";
            }
            if (($this->container['parallelJobs'] < 4)) {
                $invalidProperties[] = "invalid value for 'parallelJobs', must be bigger than or equal to 4.";
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
    * Gets redisMode
    *  **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    *
    * @return string
    */
    public function getRedisMode()
    {
        return $this->container['redisMode'];
    }

    /**
    * Sets redisMode
    *
    * @param string $redisMode **参数解释**： 重分布模式 **约束限制**： 不涉及。 **取值范围**： online：在线重分布； offline：离线重分布； **默认取值**： offline
    *
    * @return $this
    */
    public function setRedisMode($redisMode)
    {
        $this->container['redisMode'] = $redisMode;
        return $this;
    }

    /**
    * Gets parallelJobs
    *  **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @return int
    */
    public function getParallelJobs()
    {
        return $this->container['parallelJobs'];
    }

    /**
    * Sets parallelJobs
    *
    * @param int $parallelJobs **参数解释**： 重分布并发数。 **约束限制**： 不涉及。 **取值范围**： 4~200 **默认取值**： 4
    *
    * @return $this
    */
    public function setParallelJobs($parallelJobs)
    {
        $this->container['parallelJobs'] = $parallelJobs;
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

