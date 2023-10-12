<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResultsTopnBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResultsTopnBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indexTraffic  索引流量，byte, 查询数据类型中包含index时返回
    * storage  存储量，byte, 查询数据类型中包含storage时返回
    * writeTraffic  写入流量，byte, 查询数据类型中包含write时返回
    * logGroupId  日志组id，资源类型为日志组时返回
    * logGroupName  日志组名称，资源类型为日志组时返回
    * logStreamId  日志流id，资源类型为日志流时返回
    * logStreamName  日志流名称，资源类型为日志流时返回
    * basicTransfer  基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    * seniorTransfer  基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    * isAgencyTransfer  不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indexTraffic' => 'double',
            'storage' => 'double',
            'writeTraffic' => 'double',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'basicTransfer' => 'double',
            'seniorTransfer' => 'double',
            'isAgencyTransfer' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indexTraffic  索引流量，byte, 查询数据类型中包含index时返回
    * storage  存储量，byte, 查询数据类型中包含storage时返回
    * writeTraffic  写入流量，byte, 查询数据类型中包含write时返回
    * logGroupId  日志组id，资源类型为日志组时返回
    * logGroupName  日志组名称，资源类型为日志组时返回
    * logStreamId  日志流id，资源类型为日志流时返回
    * logStreamName  日志流名称，资源类型为日志流时返回
    * basicTransfer  基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    * seniorTransfer  基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    * isAgencyTransfer  不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indexTraffic' => 'double',
        'storage' => 'double',
        'writeTraffic' => 'double',
        'logGroupId' => null,
        'logGroupName' => null,
        'logStreamId' => null,
        'logStreamName' => null,
        'basicTransfer' => 'double',
        'seniorTransfer' => 'double',
        'isAgencyTransfer' => null
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
    * indexTraffic  索引流量，byte, 查询数据类型中包含index时返回
    * storage  存储量，byte, 查询数据类型中包含storage时返回
    * writeTraffic  写入流量，byte, 查询数据类型中包含write时返回
    * logGroupId  日志组id，资源类型为日志组时返回
    * logGroupName  日志组名称，资源类型为日志组时返回
    * logStreamId  日志流id，资源类型为日志流时返回
    * logStreamName  日志流名称，资源类型为日志流时返回
    * basicTransfer  基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    * seniorTransfer  基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    * isAgencyTransfer  不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indexTraffic' => 'index_traffic',
            'storage' => 'storage',
            'writeTraffic' => 'write_traffic',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'basicTransfer' => 'basic_transfer',
            'seniorTransfer' => 'senior_transfer',
            'isAgencyTransfer' => 'is_agency_transfer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indexTraffic  索引流量，byte, 查询数据类型中包含index时返回
    * storage  存储量，byte, 查询数据类型中包含storage时返回
    * writeTraffic  写入流量，byte, 查询数据类型中包含write时返回
    * logGroupId  日志组id，资源类型为日志组时返回
    * logGroupName  日志组名称，资源类型为日志组时返回
    * logStreamId  日志流id，资源类型为日志流时返回
    * logStreamName  日志流名称，资源类型为日志流时返回
    * basicTransfer  基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    * seniorTransfer  基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    * isAgencyTransfer  不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @var string[]
    */
    protected static $setters = [
            'indexTraffic' => 'setIndexTraffic',
            'storage' => 'setStorage',
            'writeTraffic' => 'setWriteTraffic',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'basicTransfer' => 'setBasicTransfer',
            'seniorTransfer' => 'setSeniorTransfer',
            'isAgencyTransfer' => 'setIsAgencyTransfer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indexTraffic  索引流量，byte, 查询数据类型中包含index时返回
    * storage  存储量，byte, 查询数据类型中包含storage时返回
    * writeTraffic  写入流量，byte, 查询数据类型中包含write时返回
    * logGroupId  日志组id，资源类型为日志组时返回
    * logGroupName  日志组名称，资源类型为日志组时返回
    * logStreamId  日志流id，资源类型为日志流时返回
    * logStreamName  日志流名称，资源类型为日志流时返回
    * basicTransfer  基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    * seniorTransfer  基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    * isAgencyTransfer  不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @var string[]
    */
    protected static $getters = [
            'indexTraffic' => 'getIndexTraffic',
            'storage' => 'getStorage',
            'writeTraffic' => 'getWriteTraffic',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'basicTransfer' => 'getBasicTransfer',
            'seniorTransfer' => 'getSeniorTransfer',
            'isAgencyTransfer' => 'getIsAgencyTransfer'
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
        $this->container['indexTraffic'] = isset($data['indexTraffic']) ? $data['indexTraffic'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['writeTraffic'] = isset($data['writeTraffic']) ? $data['writeTraffic'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['basicTransfer'] = isset($data['basicTransfer']) ? $data['basicTransfer'] : null;
        $this->container['seniorTransfer'] = isset($data['seniorTransfer']) ? $data['seniorTransfer'] : null;
        $this->container['isAgencyTransfer'] = isset($data['isAgencyTransfer']) ? $data['isAgencyTransfer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['indexTraffic'] === null) {
            $invalidProperties[] = "'indexTraffic' can't be null";
        }
        if ($this->container['storage'] === null) {
            $invalidProperties[] = "'storage' can't be null";
        }
        if ($this->container['writeTraffic'] === null) {
            $invalidProperties[] = "'writeTraffic' can't be null";
        }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
        if ($this->container['logGroupName'] === null) {
            $invalidProperties[] = "'logGroupName' can't be null";
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
    * Gets indexTraffic
    *  索引流量，byte, 查询数据类型中包含index时返回
    *
    * @return double
    */
    public function getIndexTraffic()
    {
        return $this->container['indexTraffic'];
    }

    /**
    * Sets indexTraffic
    *
    * @param double $indexTraffic 索引流量，byte, 查询数据类型中包含index时返回
    *
    * @return $this
    */
    public function setIndexTraffic($indexTraffic)
    {
        $this->container['indexTraffic'] = $indexTraffic;
        return $this;
    }

    /**
    * Gets storage
    *  存储量，byte, 查询数据类型中包含storage时返回
    *
    * @return double
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param double $storage 存储量，byte, 查询数据类型中包含storage时返回
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets writeTraffic
    *  写入流量，byte, 查询数据类型中包含write时返回
    *
    * @return double
    */
    public function getWriteTraffic()
    {
        return $this->container['writeTraffic'];
    }

    /**
    * Sets writeTraffic
    *
    * @param double $writeTraffic 写入流量，byte, 查询数据类型中包含write时返回
    *
    * @return $this
    */
    public function setWriteTraffic($writeTraffic)
    {
        $this->container['writeTraffic'] = $writeTraffic;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id，资源类型为日志组时返回
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组id，资源类型为日志组时返回
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称，资源类型为日志组时返回
    *
    * @return string
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string $logGroupName 日志组名称，资源类型为日志组时返回
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流id，资源类型为日志流时返回
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流id，资源类型为日志流时返回
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称，资源类型为日志流时返回
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称，资源类型为日志流时返回
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets basicTransfer
    *  基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    *
    * @return double|null
    */
    public function getBasicTransfer()
    {
        return $this->container['basicTransfer'];
    }

    /**
    * Sets basicTransfer
    *
    * @param double|null $basicTransfer 基础转储流量，byte, 查询数据类型中包含basicTransfer时返回
    *
    * @return $this
    */
    public function setBasicTransfer($basicTransfer)
    {
        $this->container['basicTransfer'] = $basicTransfer;
        return $this;
    }

    /**
    * Gets seniorTransfer
    *  基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    *
    * @return double|null
    */
    public function getSeniorTransfer()
    {
        return $this->container['seniorTransfer'];
    }

    /**
    * Sets seniorTransfer
    *
    * @param double|null $seniorTransfer 基础转储流量，byte, 查询数据类型中包含seniorTransfer时返回
    *
    * @return $this
    */
    public function setSeniorTransfer($seniorTransfer)
    {
        $this->container['seniorTransfer'] = $seniorTransfer;
        return $this;
    }

    /**
    * Gets isAgencyTransfer
    *  不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @return bool|null
    */
    public function getIsAgencyTransfer()
    {
        return $this->container['isAgencyTransfer'];
    }

    /**
    * Sets isAgencyTransfer
    *
    * @param bool|null $isAgencyTransfer 不是委托转储，true，是委托转储，则前端资源统计展示的流不能跳
    *
    * @return $this
    */
    public function setIsAgencyTransfer($isAgencyTransfer)
    {
        $this->container['isAgencyTransfer'] = $isAgencyTransfer;
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

