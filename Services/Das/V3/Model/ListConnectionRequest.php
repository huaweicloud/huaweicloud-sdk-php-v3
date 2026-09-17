<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConnectionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConnectionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * condition  数据库实例地址/实例名称/备注等关键字
    * perpage  每页记录数
    * curpage  页码
    * networkType  数据库来源类型
    * datastoreType  数据库引擎类型
    * connectionType  连接类型
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'condition' => 'string',
            'perpage' => 'string',
            'curpage' => 'string',
            'networkType' => 'string',
            'datastoreType' => 'string',
            'connectionType' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * condition  数据库实例地址/实例名称/备注等关键字
    * perpage  每页记录数
    * curpage  页码
    * networkType  数据库来源类型
    * datastoreType  数据库引擎类型
    * connectionType  连接类型
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'condition' => null,
        'perpage' => null,
        'curpage' => null,
        'networkType' => null,
        'datastoreType' => null,
        'connectionType' => null,
        'instanceId' => null
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
    * condition  数据库实例地址/实例名称/备注等关键字
    * perpage  每页记录数
    * curpage  页码
    * networkType  数据库来源类型
    * datastoreType  数据库引擎类型
    * connectionType  连接类型
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'condition' => 'condition',
            'perpage' => 'perpage',
            'curpage' => 'curpage',
            'networkType' => 'network_type',
            'datastoreType' => 'datastore_type',
            'connectionType' => 'connection_type',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * condition  数据库实例地址/实例名称/备注等关键字
    * perpage  每页记录数
    * curpage  页码
    * networkType  数据库来源类型
    * datastoreType  数据库引擎类型
    * connectionType  连接类型
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'condition' => 'setCondition',
            'perpage' => 'setPerpage',
            'curpage' => 'setCurpage',
            'networkType' => 'setNetworkType',
            'datastoreType' => 'setDatastoreType',
            'connectionType' => 'setConnectionType',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * condition  数据库实例地址/实例名称/备注等关键字
    * perpage  每页记录数
    * curpage  页码
    * networkType  数据库来源类型
    * datastoreType  数据库引擎类型
    * connectionType  连接类型
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'condition' => 'getCondition',
            'perpage' => 'getPerpage',
            'curpage' => 'getCurpage',
            'networkType' => 'getNetworkType',
            'datastoreType' => 'getDatastoreType',
            'connectionType' => 'getConnectionType',
            'instanceId' => 'getInstanceId'
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['perpage'] = isset($data['perpage']) ? $data['perpage'] : null;
        $this->container['curpage'] = isset($data['curpage']) ? $data['curpage'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
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
    * Gets condition
    *  数据库实例地址/实例名称/备注等关键字
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 数据库实例地址/实例名称/备注等关键字
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets perpage
    *  每页记录数
    *
    * @return string|null
    */
    public function getPerpage()
    {
        return $this->container['perpage'];
    }

    /**
    * Sets perpage
    *
    * @param string|null $perpage 每页记录数
    *
    * @return $this
    */
    public function setPerpage($perpage)
    {
        $this->container['perpage'] = $perpage;
        return $this;
    }

    /**
    * Gets curpage
    *  页码
    *
    * @return string|null
    */
    public function getCurpage()
    {
        return $this->container['curpage'];
    }

    /**
    * Sets curpage
    *
    * @param string|null $curpage 页码
    *
    * @return $this
    */
    public function setCurpage($curpage)
    {
        $this->container['curpage'] = $curpage;
        return $this;
    }

    /**
    * Gets networkType
    *  数据库来源类型
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType 数据库来源类型
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库引擎类型
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数据库引擎类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets connectionType
    *  连接类型
    *
    * @return string|null
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string|null $connectionType 连接类型
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

