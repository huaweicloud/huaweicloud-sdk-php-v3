<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailoverStrategyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailoverStrategyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repairStrategy  可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repairStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repairStrategy  可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repairStrategy' => null
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
    * repairStrategy  可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repairStrategy' => 'repairStrategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repairStrategy  可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'repairStrategy' => 'setRepairStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repairStrategy  可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'repairStrategy' => 'getRepairStrategy'
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
        $this->container['repairStrategy'] = isset($data['repairStrategy']) ? $data['repairStrategy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repairStrategy'] === null) {
            $invalidProperties[] = "'repairStrategy' can't be null";
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
    * Gets repairStrategy
    *  可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @return string
    */
    public function getRepairStrategy()
    {
        return $this->container['repairStrategy'];
    }

    /**
    * Sets repairStrategy
    *
    * @param string $repairStrategy 可用性策略，可选择如下方式： - reliability：可靠性优先，数据库应该尽可能保障数据的可靠性，即数据丢失量最少。对于数据一致性要求较高的业务，建议选择该策略。 - availability：可用性优先，数据库应该可快恢复服务，即可用时间最长。对于数据库在线时间要求较高的业务，建议选择该策略。
    *
    * @return $this
    */
    public function setRepairStrategy($repairStrategy)
    {
        $this->container['repairStrategy'] = $repairStrategy;
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

