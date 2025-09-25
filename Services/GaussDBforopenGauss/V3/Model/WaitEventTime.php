<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WaitEventTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WaitEventTime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codeWaitEventTime  codeWaitEventTime
    * resourceWaitEventTime  resourceWaitEventTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codeWaitEventTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CodeWaitEventTime',
            'resourceWaitEventTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceWaitEventTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codeWaitEventTime  codeWaitEventTime
    * resourceWaitEventTime  resourceWaitEventTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codeWaitEventTime' => null,
        'resourceWaitEventTime' => null
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
    * codeWaitEventTime  codeWaitEventTime
    * resourceWaitEventTime  resourceWaitEventTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codeWaitEventTime' => 'code_wait_event_time',
            'resourceWaitEventTime' => 'resource_wait_event_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codeWaitEventTime  codeWaitEventTime
    * resourceWaitEventTime  resourceWaitEventTime
    *
    * @var string[]
    */
    protected static $setters = [
            'codeWaitEventTime' => 'setCodeWaitEventTime',
            'resourceWaitEventTime' => 'setResourceWaitEventTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codeWaitEventTime  codeWaitEventTime
    * resourceWaitEventTime  resourceWaitEventTime
    *
    * @var string[]
    */
    protected static $getters = [
            'codeWaitEventTime' => 'getCodeWaitEventTime',
            'resourceWaitEventTime' => 'getResourceWaitEventTime'
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
        $this->container['codeWaitEventTime'] = isset($data['codeWaitEventTime']) ? $data['codeWaitEventTime'] : null;
        $this->container['resourceWaitEventTime'] = isset($data['resourceWaitEventTime']) ? $data['resourceWaitEventTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['codeWaitEventTime'] === null) {
            $invalidProperties[] = "'codeWaitEventTime' can't be null";
        }
        if ($this->container['resourceWaitEventTime'] === null) {
            $invalidProperties[] = "'resourceWaitEventTime' can't be null";
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
    * Gets codeWaitEventTime
    *  codeWaitEventTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CodeWaitEventTime
    */
    public function getCodeWaitEventTime()
    {
        return $this->container['codeWaitEventTime'];
    }

    /**
    * Sets codeWaitEventTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CodeWaitEventTime $codeWaitEventTime codeWaitEventTime
    *
    * @return $this
    */
    public function setCodeWaitEventTime($codeWaitEventTime)
    {
        $this->container['codeWaitEventTime'] = $codeWaitEventTime;
        return $this;
    }

    /**
    * Gets resourceWaitEventTime
    *  resourceWaitEventTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceWaitEventTime
    */
    public function getResourceWaitEventTime()
    {
        return $this->container['resourceWaitEventTime'];
    }

    /**
    * Sets resourceWaitEventTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceWaitEventTime $resourceWaitEventTime resourceWaitEventTime
    *
    * @return $this
    */
    public function setResourceWaitEventTime($resourceWaitEventTime)
    {
        $this->container['resourceWaitEventTime'] = $resourceWaitEventTime;
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

