<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVolumeTransferDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVolumeTransferDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authKey  云硬盘过户的身份认证密钥。
    * createdAt  云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * id  云硬盘过户记录的ID。
    * links  云硬盘过户记录的链接。
    * name  云硬盘过户记录的名称。
    * volumeId  云硬盘ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authKey' => 'string',
            'createdAt' => 'string',
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Evs\V2\Model\Link[]',
            'name' => 'string',
            'volumeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authKey  云硬盘过户的身份认证密钥。
    * createdAt  云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * id  云硬盘过户记录的ID。
    * links  云硬盘过户记录的链接。
    * name  云硬盘过户记录的名称。
    * volumeId  云硬盘ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authKey' => null,
        'createdAt' => null,
        'id' => null,
        'links' => null,
        'name' => null,
        'volumeId' => null
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
    * authKey  云硬盘过户的身份认证密钥。
    * createdAt  云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * id  云硬盘过户记录的ID。
    * links  云硬盘过户记录的链接。
    * name  云硬盘过户记录的名称。
    * volumeId  云硬盘ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authKey' => 'auth_key',
            'createdAt' => 'created_at',
            'id' => 'id',
            'links' => 'links',
            'name' => 'name',
            'volumeId' => 'volume_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authKey  云硬盘过户的身份认证密钥。
    * createdAt  云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * id  云硬盘过户记录的ID。
    * links  云硬盘过户记录的链接。
    * name  云硬盘过户记录的名称。
    * volumeId  云硬盘ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'authKey' => 'setAuthKey',
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'links' => 'setLinks',
            'name' => 'setName',
            'volumeId' => 'setVolumeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authKey  云硬盘过户的身份认证密钥。
    * createdAt  云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * id  云硬盘过户记录的ID。
    * links  云硬盘过户记录的链接。
    * name  云硬盘过户记录的名称。
    * volumeId  云硬盘ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'authKey' => 'getAuthKey',
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
            'links' => 'getLinks',
            'name' => 'getName',
            'volumeId' => 'getVolumeId'
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
        $this->container['authKey'] = isset($data['authKey']) ? $data['authKey'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authKey'] === null) {
            $invalidProperties[] = "'authKey' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
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
    * Gets authKey
    *  云硬盘过户的身份认证密钥。
    *
    * @return string
    */
    public function getAuthKey()
    {
        return $this->container['authKey'];
    }

    /**
    * Sets authKey
    *
    * @param string $authKey 云硬盘过户的身份认证密钥。
    *
    * @return $this
    */
    public function setAuthKey($authKey)
    {
        $this->container['authKey'] = $authKey;
        return $this;
    }

    /**
    * Gets createdAt
    *  云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 云硬盘过户记录的创建时间。  时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets id
    *  云硬盘过户记录的ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 云硬盘过户记录的ID。
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
    *  云硬盘过户记录的链接。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\Link[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\Link[] $links 云硬盘过户记录的链接。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets name
    *  云硬盘过户记录的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 云硬盘过户记录的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets volumeId
    *  云硬盘ID。
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId 云硬盘ID。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
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

