<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KernelTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KernelTime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * kernelTimeDetails  kernelTimeDetails
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allTime' => 'int',
            'kernelTimeDetails' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelTimeDetails'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * kernelTimeDetails  kernelTimeDetails
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allTime' => 'int64',
        'kernelTimeDetails' => null
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
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * kernelTimeDetails  kernelTimeDetails
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allTime' => 'all_time',
            'kernelTimeDetails' => 'kernel_time_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * kernelTimeDetails  kernelTimeDetails
    *
    * @var string[]
    */
    protected static $setters = [
            'allTime' => 'setAllTime',
            'kernelTimeDetails' => 'setKernelTimeDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * kernelTimeDetails  kernelTimeDetails
    *
    * @var string[]
    */
    protected static $getters = [
            'allTime' => 'getAllTime',
            'kernelTimeDetails' => 'getKernelTimeDetails'
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
        $this->container['allTime'] = isset($data['allTime']) ? $data['allTime'] : null;
        $this->container['kernelTimeDetails'] = isset($data['kernelTimeDetails']) ? $data['kernelTimeDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allTime'] === null) {
            $invalidProperties[] = "'allTime' can't be null";
        }
        if ($this->container['kernelTimeDetails'] === null) {
            $invalidProperties[] = "'kernelTimeDetails' can't be null";
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
    * Gets allTime
    *  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getAllTime()
    {
        return $this->container['allTime'];
    }

    /**
    * Sets allTime
    *
    * @param int $allTime **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAllTime($allTime)
    {
        $this->container['allTime'] = $allTime;
        return $this;
    }

    /**
    * Gets kernelTimeDetails
    *  kernelTimeDetails
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelTimeDetails
    */
    public function getKernelTimeDetails()
    {
        return $this->container['kernelTimeDetails'];
    }

    /**
    * Sets kernelTimeDetails
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelTimeDetails $kernelTimeDetails kernelTimeDetails
    *
    * @return $this
    */
    public function setKernelTimeDetails($kernelTimeDetails)
    {
        $this->container['kernelTimeDetails'] = $kernelTimeDetails;
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

