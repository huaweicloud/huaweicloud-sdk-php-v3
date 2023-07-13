<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLayoutResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLayoutResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * returnCode  结果码。 * 0：成功 * 非0：失败
    * returnDesc  结果描述。 * Success：成功 * 其他：失败原因
    * picLayouts  多画面布局。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'returnCode' => 'int',
            'returnDesc' => 'string',
            'picLayouts' => '\HuaweiCloud\SDK\Meeting\V1\Model\RestPicLayout[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * returnCode  结果码。 * 0：成功 * 非0：失败
    * returnDesc  结果描述。 * Success：成功 * 其他：失败原因
    * picLayouts  多画面布局。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'returnCode' => 'int32',
        'returnDesc' => null,
        'picLayouts' => null
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
    * returnCode  结果码。 * 0：成功 * 非0：失败
    * returnDesc  结果描述。 * Success：成功 * 其他：失败原因
    * picLayouts  多画面布局。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'returnCode' => 'returnCode',
            'returnDesc' => 'returnDesc',
            'picLayouts' => 'picLayouts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * returnCode  结果码。 * 0：成功 * 非0：失败
    * returnDesc  结果描述。 * Success：成功 * 其他：失败原因
    * picLayouts  多画面布局。
    *
    * @var string[]
    */
    protected static $setters = [
            'returnCode' => 'setReturnCode',
            'returnDesc' => 'setReturnDesc',
            'picLayouts' => 'setPicLayouts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * returnCode  结果码。 * 0：成功 * 非0：失败
    * returnDesc  结果描述。 * Success：成功 * 其他：失败原因
    * picLayouts  多画面布局。
    *
    * @var string[]
    */
    protected static $getters = [
            'returnCode' => 'getReturnCode',
            'returnDesc' => 'getReturnDesc',
            'picLayouts' => 'getPicLayouts'
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
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnDesc'] = isset($data['returnDesc']) ? $data['returnDesc'] : null;
        $this->container['picLayouts'] = isset($data['picLayouts']) ? $data['picLayouts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['returnCode']) && ($this->container['returnCode'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'returnCode', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['returnCode']) && ($this->container['returnCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'returnCode', must be bigger than or equal to 0.";
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
    * Gets returnCode
    *  结果码。 * 0：成功 * 非0：失败
    *
    * @return int|null
    */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
    * Sets returnCode
    *
    * @param int|null $returnCode 结果码。 * 0：成功 * 非0：失败
    *
    * @return $this
    */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;
        return $this;
    }

    /**
    * Gets returnDesc
    *  结果描述。 * Success：成功 * 其他：失败原因
    *
    * @return string|null
    */
    public function getReturnDesc()
    {
        return $this->container['returnDesc'];
    }

    /**
    * Sets returnDesc
    *
    * @param string|null $returnDesc 结果描述。 * Success：成功 * 其他：失败原因
    *
    * @return $this
    */
    public function setReturnDesc($returnDesc)
    {
        $this->container['returnDesc'] = $returnDesc;
        return $this;
    }

    /**
    * Gets picLayouts
    *  多画面布局。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RestPicLayout[]|null
    */
    public function getPicLayouts()
    {
        return $this->container['picLayouts'];
    }

    /**
    * Sets picLayouts
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RestPicLayout[]|null $picLayouts 多画面布局。
    *
    * @return $this
    */
    public function setPicLayouts($picLayouts)
    {
        $this->container['picLayouts'] = $picLayouts;
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

