<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SrFlavorResizeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SrFlavorResizeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * feFlavorId  FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    * beFlavorId  BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'feFlavorId' => 'string',
            'beFlavorId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * feFlavorId  FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    * beFlavorId  BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'feFlavorId' => null,
        'beFlavorId' => null
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
    * feFlavorId  FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    * beFlavorId  BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'feFlavorId' => 'fe_flavor_id',
            'beFlavorId' => 'be_flavor_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * feFlavorId  FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    * beFlavorId  BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @var string[]
    */
    protected static $setters = [
            'feFlavorId' => 'setFeFlavorId',
            'beFlavorId' => 'setBeFlavorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * feFlavorId  FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    * beFlavorId  BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @var string[]
    */
    protected static $getters = [
            'feFlavorId' => 'getFeFlavorId',
            'beFlavorId' => 'getBeFlavorId'
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
        $this->container['feFlavorId'] = isset($data['feFlavorId']) ? $data['feFlavorId'] : null;
        $this->container['beFlavorId'] = isset($data['beFlavorId']) ? $data['beFlavorId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets feFlavorId
    *  FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @return string|null
    */
    public function getFeFlavorId()
    {
        return $this->container['feFlavorId'];
    }

    /**
    * Sets feFlavorId
    *
    * @param string|null $feFlavorId FE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @return $this
    */
    public function setFeFlavorId($feFlavorId)
    {
        $this->container['feFlavorId'] = $feFlavorId;
        return $this;
    }

    /**
    * Gets beFlavorId
    *  BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @return string|null
    */
    public function getBeFlavorId()
    {
        return $this->container['beFlavorId'];
    }

    /**
    * Sets beFlavorId
    *
    * @param string|null $beFlavorId BE节点CPU、内存规格ID。填空或者不填视为规格ID与原规格ID保持一致。
    *
    * @return $this
    */
    public function setBeFlavorId($beFlavorId)
    {
        $this->container['beFlavorId'] = $beFlavorId;
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

