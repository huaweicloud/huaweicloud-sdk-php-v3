<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetachServerVolumeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetachServerVolumeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  云服务器ID。
    * volumeId  磁盘ID。
    * deleteFlag  是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'volumeId' => 'string',
            'deleteFlag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  云服务器ID。
    * volumeId  磁盘ID。
    * deleteFlag  是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'volumeId' => null,
        'deleteFlag' => null
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
    * serverId  云服务器ID。
    * volumeId  磁盘ID。
    * deleteFlag  是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'volumeId' => 'volume_id',
            'deleteFlag' => 'delete_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  云服务器ID。
    * volumeId  磁盘ID。
    * deleteFlag  是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'volumeId' => 'setVolumeId',
            'deleteFlag' => 'setDeleteFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  云服务器ID。
    * volumeId  磁盘ID。
    * deleteFlag  是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'volumeId' => 'getVolumeId',
            'deleteFlag' => 'getDeleteFlag'
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
    const DELETE_FLAG__0 = '0';
    const DELETE_FLAG__1 = '1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteFlagAllowableValues()
    {
        return [
            self::DELETE_FLAG__0,
            self::DELETE_FLAG__1,
        ];
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['deleteFlag'] = isset($data['deleteFlag']) ? $data['deleteFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
        }
            $allowedValues = $this->getDeleteFlagAllowableValues();
                if (!is_null($this->container['deleteFlag']) && !in_array($this->container['deleteFlag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteFlag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets serverId
    *  云服务器ID。
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 云服务器ID。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets volumeId
    *  磁盘ID。
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
    * @param string $volumeId 磁盘ID。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets deleteFlag
    *  是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @return string|null
    */
    public function getDeleteFlag()
    {
        return $this->container['deleteFlag'];
    }

    /**
    * Sets deleteFlag
    *
    * @param string|null $deleteFlag 是否强制卸载数据盘。  - 是，值为“1”。  - 否，值为“0”。  默认值为0。
    *
    * @return $this
    */
    public function setDeleteFlag($deleteFlag)
    {
        $this->container['deleteFlag'] = $deleteFlag;
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

