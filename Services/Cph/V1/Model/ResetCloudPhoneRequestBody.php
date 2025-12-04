<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetCloudPhoneRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetCloudPhoneRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  云手机镜像。
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'phones' => '\HuaweiCloud\SDK\Cph\V1\Model\PhoneProperty[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  云手机镜像。
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'phones' => null
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
    * imageId  云手机镜像。
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'phones' => 'phones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  云手机镜像。
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'phones' => 'setPhones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  云手机镜像。
    * phones  云手机列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'phones' => 'getPhones'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['phones'] === null) {
            $invalidProperties[] = "'phones' can't be null";
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
    * Gets imageId
    *  云手机镜像。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 云手机镜像。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets phones
    *  云手机列表。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\PhoneProperty[]
    */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
    * Sets phones
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\PhoneProperty[] $phones 云手机列表。
    *
    * @return $this
    */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;
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

