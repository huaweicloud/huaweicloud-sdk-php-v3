<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  创建人
    * name  任务名
    * dataSourceType  数据源类型
    * dataConnectionId  数据连接id
    * startTime  开始时间
    * endTime  结束时间
    * directoryId  目录id
    * bucketName  桶名
    * limit  分页参数limit，默认值：10
    * offset  分页参数offset，默认值：0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'name' => 'string',
            'dataSourceType' => 'string',
            'dataConnectionId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'directoryId' => 'string',
            'bucketName' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  创建人
    * name  任务名
    * dataSourceType  数据源类型
    * dataConnectionId  数据连接id
    * startTime  开始时间
    * endTime  结束时间
    * directoryId  目录id
    * bucketName  桶名
    * limit  分页参数limit，默认值：10
    * offset  分页参数offset，默认值：0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'name' => null,
        'dataSourceType' => null,
        'dataConnectionId' => null,
        'startTime' => null,
        'endTime' => null,
        'directoryId' => null,
        'bucketName' => null,
        'limit' => null,
        'offset' => null
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
    * userName  创建人
    * name  任务名
    * dataSourceType  数据源类型
    * dataConnectionId  数据连接id
    * startTime  开始时间
    * endTime  结束时间
    * directoryId  目录id
    * bucketName  桶名
    * limit  分页参数limit，默认值：10
    * offset  分页参数offset，默认值：0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'name' => 'name',
            'dataSourceType' => 'data_source_type',
            'dataConnectionId' => 'data_connection_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'directoryId' => 'directory_id',
            'bucketName' => 'bucket_name',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  创建人
    * name  任务名
    * dataSourceType  数据源类型
    * dataConnectionId  数据连接id
    * startTime  开始时间
    * endTime  结束时间
    * directoryId  目录id
    * bucketName  桶名
    * limit  分页参数limit，默认值：10
    * offset  分页参数offset，默认值：0
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'name' => 'setName',
            'dataSourceType' => 'setDataSourceType',
            'dataConnectionId' => 'setDataConnectionId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'directoryId' => 'setDirectoryId',
            'bucketName' => 'setBucketName',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  创建人
    * name  任务名
    * dataSourceType  数据源类型
    * dataConnectionId  数据连接id
    * startTime  开始时间
    * endTime  结束时间
    * directoryId  目录id
    * bucketName  桶名
    * limit  分页参数limit，默认值：10
    * offset  分页参数offset，默认值：0
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'name' => 'getName',
            'dataSourceType' => 'getDataSourceType',
            'dataConnectionId' => 'getDataConnectionId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'directoryId' => 'getDirectoryId',
            'bucketName' => 'getBucketName',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dataSourceType'] = isset($data['dataSourceType']) ? $data['dataSourceType'] : null;
        $this->container['dataConnectionId'] = isset($data['dataConnectionId']) ? $data['dataConnectionId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets userName
    *  创建人
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 创建人
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets name
    *  任务名
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
    * @param string|null $name 任务名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dataSourceType
    *  数据源类型
    *
    * @return string|null
    */
    public function getDataSourceType()
    {
        return $this->container['dataSourceType'];
    }

    /**
    * Sets dataSourceType
    *
    * @param string|null $dataSourceType 数据源类型
    *
    * @return $this
    */
    public function setDataSourceType($dataSourceType)
    {
        $this->container['dataSourceType'] = $dataSourceType;
        return $this;
    }

    /**
    * Gets dataConnectionId
    *  数据连接id
    *
    * @return string|null
    */
    public function getDataConnectionId()
    {
        return $this->container['dataConnectionId'];
    }

    /**
    * Sets dataConnectionId
    *
    * @param string|null $dataConnectionId 数据连接id
    *
    * @return $this
    */
    public function setDataConnectionId($dataConnectionId)
    {
        $this->container['dataConnectionId'] = $dataConnectionId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets directoryId
    *  目录id
    *
    * @return string|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param string|null $directoryId 目录id
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数limit，默认值：10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页参数limit，默认值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数offset，默认值：0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页参数offset，默认值：0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

