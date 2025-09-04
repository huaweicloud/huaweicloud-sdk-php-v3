<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDcPointRespDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDcPointRespDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pointId  点位表id，数据源下唯一
    * name  点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
    * collectionConfig  点位采集配置
    * deviceId  设备id
    * property  属性，允许中、数字、英文大小写、下划线、中划线
    * dataType  点位数据类型
    * dsId  采集数据源id，节点下唯一
    * processingConfig  processingConfig
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pointId' => 'string',
            'name' => 'string',
            'collectionConfig' => 'object',
            'deviceId' => 'string',
            'property' => 'string',
            'dataType' => 'string',
            'dsId' => 'string',
            'processingConfig' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ProcessingConfigDTO',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pointId  点位表id，数据源下唯一
    * name  点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
    * collectionConfig  点位采集配置
    * deviceId  设备id
    * property  属性，允许中、数字、英文大小写、下划线、中划线
    * dataType  点位数据类型
    * dsId  采集数据源id，节点下唯一
    * processingConfig  processingConfig
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pointId' => null,
        'name' => null,
        'collectionConfig' => null,
        'deviceId' => null,
        'property' => null,
        'dataType' => null,
        'dsId' => null,
        'processingConfig' => null,
        'createTime' => null,
        'updateTime' => null
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
    * pointId  点位表id，数据源下唯一
    * name  点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
    * collectionConfig  点位采集配置
    * deviceId  设备id
    * property  属性，允许中、数字、英文大小写、下划线、中划线
    * dataType  点位数据类型
    * dsId  采集数据源id，节点下唯一
    * processingConfig  processingConfig
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pointId' => 'point_id',
            'name' => 'name',
            'collectionConfig' => 'collection_config',
            'deviceId' => 'device_id',
            'property' => 'property',
            'dataType' => 'data_type',
            'dsId' => 'ds_id',
            'processingConfig' => 'processing_config',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pointId  点位表id，数据源下唯一
    * name  点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
    * collectionConfig  点位采集配置
    * deviceId  设备id
    * property  属性，允许中、数字、英文大小写、下划线、中划线
    * dataType  点位数据类型
    * dsId  采集数据源id，节点下唯一
    * processingConfig  processingConfig
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'pointId' => 'setPointId',
            'name' => 'setName',
            'collectionConfig' => 'setCollectionConfig',
            'deviceId' => 'setDeviceId',
            'property' => 'setProperty',
            'dataType' => 'setDataType',
            'dsId' => 'setDsId',
            'processingConfig' => 'setProcessingConfig',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pointId  点位表id，数据源下唯一
    * name  点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
    * collectionConfig  点位采集配置
    * deviceId  设备id
    * property  属性，允许中、数字、英文大小写、下划线、中划线
    * dataType  点位数据类型
    * dsId  采集数据源id，节点下唯一
    * processingConfig  processingConfig
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'pointId' => 'getPointId',
            'name' => 'getName',
            'collectionConfig' => 'getCollectionConfig',
            'deviceId' => 'getDeviceId',
            'property' => 'getProperty',
            'dataType' => 'getDataType',
            'dsId' => 'getDsId',
            'processingConfig' => 'getProcessingConfig',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['pointId'] = isset($data['pointId']) ? $data['pointId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['collectionConfig'] = isset($data['collectionConfig']) ? $data['collectionConfig'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dsId'] = isset($data['dsId']) ? $data['dsId'] : null;
        $this->container['processingConfig'] = isset($data['processingConfig']) ? $data['processingConfig'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pointId']) && (mb_strlen($this->container['pointId']) > 64)) {
                $invalidProperties[] = "invalid value for 'pointId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pointId']) && (mb_strlen($this->container['pointId']) < 1)) {
                $invalidProperties[] = "invalid value for 'pointId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pointId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['pointId'])) {
                $invalidProperties[] = "invalid value for 'pointId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5#%()（）*]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5#%()（）*]*$/.";
            }
            if (!is_null($this->container['deviceId']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['property']) && (mb_strlen($this->container['property']) > 128)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['property']) && (mb_strlen($this->container['property']) < 1)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['property']) && !preg_match("/^[一-龥a-zA-Z0-9_?\/'#().,&%@!-]*$/", $this->container['property'])) {
                $invalidProperties[] = "invalid value for 'property', must be conform to the pattern /^[一-龥a-zA-Z0-9_?\/'#().,&%@!-]*$/.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) > 32)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dsId']) && (mb_strlen($this->container['dsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dsId']) && (mb_strlen($this->container['dsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dsId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['dsId'])) {
                $invalidProperties[] = "invalid value for 'dsId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets pointId
    *  点位表id，数据源下唯一
    *
    * @return string|null
    */
    public function getPointId()
    {
        return $this->container['pointId'];
    }

    /**
    * Sets pointId
    *
    * @param string|null $pointId 点位表id，数据源下唯一
    *
    * @return $this
    */
    public function setPointId($pointId)
    {
        $this->container['pointId'] = $pointId;
        return $this;
    }

    /**
    * Gets name
    *  点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
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
    * @param string|null $name 点位名称，允许中、数字、英文大小写、下划线、中划线、#%()*特殊字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets collectionConfig
    *  点位采集配置
    *
    * @return object|null
    */
    public function getCollectionConfig()
    {
        return $this->container['collectionConfig'];
    }

    /**
    * Sets collectionConfig
    *
    * @param object|null $collectionConfig 点位采集配置
    *
    * @return $this
    */
    public function setCollectionConfig($collectionConfig)
    {
        $this->container['collectionConfig'] = $collectionConfig;
        return $this;
    }

    /**
    * Gets deviceId
    *  设备id
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备id
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets property
    *  属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 属性，允许中、数字、英文大小写、下划线、中划线
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets dataType
    *  点位数据类型
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 点位数据类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dsId
    *  采集数据源id，节点下唯一
    *
    * @return string|null
    */
    public function getDsId()
    {
        return $this->container['dsId'];
    }

    /**
    * Sets dsId
    *
    * @param string|null $dsId 采集数据源id，节点下唯一
    *
    * @return $this
    */
    public function setDsId($dsId)
    {
        $this->container['dsId'] = $dsId;
        return $this;
    }

    /**
    * Gets processingConfig
    *  processingConfig
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ProcessingConfigDTO|null
    */
    public function getProcessingConfig()
    {
        return $this->container['processingConfig'];
    }

    /**
    * Sets processingConfig
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ProcessingConfigDTO|null $processingConfig processingConfig
    *
    * @return $this
    */
    public function setProcessingConfig($processingConfig)
    {
        $this->container['processingConfig'] = $processingConfig;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最后一次修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

