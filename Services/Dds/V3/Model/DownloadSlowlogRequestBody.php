<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadSlowlogRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadSlowlogRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileNameList  - 需要下载的文件的文件名列表。
    * nodeIdList  节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileNameList' => 'string[]',
            'nodeIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileNameList  - 需要下载的文件的文件名列表。
    * nodeIdList  节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileNameList' => null,
        'nodeIdList' => null
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
    * fileNameList  - 需要下载的文件的文件名列表。
    * nodeIdList  节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileNameList' => 'file_name_list',
            'nodeIdList' => 'node_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileNameList  - 需要下载的文件的文件名列表。
    * nodeIdList  节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @var string[]
    */
    protected static $setters = [
            'fileNameList' => 'setFileNameList',
            'nodeIdList' => 'setNodeIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileNameList  - 需要下载的文件的文件名列表。
    * nodeIdList  节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @var string[]
    */
    protected static $getters = [
            'fileNameList' => 'getFileNameList',
            'nodeIdList' => 'getNodeIdList'
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
        $this->container['fileNameList'] = isset($data['fileNameList']) ? $data['fileNameList'] : null;
        $this->container['nodeIdList'] = isset($data['nodeIdList']) ? $data['nodeIdList'] : null;
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
    * Gets fileNameList
    *  - 需要下载的文件的文件名列表。
    *
    * @return string[]|null
    */
    public function getFileNameList()
    {
        return $this->container['fileNameList'];
    }

    /**
    * Sets fileNameList
    *
    * @param string[]|null $fileNameList - 需要下载的文件的文件名列表。
    *
    * @return $this
    */
    public function setFileNameList($fileNameList)
    {
        $this->container['fileNameList'] = $fileNameList;
        return $this;
    }

    /**
    * Gets nodeIdList
    *  节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @return string[]|null
    */
    public function getNodeIdList()
    {
        return $this->container['nodeIdList'];
    }

    /**
    * Sets nodeIdList
    *
    * @param string[]|null $nodeIdList 节点ID列表，取空值，表示查询实例下所有允许查询的节点。使用请参考《DDS API参考》的“查询实例列表和详情”响应消息表“nodes 数据结构说明”的“id”。允许查询的节点如下： - 集群下面的 shard节点 - 副本集、单节点下面的所有节点
    *
    * @return $this
    */
    public function setNodeIdList($nodeIdList)
    {
        $this->container['nodeIdList'] = $nodeIdList;
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

