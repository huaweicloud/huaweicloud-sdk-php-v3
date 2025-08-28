<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConnectionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConnectionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * condition  数据库实例地址/实例名称/备注等关键字
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
    * networkType  数据库来源
    * datastoreType  数据库引擎。
    * connectionType  连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
    * instanceId  实例ID。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'condition' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'networkType' => 'string',
            'datastoreType' => 'string',
            'connectionType' => 'string',
            'instanceId' => 'string',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * condition  数据库实例地址/实例名称/备注等关键字
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
    * networkType  数据库来源
    * datastoreType  数据库引擎。
    * connectionType  连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
    * instanceId  实例ID。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'condition' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'networkType' => null,
        'datastoreType' => null,
        'connectionType' => null,
        'instanceId' => null,
        'xLanguage' => null
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
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
    * networkType  数据库来源
    * datastoreType  数据库引擎。
    * connectionType  连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
    * instanceId  实例ID。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'condition' => 'condition',
            'offset' => 'offset',
            'limit' => 'limit',
            'networkType' => 'network_type',
            'datastoreType' => 'datastore_type',
            'connectionType' => 'connection_type',
            'instanceId' => 'instance_id',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * condition  数据库实例地址/实例名称/备注等关键字
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
    * networkType  数据库来源
    * datastoreType  数据库引擎。
    * connectionType  连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
    * instanceId  实例ID。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'condition' => 'setCondition',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'networkType' => 'setNetworkType',
            'datastoreType' => 'setDatastoreType',
            'connectionType' => 'setConnectionType',
            'instanceId' => 'setInstanceId',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * condition  数据库实例地址/实例名称/备注等关键字
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
    * networkType  数据库来源
    * datastoreType  数据库引擎。
    * connectionType  连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
    * instanceId  实例ID。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'condition' => 'getCondition',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'networkType' => 'getNetworkType',
            'datastoreType' => 'getDatastoreType',
            'connectionType' => 'getConnectionType',
            'instanceId' => 'getInstanceId',
            'xLanguage' => 'getXLanguage'
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
    const NETWORK_TYPE_GAUSSDB = 'gaussdb';
    const NETWORK_TYPE_DDS = 'dds';
    const NETWORK_TYPE_RDS = 'rds';
    const NETWORK_TYPE_ECS = 'ecs';
    const NETWORK_TYPE_GEMINI = 'gemini';
    const NETWORK_TYPE_DDM = 'ddm';
    const CONNECTION_TYPE_NORMAL = 'NORMAL';
    const CONNECTION_TYPE_SHARE = 'SHARE';
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE_GAUSSDB,
            self::NETWORK_TYPE_DDS,
            self::NETWORK_TYPE_RDS,
            self::NETWORK_TYPE_ECS,
            self::NETWORK_TYPE_GEMINI,
            self::NETWORK_TYPE_DDM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConnectionTypeAllowableValues()
    {
        return [
            self::CONNECTION_TYPE_NORMAL,
            self::CONNECTION_TYPE_SHARE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
        ];
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['condition']) && (mb_strlen($this->container['condition']) > 1024)) {
                $invalidProperties[] = "invalid value for 'condition', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['condition']) && (mb_strlen($this->container['condition']) < 1)) {
                $invalidProperties[] = "invalid value for 'condition', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getNetworkTypeAllowableValues();
                if (!is_null($this->container['networkType']) && !in_array($this->container['networkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'networkType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getConnectionTypeAllowableValues();
                if (!is_null($this->container['connectionType']) && !in_array($this->container['connectionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'connectionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets offset
    *  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    * @param int|null $offset 偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
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
    * @param int|null $limit 查询记录数。默认为100，不能为负数，最小值为1，最大值为200。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets networkType
    *  数据库来源
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
    * @param string|null $networkType 数据库来源
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
    *  数据库引擎。
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
    * @param string|null $datastoreType 数据库引擎。
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
    *  连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
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
    * @param string|null $connectionType 连接类型，NORMAL-创建的连接，SHARE-他人共享给我的连接。
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
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

