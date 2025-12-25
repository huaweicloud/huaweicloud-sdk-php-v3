<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModuleUpdateRequestPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModuleUpdateRequestPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * description  描述
    * moduleJson  布局模块相关信息
    * name  名称
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudPackId' => 'string',
            'cloudPackName' => 'string',
            'cloudPackVersion' => 'string',
            'description' => 'string',
            'moduleJson' => 'string',
            'name' => 'string',
            'updateTime' => 'string',
            'thumbnail' => 'string',
            'moduleType' => 'string',
            'metricIds' => 'string',
            'dataQuery' => 'string',
            'boaVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * description  描述
    * moduleJson  布局模块相关信息
    * name  名称
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudPackId' => null,
        'cloudPackName' => null,
        'cloudPackVersion' => null,
        'description' => null,
        'moduleJson' => null,
        'name' => null,
        'updateTime' => null,
        'thumbnail' => null,
        'moduleType' => null,
        'metricIds' => null,
        'dataQuery' => null,
        'boaVersion' => null
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
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * description  描述
    * moduleJson  布局模块相关信息
    * name  名称
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudPackId' => 'cloud_pack_id',
            'cloudPackName' => 'cloud_pack_name',
            'cloudPackVersion' => 'cloud_pack_version',
            'description' => 'description',
            'moduleJson' => 'module_json',
            'name' => 'name',
            'updateTime' => 'update_time',
            'thumbnail' => 'thumbnail',
            'moduleType' => 'module_type',
            'metricIds' => 'metric_ids',
            'dataQuery' => 'data_query',
            'boaVersion' => 'boa_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * description  描述
    * moduleJson  布局模块相关信息
    * name  名称
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudPackId' => 'setCloudPackId',
            'cloudPackName' => 'setCloudPackName',
            'cloudPackVersion' => 'setCloudPackVersion',
            'description' => 'setDescription',
            'moduleJson' => 'setModuleJson',
            'name' => 'setName',
            'updateTime' => 'setUpdateTime',
            'thumbnail' => 'setThumbnail',
            'moduleType' => 'setModuleType',
            'metricIds' => 'setMetricIds',
            'dataQuery' => 'setDataQuery',
            'boaVersion' => 'setBoaVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * cloudPackVersion  订阅包版本
    * description  描述
    * moduleJson  布局模块相关信息
    * name  名称
    * updateTime  更新时间
    * thumbnail  模块缩略图
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudPackId' => 'getCloudPackId',
            'cloudPackName' => 'getCloudPackName',
            'cloudPackVersion' => 'getCloudPackVersion',
            'description' => 'getDescription',
            'moduleJson' => 'getModuleJson',
            'name' => 'getName',
            'updateTime' => 'getUpdateTime',
            'thumbnail' => 'getThumbnail',
            'moduleType' => 'getModuleType',
            'metricIds' => 'getMetricIds',
            'dataQuery' => 'getDataQuery',
            'boaVersion' => 'getBoaVersion'
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
        $this->container['cloudPackId'] = isset($data['cloudPackId']) ? $data['cloudPackId'] : null;
        $this->container['cloudPackName'] = isset($data['cloudPackName']) ? $data['cloudPackName'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['moduleJson'] = isset($data['moduleJson']) ? $data['moduleJson'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['moduleType'] = isset($data['moduleType']) ? $data['moduleType'] : null;
        $this->container['metricIds'] = isset($data['metricIds']) ? $data['metricIds'] : null;
        $this->container['dataQuery'] = isset($data['dataQuery']) ? $data['dataQuery'] : null;
        $this->container['boaVersion'] = isset($data['boaVersion']) ? $data['boaVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleJson']) && (mb_strlen($this->container['moduleJson']) > 65525)) {
                $invalidProperties[] = "invalid value for 'moduleJson', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['moduleJson']) && (mb_strlen($this->container['moduleJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleJson', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) > 65525)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleType']) && (mb_strlen($this->container['moduleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'moduleType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['moduleType']) && (mb_strlen($this->container['moduleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['metricIds']) && (mb_strlen($this->container['metricIds']) > 65525)) {
                $invalidProperties[] = "invalid value for 'metricIds', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['metricIds']) && (mb_strlen($this->container['metricIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'metricIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataQuery']) && (mb_strlen($this->container['dataQuery']) > 65525)) {
                $invalidProperties[] = "invalid value for 'dataQuery', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['dataQuery']) && (mb_strlen($this->container['dataQuery']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataQuery', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 32.";
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
    * Gets cloudPackId
    *  订阅包id
    *
    * @return string|null
    */
    public function getCloudPackId()
    {
        return $this->container['cloudPackId'];
    }

    /**
    * Sets cloudPackId
    *
    * @param string|null $cloudPackId 订阅包id
    *
    * @return $this
    */
    public function setCloudPackId($cloudPackId)
    {
        $this->container['cloudPackId'] = $cloudPackId;
        return $this;
    }

    /**
    * Gets cloudPackName
    *  订阅包名称
    *
    * @return string|null
    */
    public function getCloudPackName()
    {
        return $this->container['cloudPackName'];
    }

    /**
    * Sets cloudPackName
    *
    * @param string|null $cloudPackName 订阅包名称
    *
    * @return $this
    */
    public function setCloudPackName($cloudPackName)
    {
        $this->container['cloudPackName'] = $cloudPackName;
        return $this;
    }

    /**
    * Gets cloudPackVersion
    *  订阅包版本
    *
    * @return string|null
    */
    public function getCloudPackVersion()
    {
        return $this->container['cloudPackVersion'];
    }

    /**
    * Sets cloudPackVersion
    *
    * @param string|null $cloudPackVersion 订阅包版本
    *
    * @return $this
    */
    public function setCloudPackVersion($cloudPackVersion)
    {
        $this->container['cloudPackVersion'] = $cloudPackVersion;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets moduleJson
    *  布局模块相关信息
    *
    * @return string|null
    */
    public function getModuleJson()
    {
        return $this->container['moduleJson'];
    }

    /**
    * Sets moduleJson
    *
    * @param string|null $moduleJson 布局模块相关信息
    *
    * @return $this
    */
    public function setModuleJson($moduleJson)
    {
        $this->container['moduleJson'] = $moduleJson;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets thumbnail
    *  模块缩略图
    *
    * @return string|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param string|null $thumbnail 模块缩略图
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets moduleType
    *  模块类型,tab/section
    *
    * @return string|null
    */
    public function getModuleType()
    {
        return $this->container['moduleType'];
    }

    /**
    * Sets moduleType
    *
    * @param string|null $moduleType 模块类型,tab/section
    *
    * @return $this
    */
    public function setModuleType($moduleType)
    {
        $this->container['moduleType'] = $moduleType;
        return $this;
    }

    /**
    * Gets metricIds
    *  section类模块关联的指标id
    *
    * @return string|null
    */
    public function getMetricIds()
    {
        return $this->container['metricIds'];
    }

    /**
    * Sets metricIds
    *
    * @param string|null $metricIds section类模块关联的指标id
    *
    * @return $this
    */
    public function setMetricIds($metricIds)
    {
        $this->container['metricIds'] = $metricIds;
        return $this;
    }

    /**
    * Gets dataQuery
    *  数据查询方式
    *
    * @return string|null
    */
    public function getDataQuery()
    {
        return $this->container['dataQuery'];
    }

    /**
    * Sets dataQuery
    *
    * @param string|null $dataQuery 数据查询方式
    *
    * @return $this
    */
    public function setDataQuery($dataQuery)
    {
        $this->container['dataQuery'] = $dataQuery;
        return $this;
    }

    /**
    * Gets boaVersion
    *  BOA底座版本
    *
    * @return string|null
    */
    public function getBoaVersion()
    {
        return $this->container['boaVersion'];
    }

    /**
    * Sets boaVersion
    *
    * @param string|null $boaVersion BOA底座版本
    *
    * @return $this
    */
    public function setBoaVersion($boaVersion)
    {
        $this->container['boaVersion'] = $boaVersion;
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

