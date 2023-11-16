<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpBindingBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpBindingBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageId  防护包id
    * idList  防护ip的id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageId' => 'string',
            'idList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageId  防护包id
    * idList  防护ip的id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageId' => null,
        'idList' => null
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
    * packageId  防护包id
    * idList  防护ip的id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageId' => 'package_id',
            'idList' => 'id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageId  防护包id
    * idList  防护ip的id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'packageId' => 'setPackageId',
            'idList' => 'setIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageId  防护包id
    * idList  防护ip的id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'packageId' => 'getPackageId',
            'idList' => 'getIdList'
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
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['idList'] = isset($data['idList']) ? $data['idList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['packageId'] === null) {
            $invalidProperties[] = "'packageId' can't be null";
        }
            if ((mb_strlen($this->container['packageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['packageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['idList'] === null) {
            $invalidProperties[] = "'idList' can't be null";
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
    * Gets packageId
    *  防护包id
    *
    * @return string
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string $packageId 防护包id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets idList
    *  防护ip的id列表
    *
    * @return string[]
    */
    public function getIdList()
    {
        return $this->container['idList'];
    }

    /**
    * Sets idList
    *
    * @param string[] $idList 防护ip的id列表
    *
    * @return $this
    */
    public function setIdList($idList)
    {
        $this->container['idList'] = $idList;
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

