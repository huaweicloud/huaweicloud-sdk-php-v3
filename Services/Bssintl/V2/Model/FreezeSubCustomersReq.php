<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FreezeSubCustomersReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FreezeSubCustomersReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerIds  需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    * reason  冻结原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerIds' => 'string[]',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerIds  需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    * reason  冻结原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerIds' => null,
        'reason' => null
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
    * customerIds  需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    * reason  冻结原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerIds' => 'customer_ids',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerIds  需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    * reason  冻结原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerIds' => 'setCustomerIds',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerIds  需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    * reason  冻结原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerIds' => 'getCustomerIds',
            'reason' => 'getReason'
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
        $this->container['customerIds'] = isset($data['customerIds']) ? $data['customerIds'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerIds'] === null) {
            $invalidProperties[] = "'customerIds' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
            if ((mb_strlen($this->container['reason']) > 256)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['reason']) < 1)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 1.";
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
    * Gets customerIds
    *  需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    *
    * @return string[]
    */
    public function getCustomerIds()
    {
        return $this->container['customerIds'];
    }

    /**
    * Sets customerIds
    *
    * @param string[] $customerIds 需要冻结的客户账号ID列表。 您可以调用查询客户列表接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerIds($customerIds)
    {
        $this->container['customerIds'] = $customerIds;
        return $this;
    }

    /**
    * Gets reason
    *  冻结原因。
    *
    * @return string
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string $reason 冻结原因。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

