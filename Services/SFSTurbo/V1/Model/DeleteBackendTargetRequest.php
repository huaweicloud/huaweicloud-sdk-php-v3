<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteBackendTargetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteBackendTargetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareId  文件系统ID
    * targetId  绑定关系ID
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareId' => 'string',
            'targetId' => 'string',
            'deleteDataInFileSystem' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareId  文件系统ID
    * targetId  绑定关系ID
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareId' => null,
        'targetId' => null,
        'deleteDataInFileSystem' => null
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
    * shareId  文件系统ID
    * targetId  绑定关系ID
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareId' => 'share_id',
            'targetId' => 'target_id',
            'deleteDataInFileSystem' => 'delete_data_in_file_system'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareId  文件系统ID
    * targetId  绑定关系ID
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'shareId' => 'setShareId',
            'targetId' => 'setTargetId',
            'deleteDataInFileSystem' => 'setDeleteDataInFileSystem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareId  文件系统ID
    * targetId  绑定关系ID
    * deleteDataInFileSystem  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'shareId' => 'getShareId',
            'targetId' => 'getTargetId',
            'deleteDataInFileSystem' => 'getDeleteDataInFileSystem'
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
        $this->container['shareId'] = isset($data['shareId']) ? $data['shareId'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['deleteDataInFileSystem'] = isset($data['deleteDataInFileSystem']) ? $data['deleteDataInFileSystem'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shareId'] === null) {
            $invalidProperties[] = "'shareId' can't be null";
        }
        if ($this->container['targetId'] === null) {
            $invalidProperties[] = "'targetId' can't be null";
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
    * Gets shareId
    *  文件系统ID
    *
    * @return string
    */
    public function getShareId()
    {
        return $this->container['shareId'];
    }

    /**
    * Sets shareId
    *
    * @param string $shareId 文件系统ID
    *
    * @return $this
    */
    public function setShareId($shareId)
    {
        $this->container['shareId'] = $shareId;
        return $this;
    }

    /**
    * Gets targetId
    *  绑定关系ID
    *
    * @return string
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string $targetId 绑定关系ID
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets deleteDataInFileSystem
    *  删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @return bool|null
    */
    public function getDeleteDataInFileSystem()
    {
        return $this->container['deleteDataInFileSystem'];
    }

    /**
    * Sets deleteDataInFileSystem
    *
    * @param bool|null $deleteDataInFileSystem 删除后端存储时是否同时删除文件系统内的联动目录及其数据文件，默认为 false。数据删除后无法恢复，请谨慎操作。
    *
    * @return $this
    */
    public function setDeleteDataInFileSystem($deleteDataInFileSystem)
    {
        $this->container['deleteDataInFileSystem'] = $deleteDataInFileSystem;
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

