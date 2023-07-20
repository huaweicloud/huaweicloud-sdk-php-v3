<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangingTheDelayThresholdRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangingTheDelayThresholdRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delayThresholdInKilobytes  延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delayThresholdInKilobytes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delayThresholdInKilobytes  延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delayThresholdInKilobytes' => 'int32'
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
    * delayThresholdInKilobytes  延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delayThresholdInKilobytes' => 'delay_threshold_in_kilobytes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delayThresholdInKilobytes  延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @var string[]
    */
    protected static $setters = [
            'delayThresholdInKilobytes' => 'setDelayThresholdInKilobytes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delayThresholdInKilobytes  延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @var string[]
    */
    protected static $getters = [
            'delayThresholdInKilobytes' => 'getDelayThresholdInKilobytes'
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
        $this->container['delayThresholdInKilobytes'] = isset($data['delayThresholdInKilobytes']) ? $data['delayThresholdInKilobytes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delayThresholdInKilobytes'] === null) {
            $invalidProperties[] = "'delayThresholdInKilobytes' can't be null";
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
    * Gets delayThresholdInKilobytes
    *  延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @return int
    */
    public function getDelayThresholdInKilobytes()
    {
        return $this->container['delayThresholdInKilobytes'];
    }

    /**
    * Sets delayThresholdInKilobytes
    *
    * @param int $delayThresholdInKilobytes 延时阈值（单位：KB），取值范围为0~10485760。
    *
    * @return $this
    */
    public function setDelayThresholdInKilobytes($delayThresholdInKilobytes)
    {
        $this->container['delayThresholdInKilobytes'] = $delayThresholdInKilobytes;
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

