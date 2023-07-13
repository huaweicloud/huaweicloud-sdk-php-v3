<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetadatasRespSchemaList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetadatasResp_schema_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  元数据 ID。
    * name  元数据名称。
    * startTime  元数据创建时间
    * lastUpdateTime  元数据最后更新时间
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * description  元数据 描述。
    * metadataPath  元数据对应路径。
    * status  元数据是否可用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'startTime' => 'string',
            'lastUpdateTime' => 'string',
            'encrypted' => 'bool',
            'masterKeyName' => 'string',
            'masterKeyId' => 'string',
            'description' => 'string',
            'metadataPath' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  元数据 ID。
    * name  元数据名称。
    * startTime  元数据创建时间
    * lastUpdateTime  元数据最后更新时间
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * description  元数据 描述。
    * metadataPath  元数据对应路径。
    * status  元数据是否可用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'startTime' => null,
        'lastUpdateTime' => null,
        'encrypted' => null,
        'masterKeyName' => null,
        'masterKeyId' => null,
        'description' => null,
        'metadataPath' => null,
        'status' => null
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
    * id  元数据 ID。
    * name  元数据名称。
    * startTime  元数据创建时间
    * lastUpdateTime  元数据最后更新时间
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * description  元数据 描述。
    * metadataPath  元数据对应路径。
    * status  元数据是否可用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'startTime' => 'start_time',
            'lastUpdateTime' => 'last_update_time',
            'encrypted' => 'encrypted',
            'masterKeyName' => 'master_key_name',
            'masterKeyId' => 'master_key_id',
            'description' => 'description',
            'metadataPath' => 'metadata_path',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  元数据 ID。
    * name  元数据名称。
    * startTime  元数据创建时间
    * lastUpdateTime  元数据最后更新时间
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * description  元数据 描述。
    * metadataPath  元数据对应路径。
    * status  元数据是否可用。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'startTime' => 'setStartTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'encrypted' => 'setEncrypted',
            'masterKeyName' => 'setMasterKeyName',
            'masterKeyId' => 'setMasterKeyId',
            'description' => 'setDescription',
            'metadataPath' => 'setMetadataPath',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  元数据 ID。
    * name  元数据名称。
    * startTime  元数据创建时间
    * lastUpdateTime  元数据最后更新时间
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * description  元数据 描述。
    * metadataPath  元数据对应路径。
    * status  元数据是否可用。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'startTime' => 'getStartTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'encrypted' => 'getEncrypted',
            'masterKeyName' => 'getMasterKeyName',
            'masterKeyId' => 'getMasterKeyId',
            'description' => 'getDescription',
            'metadataPath' => 'getMetadataPath',
            'status' => 'getStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['metadataPath'] = isset($data['metadataPath']) ? $data['metadataPath'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets id
    *  元数据 ID。
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
    * @param string|null $id 元数据 ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  元数据名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 元数据名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets startTime
    *  元数据创建时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 元数据创建时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  元数据最后更新时间
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 元数据最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets encrypted
    *  元数据是否加密
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 元数据是否加密
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets masterKeyName
    *  秘钥名称
    *
    * @return string|null
    */
    public function getMasterKeyName()
    {
        return $this->container['masterKeyName'];
    }

    /**
    * Sets masterKeyName
    *
    * @param string|null $masterKeyName 秘钥名称
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets masterKeyId
    *  秘钥id
    *
    * @return string|null
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string|null $masterKeyId 秘钥id
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
        return $this;
    }

    /**
    * Gets description
    *  元数据 描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 元数据 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets metadataPath
    *  元数据对应路径。
    *
    * @return string|null
    */
    public function getMetadataPath()
    {
        return $this->container['metadataPath'];
    }

    /**
    * Sets metadataPath
    *
    * @param string|null $metadataPath 元数据对应路径。
    *
    * @return $this
    */
    public function setMetadataPath($metadataPath)
    {
        $this->container['metadataPath'] = $metadataPath;
        return $this;
    }

    /**
    * Gets status
    *  元数据是否可用。
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
    * @param string|null $status 元数据是否可用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

