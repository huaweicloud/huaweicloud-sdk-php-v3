<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModuleCreateRequestPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModuleCreateRequestPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模块ID
    * name  名称
    * description  描述信息
    * projectId  租户ID
    * workspaceId  工作空间ID
    * moduleJson  模块相关信息
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * thumbnail  模块缩略图
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'moduleJson' => 'string',
            'moduleType' => 'string',
            'metricIds' => 'string',
            'thumbnail' => 'string',
            'dataQuery' => 'string',
            'boaVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模块ID
    * name  名称
    * description  描述信息
    * projectId  租户ID
    * workspaceId  工作空间ID
    * moduleJson  模块相关信息
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * thumbnail  模块缩略图
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'projectId' => null,
        'workspaceId' => null,
        'moduleJson' => null,
        'moduleType' => null,
        'metricIds' => null,
        'thumbnail' => null,
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
    * id  模块ID
    * name  名称
    * description  描述信息
    * projectId  租户ID
    * workspaceId  工作空间ID
    * moduleJson  模块相关信息
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * thumbnail  模块缩略图
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'moduleJson' => 'module_json',
            'moduleType' => 'module_type',
            'metricIds' => 'metric_ids',
            'thumbnail' => 'thumbnail',
            'dataQuery' => 'data_query',
            'boaVersion' => 'boa_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模块ID
    * name  名称
    * description  描述信息
    * projectId  租户ID
    * workspaceId  工作空间ID
    * moduleJson  模块相关信息
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * thumbnail  模块缩略图
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'moduleJson' => 'setModuleJson',
            'moduleType' => 'setModuleType',
            'metricIds' => 'setMetricIds',
            'thumbnail' => 'setThumbnail',
            'dataQuery' => 'setDataQuery',
            'boaVersion' => 'setBoaVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模块ID
    * name  名称
    * description  描述信息
    * projectId  租户ID
    * workspaceId  工作空间ID
    * moduleJson  模块相关信息
    * moduleType  模块类型,tab/section
    * metricIds  section类模块关联的指标id
    * thumbnail  模块缩略图
    * dataQuery  数据查询方式
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'moduleJson' => 'getModuleJson',
            'moduleType' => 'getModuleType',
            'metricIds' => 'getMetricIds',
            'thumbnail' => 'getThumbnail',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['moduleJson'] = isset($data['moduleJson']) ? $data['moduleJson'] : null;
        $this->container['moduleType'] = isset($data['moduleType']) ? $data['moduleType'] : null;
        $this->container['metricIds'] = isset($data['metricIds']) ? $data['metricIds'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['moduleJson']) && (mb_strlen($this->container['moduleJson']) > 65525)) {
                $invalidProperties[] = "invalid value for 'moduleJson', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['moduleJson']) && (mb_strlen($this->container['moduleJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleJson', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) > 65525)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be smaller than or equal to 65525.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  模块ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 模块ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  租户ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets moduleJson
    *  模块相关信息
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
    * @param string|null $moduleJson 模块相关信息
    *
    * @return $this
    */
    public function setModuleJson($moduleJson)
    {
        $this->container['moduleJson'] = $moduleJson;
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

