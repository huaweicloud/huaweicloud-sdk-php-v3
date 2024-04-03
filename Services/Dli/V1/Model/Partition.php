<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Partition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Partition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partitionName  分区名
    * createTime  创建时间
    * lastAccessTime  最后改动时间
    * locations  路径，外表显示，内表不显示
    * lastDdlTime  最后一个ddl语句执行时间，时间戳单位：秒
    * numRows  该分区数据总行数
    * numFiles  分区文件数
    * totalSize  该分区总的数据大小（单位：字节）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partitionName' => 'string',
            'createTime' => 'int',
            'lastAccessTime' => 'int',
            'locations' => 'string[]',
            'lastDdlTime' => 'int',
            'numRows' => 'int',
            'numFiles' => 'int',
            'totalSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partitionName  分区名
    * createTime  创建时间
    * lastAccessTime  最后改动时间
    * locations  路径，外表显示，内表不显示
    * lastDdlTime  最后一个ddl语句执行时间，时间戳单位：秒
    * numRows  该分区数据总行数
    * numFiles  分区文件数
    * totalSize  该分区总的数据大小（单位：字节）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partitionName' => null,
        'createTime' => 'int64',
        'lastAccessTime' => 'int64',
        'locations' => null,
        'lastDdlTime' => 'int64',
        'numRows' => 'int64',
        'numFiles' => 'int64',
        'totalSize' => 'int64'
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
    * partitionName  分区名
    * createTime  创建时间
    * lastAccessTime  最后改动时间
    * locations  路径，外表显示，内表不显示
    * lastDdlTime  最后一个ddl语句执行时间，时间戳单位：秒
    * numRows  该分区数据总行数
    * numFiles  分区文件数
    * totalSize  该分区总的数据大小（单位：字节）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partitionName' => 'partition_name',
            'createTime' => 'create_time',
            'lastAccessTime' => 'last_access_time',
            'locations' => 'locations',
            'lastDdlTime' => 'last_ddl_time',
            'numRows' => 'num_rows',
            'numFiles' => 'num_files',
            'totalSize' => 'total_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partitionName  分区名
    * createTime  创建时间
    * lastAccessTime  最后改动时间
    * locations  路径，外表显示，内表不显示
    * lastDdlTime  最后一个ddl语句执行时间，时间戳单位：秒
    * numRows  该分区数据总行数
    * numFiles  分区文件数
    * totalSize  该分区总的数据大小（单位：字节）
    *
    * @var string[]
    */
    protected static $setters = [
            'partitionName' => 'setPartitionName',
            'createTime' => 'setCreateTime',
            'lastAccessTime' => 'setLastAccessTime',
            'locations' => 'setLocations',
            'lastDdlTime' => 'setLastDdlTime',
            'numRows' => 'setNumRows',
            'numFiles' => 'setNumFiles',
            'totalSize' => 'setTotalSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partitionName  分区名
    * createTime  创建时间
    * lastAccessTime  最后改动时间
    * locations  路径，外表显示，内表不显示
    * lastDdlTime  最后一个ddl语句执行时间，时间戳单位：秒
    * numRows  该分区数据总行数
    * numFiles  分区文件数
    * totalSize  该分区总的数据大小（单位：字节）
    *
    * @var string[]
    */
    protected static $getters = [
            'partitionName' => 'getPartitionName',
            'createTime' => 'getCreateTime',
            'lastAccessTime' => 'getLastAccessTime',
            'locations' => 'getLocations',
            'lastDdlTime' => 'getLastDdlTime',
            'numRows' => 'getNumRows',
            'numFiles' => 'getNumFiles',
            'totalSize' => 'getTotalSize'
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
        $this->container['partitionName'] = isset($data['partitionName']) ? $data['partitionName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastAccessTime'] = isset($data['lastAccessTime']) ? $data['lastAccessTime'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['lastDdlTime'] = isset($data['lastDdlTime']) ? $data['lastDdlTime'] : null;
        $this->container['numRows'] = isset($data['numRows']) ? $data['numRows'] : null;
        $this->container['numFiles'] = isset($data['numFiles']) ? $data['numFiles'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['partitionName'] === null) {
            $invalidProperties[] = "'partitionName' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['lastAccessTime'] === null) {
            $invalidProperties[] = "'lastAccessTime' can't be null";
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
    * Gets partitionName
    *  分区名
    *
    * @return string
    */
    public function getPartitionName()
    {
        return $this->container['partitionName'];
    }

    /**
    * Sets partitionName
    *
    * @param string $partitionName 分区名
    *
    * @return $this
    */
    public function setPartitionName($partitionName)
    {
        $this->container['partitionName'] = $partitionName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastAccessTime
    *  最后改动时间
    *
    * @return int
    */
    public function getLastAccessTime()
    {
        return $this->container['lastAccessTime'];
    }

    /**
    * Sets lastAccessTime
    *
    * @param int $lastAccessTime 最后改动时间
    *
    * @return $this
    */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->container['lastAccessTime'] = $lastAccessTime;
        return $this;
    }

    /**
    * Gets locations
    *  路径，外表显示，内表不显示
    *
    * @return string[]|null
    */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
    * Sets locations
    *
    * @param string[]|null $locations 路径，外表显示，内表不显示
    *
    * @return $this
    */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;
        return $this;
    }

    /**
    * Gets lastDdlTime
    *  最后一个ddl语句执行时间，时间戳单位：秒
    *
    * @return int|null
    */
    public function getLastDdlTime()
    {
        return $this->container['lastDdlTime'];
    }

    /**
    * Sets lastDdlTime
    *
    * @param int|null $lastDdlTime 最后一个ddl语句执行时间，时间戳单位：秒
    *
    * @return $this
    */
    public function setLastDdlTime($lastDdlTime)
    {
        $this->container['lastDdlTime'] = $lastDdlTime;
        return $this;
    }

    /**
    * Gets numRows
    *  该分区数据总行数
    *
    * @return int|null
    */
    public function getNumRows()
    {
        return $this->container['numRows'];
    }

    /**
    * Sets numRows
    *
    * @param int|null $numRows 该分区数据总行数
    *
    * @return $this
    */
    public function setNumRows($numRows)
    {
        $this->container['numRows'] = $numRows;
        return $this;
    }

    /**
    * Gets numFiles
    *  分区文件数
    *
    * @return int|null
    */
    public function getNumFiles()
    {
        return $this->container['numFiles'];
    }

    /**
    * Sets numFiles
    *
    * @param int|null $numFiles 分区文件数
    *
    * @return $this
    */
    public function setNumFiles($numFiles)
    {
        $this->container['numFiles'] = $numFiles;
        return $this;
    }

    /**
    * Gets totalSize
    *  该分区总的数据大小（单位：字节）
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 该分区总的数据大小（单位：字节）
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
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

