<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KernelModuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KernelModuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  内核模块名称
    * fileName  文件名称
    * version  内核模块版本号
    * srcversion  源码版本号
    * path  文件路径
    * size  文件大小
    * mode  文件权限
    * uid  文件用户ID
    * ctime  文件创建时间
    * mtime  最后修改时间
    * hash  文件哈希
    * desc  内核模块描述信息
    * recordTime  扫描时间
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'fileName' => 'string',
            'version' => 'string',
            'srcversion' => 'string',
            'path' => 'string',
            'size' => 'int',
            'mode' => 'string',
            'uid' => 'int',
            'ctime' => 'int',
            'mtime' => 'int',
            'hash' => 'string',
            'desc' => 'string',
            'recordTime' => 'int',
            'firstScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  内核模块名称
    * fileName  文件名称
    * version  内核模块版本号
    * srcversion  源码版本号
    * path  文件路径
    * size  文件大小
    * mode  文件权限
    * uid  文件用户ID
    * ctime  文件创建时间
    * mtime  最后修改时间
    * hash  文件哈希
    * desc  内核模块描述信息
    * recordTime  扫描时间
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'fileName' => null,
        'version' => null,
        'srcversion' => null,
        'path' => null,
        'size' => 'int64',
        'mode' => null,
        'uid' => 'int32',
        'ctime' => 'int64',
        'mtime' => 'int64',
        'hash' => null,
        'desc' => null,
        'recordTime' => 'int64',
        'firstScanTime' => 'int64'
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
    * name  内核模块名称
    * fileName  文件名称
    * version  内核模块版本号
    * srcversion  源码版本号
    * path  文件路径
    * size  文件大小
    * mode  文件权限
    * uid  文件用户ID
    * ctime  文件创建时间
    * mtime  最后修改时间
    * hash  文件哈希
    * desc  内核模块描述信息
    * recordTime  扫描时间
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'fileName' => 'file_name',
            'version' => 'version',
            'srcversion' => 'srcversion',
            'path' => 'path',
            'size' => 'size',
            'mode' => 'mode',
            'uid' => 'uid',
            'ctime' => 'ctime',
            'mtime' => 'mtime',
            'hash' => 'hash',
            'desc' => 'desc',
            'recordTime' => 'record_time',
            'firstScanTime' => 'first_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  内核模块名称
    * fileName  文件名称
    * version  内核模块版本号
    * srcversion  源码版本号
    * path  文件路径
    * size  文件大小
    * mode  文件权限
    * uid  文件用户ID
    * ctime  文件创建时间
    * mtime  最后修改时间
    * hash  文件哈希
    * desc  内核模块描述信息
    * recordTime  扫描时间
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'fileName' => 'setFileName',
            'version' => 'setVersion',
            'srcversion' => 'setSrcversion',
            'path' => 'setPath',
            'size' => 'setSize',
            'mode' => 'setMode',
            'uid' => 'setUid',
            'ctime' => 'setCtime',
            'mtime' => 'setMtime',
            'hash' => 'setHash',
            'desc' => 'setDesc',
            'recordTime' => 'setRecordTime',
            'firstScanTime' => 'setFirstScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  内核模块名称
    * fileName  文件名称
    * version  内核模块版本号
    * srcversion  源码版本号
    * path  文件路径
    * size  文件大小
    * mode  文件权限
    * uid  文件用户ID
    * ctime  文件创建时间
    * mtime  最后修改时间
    * hash  文件哈希
    * desc  内核模块描述信息
    * recordTime  扫描时间
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'fileName' => 'getFileName',
            'version' => 'getVersion',
            'srcversion' => 'getSrcversion',
            'path' => 'getPath',
            'size' => 'getSize',
            'mode' => 'getMode',
            'uid' => 'getUid',
            'ctime' => 'getCtime',
            'mtime' => 'getMtime',
            'hash' => 'getHash',
            'desc' => 'getDesc',
            'recordTime' => 'getRecordTime',
            'firstScanTime' => 'getFirstScanTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['srcversion'] = isset($data['srcversion']) ? $data['srcversion'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['ctime'] = isset($data['ctime']) ? $data['ctime'] : null;
        $this->container['mtime'] = isset($data['mtime']) ? $data['mtime'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcversion']) && (mb_strlen($this->container['srcversion']) > 64)) {
                $invalidProperties[] = "invalid value for 'srcversion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['srcversion']) && (mb_strlen($this->container['srcversion']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcversion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1024)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 32)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 256)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  内核模块名称
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
    * @param string|null $name 内核模块名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
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
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets version
    *  内核模块版本号
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
    * @param string|null $version 内核模块版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets srcversion
    *  源码版本号
    *
    * @return string|null
    */
    public function getSrcversion()
    {
        return $this->container['srcversion'];
    }

    /**
    * Sets srcversion
    *
    * @param string|null $srcversion 源码版本号
    *
    * @return $this
    */
    public function setSrcversion($srcversion)
    {
        $this->container['srcversion'] = $srcversion;
        return $this;
    }

    /**
    * Gets path
    *  文件路径
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
    * @param string|null $path 文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets size
    *  文件大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 文件大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets mode
    *  文件权限
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
    * @param string|null $mode 文件权限
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
    *  文件用户ID
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
    * @param int|null $uid 文件用户ID
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets ctime
    *  文件创建时间
    *
    * @return int|null
    */
    public function getCtime()
    {
        return $this->container['ctime'];
    }

    /**
    * Sets ctime
    *
    * @param int|null $ctime 文件创建时间
    *
    * @return $this
    */
    public function setCtime($ctime)
    {
        $this->container['ctime'] = $ctime;
        return $this;
    }

    /**
    * Gets mtime
    *  最后修改时间
    *
    * @return int|null
    */
    public function getMtime()
    {
        return $this->container['mtime'];
    }

    /**
    * Sets mtime
    *
    * @param int|null $mtime 最后修改时间
    *
    * @return $this
    */
    public function setMtime($mtime)
    {
        $this->container['mtime'] = $mtime;
        return $this;
    }

    /**
    * Gets hash
    *  文件哈希
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
    * @param string|null $hash 文件哈希
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets desc
    *  内核模块描述信息
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 内核模块描述信息
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets recordTime
    *  扫描时间
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
    * @param int|null $recordTime 扫描时间
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  首次扫描时间
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime 首次扫描时间
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
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

