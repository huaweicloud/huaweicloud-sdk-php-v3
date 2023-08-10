<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetachBatchSharedbwReqPublicips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetachBatchSharedbwReq_publicips';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicipId  - 功能说明：EIP ID
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicipId' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Eip\V3\Model\DetachSharedbwDict'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicipId  - 功能说明：EIP ID
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicipId' => null,
        'bandwidth' => null
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
    * publicipId  - 功能说明：EIP ID
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicipId' => 'publicip_id',
            'bandwidth' => 'bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicipId  - 功能说明：EIP ID
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $setters = [
            'publicipId' => 'setPublicipId',
            'bandwidth' => 'setBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicipId  - 功能说明：EIP ID
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $getters = [
            'publicipId' => 'getPublicipId',
            'bandwidth' => 'getBandwidth'
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
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publicipId'] === null) {
            $invalidProperties[] = "'publicipId' can't be null";
        }
            if ((mb_strlen($this->container['publicipId']) > 255)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['publicipId']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
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
    * Gets publicipId
    *  - 功能说明：EIP ID
    *
    * @return string
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string $publicipId - 功能说明：EIP ID
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\DetachSharedbwDict
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\DetachSharedbwDict $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
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
