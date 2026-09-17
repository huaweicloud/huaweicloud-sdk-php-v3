<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * instanceStatus  实例状态
    * curPage  页数
    * pageSize  页大小
    * instanceType  实例类型
    * engineVersion  实例版本
    * transactionFlag  历史事务是否开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'instanceStatus' => 'string',
            'curPage' => 'int',
            'pageSize' => 'int',
            'instanceType' => 'string',
            'engineVersion' => 'string',
            'transactionFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * instanceStatus  实例状态
    * curPage  页数
    * pageSize  页大小
    * instanceType  实例类型
    * engineVersion  实例版本
    * transactionFlag  历史事务是否开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'instanceStatus' => null,
        'curPage' => 'int32',
        'pageSize' => 'int32',
        'instanceType' => null,
        'engineVersion' => null,
        'transactionFlag' => null
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
    * engineType  数据库引擎类型
    * instanceStatus  实例状态
    * curPage  页数
    * pageSize  页大小
    * instanceType  实例类型
    * engineVersion  实例版本
    * transactionFlag  历史事务是否开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'instanceStatus' => 'instance_status',
            'curPage' => 'cur_page',
            'pageSize' => 'page_size',
            'instanceType' => 'instance_type',
            'engineVersion' => 'engine_version',
            'transactionFlag' => 'transaction_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  数据库引擎类型
    * instanceStatus  实例状态
    * curPage  页数
    * pageSize  页大小
    * instanceType  实例类型
    * engineVersion  实例版本
    * transactionFlag  历史事务是否开启
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'instanceStatus' => 'setInstanceStatus',
            'curPage' => 'setCurPage',
            'pageSize' => 'setPageSize',
            'instanceType' => 'setInstanceType',
            'engineVersion' => 'setEngineVersion',
            'transactionFlag' => 'setTransactionFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  数据库引擎类型
    * instanceStatus  实例状态
    * curPage  页数
    * pageSize  页大小
    * instanceType  实例类型
    * engineVersion  实例版本
    * transactionFlag  历史事务是否开启
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'instanceStatus' => 'getInstanceStatus',
            'curPage' => 'getCurPage',
            'pageSize' => 'getPageSize',
            'instanceType' => 'getInstanceType',
            'engineVersion' => 'getEngineVersion',
            'transactionFlag' => 'getTransactionFlag'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['transactionFlag'] = isset($data['transactionFlag']) ? $data['transactionFlag'] : null;
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
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus 实例状态
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets curPage
    *  页数
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 页数
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets pageSize
    *  页大小
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets engineVersion
    *  实例版本
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 实例版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets transactionFlag
    *  历史事务是否开启
    *
    * @return bool|null
    */
    public function getTransactionFlag()
    {
        return $this->container['transactionFlag'];
    }

    /**
    * Sets transactionFlag
    *
    * @param bool|null $transactionFlag 历史事务是否开启
    *
    * @return $this
    */
    public function setTransactionFlag($transactionFlag)
    {
        $this->container['transactionFlag'] = $transactionFlag;
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

