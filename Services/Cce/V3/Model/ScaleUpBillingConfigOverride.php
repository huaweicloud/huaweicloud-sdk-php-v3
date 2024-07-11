<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleUpBillingConfigOverride implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleUpBillingConfigOverride';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billingMode  节点计费类型，0(按需)，1(包周期)
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billingMode' => 'int',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleUpExtendParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billingMode  节点计费类型，0(按需)，1(包周期)
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billingMode' => null,
        'extendParam' => null
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
    * billingMode  节点计费类型，0(按需)，1(包周期)
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billingMode' => 'billingMode',
            'extendParam' => 'extendParam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billingMode  节点计费类型，0(按需)，1(包周期)
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'billingMode' => 'setBillingMode',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billingMode  节点计费类型，0(按需)，1(包周期)
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'billingMode' => 'getBillingMode',
            'extendParam' => 'getExtendParam'
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
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['billingMode'] === null) {
            $invalidProperties[] = "'billingMode' can't be null";
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
    * Gets billingMode
    *  节点计费类型，0(按需)，1(包周期)
    *
    * @return int
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param int $billingMode 节点计费类型，0(按需)，1(包周期)
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleUpExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleUpExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

