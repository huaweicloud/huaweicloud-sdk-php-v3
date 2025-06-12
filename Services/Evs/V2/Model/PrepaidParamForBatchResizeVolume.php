<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrepaidParamForBatchResizeVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrepaidParamForBatchResizeVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAutoPay  Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAutoPay' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAutoPay  Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAutoPay' => null
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
    * isAutoPay  Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAutoPay  Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @var string[]
    */
    protected static $setters = [
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAutoPay  Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @var string[]
    */
    protected static $getters = [
            'isAutoPay' => 'getIsAutoPay'
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
    const IS_AUTO_PAY_FALSE = 'false';
    const IS_AUTO_PAY_TRUE = 'true';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsAutoPayAllowableValues()
    {
        return [
            self::IS_AUTO_PAY_FALSE,
            self::IS_AUTO_PAY_TRUE,
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
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIsAutoPayAllowableValues();
                if (!is_null($this->container['isAutoPay']) && !in_array($this->container['isAutoPay'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoPay', must be one of '%s'",
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
    * Gets isAutoPay
    *  Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @return string|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param string|null $isAutoPay Whether to pay immediately. This parameter is valid only when the disk is billed on a yearly/monthly basis. The default value is **false**. Values: - **true**: An order is immediately paid from the account balance. - **false**: An order is not paid immediately after being created.
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

