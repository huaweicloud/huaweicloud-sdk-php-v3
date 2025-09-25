<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceWaitEvenTimeDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceWaitEvenTimeDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataIoTime  dataIoTime
    * lockTime  lockTime
    * lwlockTime  lwlockTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataIoTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DataIoTime',
            'lockTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LockTime',
            'lwlockTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LwlockTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataIoTime  dataIoTime
    * lockTime  lockTime
    * lwlockTime  lwlockTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataIoTime' => null,
        'lockTime' => null,
        'lwlockTime' => null
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
    * dataIoTime  dataIoTime
    * lockTime  lockTime
    * lwlockTime  lwlockTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataIoTime' => 'data_io_time',
            'lockTime' => 'lock_time',
            'lwlockTime' => 'lwlock_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataIoTime  dataIoTime
    * lockTime  lockTime
    * lwlockTime  lwlockTime
    *
    * @var string[]
    */
    protected static $setters = [
            'dataIoTime' => 'setDataIoTime',
            'lockTime' => 'setLockTime',
            'lwlockTime' => 'setLwlockTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataIoTime  dataIoTime
    * lockTime  lockTime
    * lwlockTime  lwlockTime
    *
    * @var string[]
    */
    protected static $getters = [
            'dataIoTime' => 'getDataIoTime',
            'lockTime' => 'getLockTime',
            'lwlockTime' => 'getLwlockTime'
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
        $this->container['dataIoTime'] = isset($data['dataIoTime']) ? $data['dataIoTime'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['lwlockTime'] = isset($data['lwlockTime']) ? $data['lwlockTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataIoTime'] === null) {
            $invalidProperties[] = "'dataIoTime' can't be null";
        }
        if ($this->container['lockTime'] === null) {
            $invalidProperties[] = "'lockTime' can't be null";
        }
        if ($this->container['lwlockTime'] === null) {
            $invalidProperties[] = "'lwlockTime' can't be null";
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
    * Gets dataIoTime
    *  dataIoTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DataIoTime
    */
    public function getDataIoTime()
    {
        return $this->container['dataIoTime'];
    }

    /**
    * Sets dataIoTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DataIoTime $dataIoTime dataIoTime
    *
    * @return $this
    */
    public function setDataIoTime($dataIoTime)
    {
        $this->container['dataIoTime'] = $dataIoTime;
        return $this;
    }

    /**
    * Gets lockTime
    *  lockTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LockTime
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LockTime $lockTime lockTime
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets lwlockTime
    *  lwlockTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LwlockTime
    */
    public function getLwlockTime()
    {
        return $this->container['lwlockTime'];
    }

    /**
    * Sets lwlockTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LwlockTime $lwlockTime lwlockTime
    *
    * @return $this
    */
    public function setLwlockTime($lwlockTime)
    {
        $this->container['lwlockTime'] = $lwlockTime;
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

