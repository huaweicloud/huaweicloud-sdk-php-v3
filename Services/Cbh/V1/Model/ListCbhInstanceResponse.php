<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCbhInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCbhInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  云堡垒机实例总数。
    * quotaDetail  quotaDetail
    * instance  云堡垒机实例列表信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'quotaDetail' => '\HuaweiCloud\SDK\Cbh\V1\Model\QuotaDetail',
            'instance' => '\HuaweiCloud\SDK\Cbh\V1\Model\InstanceDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  云堡垒机实例总数。
    * quotaDetail  quotaDetail
    * instance  云堡垒机实例列表信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'quotaDetail' => null,
        'instance' => null
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
    * total  云堡垒机实例总数。
    * quotaDetail  quotaDetail
    * instance  云堡垒机实例列表信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'quotaDetail' => 'quotaDetail',
            'instance' => 'instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  云堡垒机实例总数。
    * quotaDetail  quotaDetail
    * instance  云堡垒机实例列表信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'quotaDetail' => 'setQuotaDetail',
            'instance' => 'setInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  云堡垒机实例总数。
    * quotaDetail  quotaDetail
    * instance  云堡垒机实例列表信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'quotaDetail' => 'getQuotaDetail',
            'instance' => 'getInstance'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['quotaDetail'] = isset($data['quotaDetail']) ? $data['quotaDetail'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 100)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets total
    *  云堡垒机实例总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 云堡垒机实例总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets quotaDetail
    *  quotaDetail
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\QuotaDetail|null
    */
    public function getQuotaDetail()
    {
        return $this->container['quotaDetail'];
    }

    /**
    * Sets quotaDetail
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\QuotaDetail|null $quotaDetail quotaDetail
    *
    * @return $this
    */
    public function setQuotaDetail($quotaDetail)
    {
        $this->container['quotaDetail'] = $quotaDetail;
        return $this;
    }

    /**
    * Gets instance
    *  云堡垒机实例列表信息。
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\InstanceDetail[]|null
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\InstanceDetail[]|null $instance 云堡垒机实例列表信息。
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
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

