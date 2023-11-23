<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MongodbSlowLogDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MongodbSlowLogDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeName  节点名称。
    * nodeId  节点ID。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * lockTime  等待锁时间。单位：us
    * docsReturned  慢查询返回的文档数。
    * docsScanned  慢查询扫描的文档数。
    * database  数据库库名
    * collection  数据库集合名称
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * lineNum  日志单行序列号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeName' => 'string',
            'nodeId' => 'string',
            'wholeMessage' => 'string',
            'operateType' => 'string',
            'costTime' => 'int',
            'lockTime' => 'int',
            'docsReturned' => 'int',
            'docsScanned' => 'int',
            'database' => 'string',
            'collection' => 'string',
            'logTime' => 'string',
            'lineNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeName  节点名称。
    * nodeId  节点ID。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * lockTime  等待锁时间。单位：us
    * docsReturned  慢查询返回的文档数。
    * docsScanned  慢查询扫描的文档数。
    * database  数据库库名
    * collection  数据库集合名称
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * lineNum  日志单行序列号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeName' => null,
        'nodeId' => null,
        'wholeMessage' => null,
        'operateType' => null,
        'costTime' => null,
        'lockTime' => null,
        'docsReturned' => null,
        'docsScanned' => null,
        'database' => null,
        'collection' => null,
        'logTime' => null,
        'lineNum' => null
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
    * nodeName  节点名称。
    * nodeId  节点ID。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * lockTime  等待锁时间。单位：us
    * docsReturned  慢查询返回的文档数。
    * docsScanned  慢查询扫描的文档数。
    * database  数据库库名
    * collection  数据库集合名称
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * lineNum  日志单行序列号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeName' => 'node_name',
            'nodeId' => 'node_id',
            'wholeMessage' => 'whole_message',
            'operateType' => 'operate_type',
            'costTime' => 'cost_time',
            'lockTime' => 'lock_time',
            'docsReturned' => 'docs_returned',
            'docsScanned' => 'docs_scanned',
            'database' => 'database',
            'collection' => 'collection',
            'logTime' => 'log_time',
            'lineNum' => 'line_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeName  节点名称。
    * nodeId  节点ID。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * lockTime  等待锁时间。单位：us
    * docsReturned  慢查询返回的文档数。
    * docsScanned  慢查询扫描的文档数。
    * database  数据库库名
    * collection  数据库集合名称
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * lineNum  日志单行序列号
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeName' => 'setNodeName',
            'nodeId' => 'setNodeId',
            'wholeMessage' => 'setWholeMessage',
            'operateType' => 'setOperateType',
            'costTime' => 'setCostTime',
            'lockTime' => 'setLockTime',
            'docsReturned' => 'setDocsReturned',
            'docsScanned' => 'setDocsScanned',
            'database' => 'setDatabase',
            'collection' => 'setCollection',
            'logTime' => 'setLogTime',
            'lineNum' => 'setLineNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeName  节点名称。
    * nodeId  节点ID。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * lockTime  等待锁时间。单位：us
    * docsReturned  慢查询返回的文档数。
    * docsScanned  慢查询扫描的文档数。
    * database  数据库库名
    * collection  数据库集合名称
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * lineNum  日志单行序列号
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeName' => 'getNodeName',
            'nodeId' => 'getNodeId',
            'wholeMessage' => 'getWholeMessage',
            'operateType' => 'getOperateType',
            'costTime' => 'getCostTime',
            'lockTime' => 'getLockTime',
            'docsReturned' => 'getDocsReturned',
            'docsScanned' => 'getDocsScanned',
            'database' => 'getDatabase',
            'collection' => 'getCollection',
            'logTime' => 'getLogTime',
            'lineNum' => 'getLineNum'
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
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['wholeMessage'] = isset($data['wholeMessage']) ? $data['wholeMessage'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['costTime'] = isset($data['costTime']) ? $data['costTime'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['docsReturned'] = isset($data['docsReturned']) ? $data['docsReturned'] : null;
        $this->container['docsScanned'] = isset($data['docsScanned']) ? $data['docsScanned'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['logTime'] = isset($data['logTime']) ? $data['logTime'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeName'] === null) {
            $invalidProperties[] = "'nodeName' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['wholeMessage'] === null) {
            $invalidProperties[] = "'wholeMessage' can't be null";
        }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
        if ($this->container['costTime'] === null) {
            $invalidProperties[] = "'costTime' can't be null";
        }
        if ($this->container['lockTime'] === null) {
            $invalidProperties[] = "'lockTime' can't be null";
        }
        if ($this->container['docsReturned'] === null) {
            $invalidProperties[] = "'docsReturned' can't be null";
        }
        if ($this->container['docsScanned'] === null) {
            $invalidProperties[] = "'docsScanned' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['collection'] === null) {
            $invalidProperties[] = "'collection' can't be null";
        }
        if ($this->container['logTime'] === null) {
            $invalidProperties[] = "'logTime' can't be null";
        }
        if ($this->container['lineNum'] === null) {
            $invalidProperties[] = "'lineNum' can't be null";
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
    * Gets nodeName
    *  节点名称。
    *
    * @return string
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string $nodeName 节点名称。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets wholeMessage
    *  执行语句。
    *
    * @return string
    */
    public function getWholeMessage()
    {
        return $this->container['wholeMessage'];
    }

    /**
    * Sets wholeMessage
    *
    * @param string $wholeMessage 执行语句。
    *
    * @return $this
    */
    public function setWholeMessage($wholeMessage)
    {
        $this->container['wholeMessage'] = $wholeMessage;
        return $this;
    }

    /**
    * Gets operateType
    *  语句类型。
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 语句类型。
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets costTime
    *  执行时间。单位：ms
    *
    * @return int
    */
    public function getCostTime()
    {
        return $this->container['costTime'];
    }

    /**
    * Sets costTime
    *
    * @param int $costTime 执行时间。单位：ms
    *
    * @return $this
    */
    public function setCostTime($costTime)
    {
        $this->container['costTime'] = $costTime;
        return $this;
    }

    /**
    * Gets lockTime
    *  等待锁时间。单位：us
    *
    * @return int
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param int $lockTime 等待锁时间。单位：us
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets docsReturned
    *  慢查询返回的文档数。
    *
    * @return int
    */
    public function getDocsReturned()
    {
        return $this->container['docsReturned'];
    }

    /**
    * Sets docsReturned
    *
    * @param int $docsReturned 慢查询返回的文档数。
    *
    * @return $this
    */
    public function setDocsReturned($docsReturned)
    {
        $this->container['docsReturned'] = $docsReturned;
        return $this;
    }

    /**
    * Gets docsScanned
    *  慢查询扫描的文档数。
    *
    * @return int
    */
    public function getDocsScanned()
    {
        return $this->container['docsScanned'];
    }

    /**
    * Sets docsScanned
    *
    * @param int $docsScanned 慢查询扫描的文档数。
    *
    * @return $this
    */
    public function setDocsScanned($docsScanned)
    {
        $this->container['docsScanned'] = $docsScanned;
        return $this;
    }

    /**
    * Gets database
    *  数据库库名
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库库名
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets collection
    *  数据库集合名称
    *
    * @return string
    */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
    * Sets collection
    *
    * @param string $collection 数据库集合名称
    *
    * @return $this
    */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;
        return $this;
    }

    /**
    * Gets logTime
    *  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getLogTime()
    {
        return $this->container['logTime'];
    }

    /**
    * Sets logTime
    *
    * @param string $logTime 日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setLogTime($logTime)
    {
        $this->container['logTime'] = $logTime;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号
    *
    * @return string
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string $lineNum 日志单行序列号
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
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

