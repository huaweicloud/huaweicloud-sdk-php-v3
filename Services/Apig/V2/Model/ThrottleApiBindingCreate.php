<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThrottleApiBindingCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThrottleApiBindingCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * strategyId  流控策略编号
    * publishIds  API的发布记录编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'strategyId' => 'string',
            'publishIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * strategyId  流控策略编号
    * publishIds  API的发布记录编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'strategyId' => null,
        'publishIds' => null
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
    * strategyId  流控策略编号
    * publishIds  API的发布记录编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'strategyId' => 'strategy_id',
            'publishIds' => 'publish_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * strategyId  流控策略编号
    * publishIds  API的发布记录编号
    *
    * @var string[]
    */
    protected static $setters = [
            'strategyId' => 'setStrategyId',
            'publishIds' => 'setPublishIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * strategyId  流控策略编号
    * publishIds  API的发布记录编号
    *
    * @var string[]
    */
    protected static $getters = [
            'strategyId' => 'getStrategyId',
            'publishIds' => 'getPublishIds'
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
        $this->container['strategyId'] = isset($data['strategyId']) ? $data['strategyId'] : null;
        $this->container['publishIds'] = isset($data['publishIds']) ? $data['publishIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['strategyId'] === null) {
            $invalidProperties[] = "'strategyId' can't be null";
        }
            if ((mb_strlen($this->container['strategyId']) > 65)) {
                $invalidProperties[] = "invalid value for 'strategyId', the character length must be smaller than or equal to 65.";
            }
            if ((mb_strlen($this->container['strategyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'strategyId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9-_]{0,64}$/", $this->container['strategyId'])) {
                $invalidProperties[] = "invalid value for 'strategyId', must be conform to the pattern /^[a-zA-Z0-9-_]{0,64}$/.";
            }
        if ($this->container['publishIds'] === null) {
            $invalidProperties[] = "'publishIds' can't be null";
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
    * Gets strategyId
    *  流控策略编号
    *
    * @return string
    */
    public function getStrategyId()
    {
        return $this->container['strategyId'];
    }

    /**
    * Sets strategyId
    *
    * @param string $strategyId 流控策略编号
    *
    * @return $this
    */
    public function setStrategyId($strategyId)
    {
        $this->container['strategyId'] = $strategyId;
        return $this;
    }

    /**
    * Gets publishIds
    *  API的发布记录编号
    *
    * @return string[]
    */
    public function getPublishIds()
    {
        return $this->container['publishIds'];
    }

    /**
    * Sets publishIds
    *
    * @param string[] $publishIds API的发布记录编号
    *
    * @return $this
    */
    public function setPublishIds($publishIds)
    {
        $this->container['publishIds'] = $publishIds;
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

