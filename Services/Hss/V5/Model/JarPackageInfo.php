<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JarPackageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JarPackageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    * catalogue  **参数解释**: 分类 **取值范围**: -util：默认分类
    * version  **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    * mode  **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    * pid  **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    * recordTime  **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'fileType' => 'string',
            'catalogue' => 'string',
            'version' => 'string',
            'path' => 'string',
            'mode' => 'string',
            'uid' => 'int',
            'hash' => 'string',
            'pid' => 'int',
            'procPath' => 'string',
            'recordTime' => 'int',
            'containerId' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    * catalogue  **参数解释**: 分类 **取值范围**: -util：默认分类
    * version  **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    * mode  **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    * pid  **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    * recordTime  **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'fileType' => null,
        'catalogue' => null,
        'version' => null,
        'path' => null,
        'mode' => null,
        'uid' => null,
        'hash' => null,
        'pid' => null,
        'procPath' => null,
        'recordTime' => 'int64',
        'containerId' => null,
        'containerName' => null
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
    * fileName  **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    * catalogue  **参数解释**: 分类 **取值范围**: -util：默认分类
    * version  **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    * mode  **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    * pid  **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    * recordTime  **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'catalogue' => 'catalogue',
            'version' => 'version',
            'path' => 'path',
            'mode' => 'mode',
            'uid' => 'uid',
            'hash' => 'hash',
            'pid' => 'pid',
            'procPath' => 'proc_path',
            'recordTime' => 'record_time',
            'containerId' => 'container_id',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    * catalogue  **参数解释**: 分类 **取值范围**: -util：默认分类
    * version  **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    * mode  **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    * pid  **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    * recordTime  **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'catalogue' => 'setCatalogue',
            'version' => 'setVersion',
            'path' => 'setPath',
            'mode' => 'setMode',
            'uid' => 'setUid',
            'hash' => 'setHash',
            'pid' => 'setPid',
            'procPath' => 'setProcPath',
            'recordTime' => 'setRecordTime',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    * fileType  **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    * catalogue  **参数解释**: 分类 **取值范围**: -util：默认分类
    * version  **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    * path  **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    * mode  **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    * uid  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    * hash  **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    * pid  **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    * procPath  **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    * recordTime  **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * containerId  **参数解释**: 容器id **取值范围**: 字符长度1-128
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'catalogue' => 'getCatalogue',
            'version' => 'getVersion',
            'path' => 'getPath',
            'mode' => 'getMode',
            'uid' => 'getUid',
            'hash' => 'getHash',
            'pid' => 'getPid',
            'procPath' => 'getProcPath',
            'recordTime' => 'getRecordTime',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['procPath'] = isset($data['procPath']) ? $data['procPath'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
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
    * Gets fileName
    *  **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName **参数解释**: 中间件名称 **取值范围**: 字符长度1-256
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType **参数解释**: 中间件类型 **取值范围**: -jar：jar包 -python：python软件包 -npm：npm软件包
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets catalogue
    *  **参数解释**: 分类 **取值范围**: -util：默认分类
    *
    * @return string|null
    */
    public function getCatalogue()
    {
        return $this->container['catalogue'];
    }

    /**
    * Sets catalogue
    *
    * @param string|null $catalogue **参数解释**: 分类 **取值范围**: -util：默认分类
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 中间件版本 **取值范围**: 字符长度1-512
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 中间件路径 **取值范围**: 字符长度1-512
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**: 中间件文件权限 **取值范围**: 字符长度1-32
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets uid
    *  **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param int|null $uid **参数解释**: uid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets hash
    *  **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash **参数解释**: 中间件文件hash **取值范围**: 字符长度1-64
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param int|null $pid **参数解释**: 中间件进程ID **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets procPath
    *  **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    *
    * @return string|null
    */
    public function getProcPath()
    {
        return $this->container['procPath'];
    }

    /**
    * Sets procPath
    *
    * @param string|null $procPath **参数解释**: 中间件进程路径 **取值范围**: 字符长度1-1024
    *
    * @return $this
    */
    public function setProcPath($procPath)
    {
        $this->container['procPath'] = $procPath;
        return $this;
    }

    /**
    * Gets recordTime
    *  **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return int|null
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param int|null $recordTime **参数解释**: 中间件扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器id **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId **参数解释**: 容器id **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**: 容器名称 **取值范围**: 字符长度1-256
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
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

