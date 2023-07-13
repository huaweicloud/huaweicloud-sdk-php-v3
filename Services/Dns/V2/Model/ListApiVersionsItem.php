<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApiVersionsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApiVersionsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本号。
    * links  指向当前版本的url。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\LinksItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本号。
    * links  指向当前版本的url。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'id' => null,
        'links' => null
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
    * status  版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本号。
    * links  指向当前版本的url。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'id' => 'id',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本号。
    * links  指向当前版本的url。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'id' => 'setId',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本号。
    * links  指向当前版本的url。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'id' => 'getId',
            'links' => 'getLinks'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    * Gets status
    *  版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 版本状态，包含：  CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还在继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  版本号。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 版本号。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *  指向当前版本的url。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\LinksItem[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\LinksItem[]|null $links 指向当前版本的url。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
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

