<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBindingGeipRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBindingGeipRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gcbId  带宽包id
    * globalEips  globalEips
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gcbId' => 'string',
            'globalEips' => '\HuaweiCloud\SDK\Dc\V3\Model\BindingGeipBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gcbId  带宽包id
    * globalEips  globalEips
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gcbId' => null,
        'globalEips' => null
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
    * gcbId  带宽包id
    * globalEips  globalEips
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gcbId' => 'gcb_id',
            'globalEips' => 'global_eips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gcbId  带宽包id
    * globalEips  globalEips
    *
    * @var string[]
    */
    protected static $setters = [
            'gcbId' => 'setGcbId',
            'globalEips' => 'setGlobalEips'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gcbId  带宽包id
    * globalEips  globalEips
    *
    * @var string[]
    */
    protected static $getters = [
            'gcbId' => 'getGcbId',
            'globalEips' => 'getGlobalEips'
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
        $this->container['gcbId'] = isset($data['gcbId']) ? $data['gcbId'] : null;
        $this->container['globalEips'] = isset($data['globalEips']) ? $data['globalEips'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['gcbId']) && (mb_strlen($this->container['gcbId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gcbId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gcbId']) && (mb_strlen($this->container['gcbId']) < 0)) {
                $invalidProperties[] = "invalid value for 'gcbId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gcbId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['gcbId'])) {
                $invalidProperties[] = "invalid value for 'gcbId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets gcbId
    *  带宽包id
    *
    * @return string|null
    */
    public function getGcbId()
    {
        return $this->container['gcbId'];
    }

    /**
    * Sets gcbId
    *
    * @param string|null $gcbId 带宽包id
    *
    * @return $this
    */
    public function setGcbId($gcbId)
    {
        $this->container['gcbId'] = $gcbId;
        return $this;
    }

    /**
    * Gets globalEips
    *  globalEips
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\BindingGeipBody[]|null
    */
    public function getGlobalEips()
    {
        return $this->container['globalEips'];
    }

    /**
    * Sets globalEips
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\BindingGeipBody[]|null $globalEips globalEips
    *
    * @return $this
    */
    public function setGlobalEips($globalEips)
    {
        $this->container['globalEips'] = $globalEips;
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

