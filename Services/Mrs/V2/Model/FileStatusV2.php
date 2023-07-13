<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileStatusV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileStatusV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pathSuffix  文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    * owner  文件拥有者。
    * group  文件属组。
    * permission  权限信息。
    * replication  副本数。
    * blockSize  块大小。
    * length  文件长度。
    * type  文件类型： - FILE：文件 - DIRECTORY：目录
    * childrenNum  该目录下的文件条目数。
    * accessTime  文件访问时间。
    * modificationTime  文件修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pathSuffix' => 'string',
            'owner' => 'string',
            'group' => 'string',
            'permission' => 'string',
            'replication' => 'int',
            'blockSize' => 'int',
            'length' => 'int',
            'type' => 'string',
            'childrenNum' => 'int',
            'accessTime' => 'int',
            'modificationTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pathSuffix  文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    * owner  文件拥有者。
    * group  文件属组。
    * permission  权限信息。
    * replication  副本数。
    * blockSize  块大小。
    * length  文件长度。
    * type  文件类型： - FILE：文件 - DIRECTORY：目录
    * childrenNum  该目录下的文件条目数。
    * accessTime  文件访问时间。
    * modificationTime  文件修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pathSuffix' => null,
        'owner' => null,
        'group' => null,
        'permission' => null,
        'replication' => 'int32',
        'blockSize' => 'int32',
        'length' => 'int32',
        'type' => null,
        'childrenNum' => 'int32',
        'accessTime' => 'int64',
        'modificationTime' => 'int64'
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
    * pathSuffix  文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    * owner  文件拥有者。
    * group  文件属组。
    * permission  权限信息。
    * replication  副本数。
    * blockSize  块大小。
    * length  文件长度。
    * type  文件类型： - FILE：文件 - DIRECTORY：目录
    * childrenNum  该目录下的文件条目数。
    * accessTime  文件访问时间。
    * modificationTime  文件修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pathSuffix' => 'path_suffix',
            'owner' => 'owner',
            'group' => 'group',
            'permission' => 'permission',
            'replication' => 'replication',
            'blockSize' => 'block_size',
            'length' => 'length',
            'type' => 'type',
            'childrenNum' => 'children_num',
            'accessTime' => 'access_time',
            'modificationTime' => 'modification_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pathSuffix  文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    * owner  文件拥有者。
    * group  文件属组。
    * permission  权限信息。
    * replication  副本数。
    * blockSize  块大小。
    * length  文件长度。
    * type  文件类型： - FILE：文件 - DIRECTORY：目录
    * childrenNum  该目录下的文件条目数。
    * accessTime  文件访问时间。
    * modificationTime  文件修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'pathSuffix' => 'setPathSuffix',
            'owner' => 'setOwner',
            'group' => 'setGroup',
            'permission' => 'setPermission',
            'replication' => 'setReplication',
            'blockSize' => 'setBlockSize',
            'length' => 'setLength',
            'type' => 'setType',
            'childrenNum' => 'setChildrenNum',
            'accessTime' => 'setAccessTime',
            'modificationTime' => 'setModificationTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pathSuffix  文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    * owner  文件拥有者。
    * group  文件属组。
    * permission  权限信息。
    * replication  副本数。
    * blockSize  块大小。
    * length  文件长度。
    * type  文件类型： - FILE：文件 - DIRECTORY：目录
    * childrenNum  该目录下的文件条目数。
    * accessTime  文件访问时间。
    * modificationTime  文件修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'pathSuffix' => 'getPathSuffix',
            'owner' => 'getOwner',
            'group' => 'getGroup',
            'permission' => 'getPermission',
            'replication' => 'getReplication',
            'blockSize' => 'getBlockSize',
            'length' => 'getLength',
            'type' => 'getType',
            'childrenNum' => 'getChildrenNum',
            'accessTime' => 'getAccessTime',
            'modificationTime' => 'getModificationTime'
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
        $this->container['pathSuffix'] = isset($data['pathSuffix']) ? $data['pathSuffix'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['blockSize'] = isset($data['blockSize']) ? $data['blockSize'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['childrenNum'] = isset($data['childrenNum']) ? $data['childrenNum'] : null;
        $this->container['accessTime'] = isset($data['accessTime']) ? $data['accessTime'] : null;
        $this->container['modificationTime'] = isset($data['modificationTime']) ? $data['modificationTime'] : null;
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
    * Gets pathSuffix
    *  文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    *
    * @return string|null
    */
    public function getPathSuffix()
    {
        return $this->container['pathSuffix'];
    }

    /**
    * Sets pathSuffix
    *
    * @param string|null $pathSuffix 文件在当前目录下的后缀，如获取“/tmp”目录，下面的“/tmp/test”文件，此处path_suffix内容为“test”。
    *
    * @return $this
    */
    public function setPathSuffix($pathSuffix)
    {
        $this->container['pathSuffix'] = $pathSuffix;
        return $this;
    }

    /**
    * Gets owner
    *  文件拥有者。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 文件拥有者。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets group
    *  文件属组。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 文件属组。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets permission
    *  权限信息。
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限信息。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets replication
    *  副本数。
    *
    * @return int|null
    */
    public function getReplication()
    {
        return $this->container['replication'];
    }

    /**
    * Sets replication
    *
    * @param int|null $replication 副本数。
    *
    * @return $this
    */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;
        return $this;
    }

    /**
    * Gets blockSize
    *  块大小。
    *
    * @return int|null
    */
    public function getBlockSize()
    {
        return $this->container['blockSize'];
    }

    /**
    * Sets blockSize
    *
    * @param int|null $blockSize 块大小。
    *
    * @return $this
    */
    public function setBlockSize($blockSize)
    {
        $this->container['blockSize'] = $blockSize;
        return $this;
    }

    /**
    * Gets length
    *  文件长度。
    *
    * @return int|null
    */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
    * Sets length
    *
    * @param int|null $length 文件长度。
    *
    * @return $this
    */
    public function setLength($length)
    {
        $this->container['length'] = $length;
        return $this;
    }

    /**
    * Gets type
    *  文件类型： - FILE：文件 - DIRECTORY：目录
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 文件类型： - FILE：文件 - DIRECTORY：目录
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets childrenNum
    *  该目录下的文件条目数。
    *
    * @return int|null
    */
    public function getChildrenNum()
    {
        return $this->container['childrenNum'];
    }

    /**
    * Sets childrenNum
    *
    * @param int|null $childrenNum 该目录下的文件条目数。
    *
    * @return $this
    */
    public function setChildrenNum($childrenNum)
    {
        $this->container['childrenNum'] = $childrenNum;
        return $this;
    }

    /**
    * Gets accessTime
    *  文件访问时间。
    *
    * @return int|null
    */
    public function getAccessTime()
    {
        return $this->container['accessTime'];
    }

    /**
    * Sets accessTime
    *
    * @param int|null $accessTime 文件访问时间。
    *
    * @return $this
    */
    public function setAccessTime($accessTime)
    {
        $this->container['accessTime'] = $accessTime;
        return $this;
    }

    /**
    * Gets modificationTime
    *  文件修改时间。
    *
    * @return int|null
    */
    public function getModificationTime()
    {
        return $this->container['modificationTime'];
    }

    /**
    * Sets modificationTime
    *
    * @param int|null $modificationTime 文件修改时间。
    *
    * @return $this
    */
    public function setModificationTime($modificationTime)
    {
        $this->container['modificationTime'] = $modificationTime;
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

