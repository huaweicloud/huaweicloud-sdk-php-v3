<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDashBoardResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDashBoardResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * charts  仪表盘图表
    * filters  过滤条件
    * groupName  日志组名称
    * id  仪表盘id
    * lastUpdateTime  最近修改时间
    * projectId  项目id
    * title  仪表盘名称
    * useSystemTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'charts' => 'string[]',
            'filters' => 'string[]',
            'groupName' => 'string',
            'id' => 'string',
            'lastUpdateTime' => 'int',
            'projectId' => 'string',
            'title' => 'string',
            'useSystemTemplate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * charts  仪表盘图表
    * filters  过滤条件
    * groupName  日志组名称
    * id  仪表盘id
    * lastUpdateTime  最近修改时间
    * projectId  项目id
    * title  仪表盘名称
    * useSystemTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'charts' => null,
        'filters' => null,
        'groupName' => null,
        'id' => null,
        'lastUpdateTime' => 'int64',
        'projectId' => null,
        'title' => null,
        'useSystemTemplate' => null
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
    * charts  仪表盘图表
    * filters  过滤条件
    * groupName  日志组名称
    * id  仪表盘id
    * lastUpdateTime  最近修改时间
    * projectId  项目id
    * title  仪表盘名称
    * useSystemTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'charts' => 'charts',
            'filters' => 'filters',
            'groupName' => 'group_name',
            'id' => 'id',
            'lastUpdateTime' => 'last_update_time',
            'projectId' => 'project_id',
            'title' => 'title',
            'useSystemTemplate' => 'useSystemTemplate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * charts  仪表盘图表
    * filters  过滤条件
    * groupName  日志组名称
    * id  仪表盘id
    * lastUpdateTime  最近修改时间
    * projectId  项目id
    * title  仪表盘名称
    * useSystemTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $setters = [
            'charts' => 'setCharts',
            'filters' => 'setFilters',
            'groupName' => 'setGroupName',
            'id' => 'setId',
            'lastUpdateTime' => 'setLastUpdateTime',
            'projectId' => 'setProjectId',
            'title' => 'setTitle',
            'useSystemTemplate' => 'setUseSystemTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * charts  仪表盘图表
    * filters  过滤条件
    * groupName  日志组名称
    * id  仪表盘id
    * lastUpdateTime  最近修改时间
    * projectId  项目id
    * title  仪表盘名称
    * useSystemTemplate  是否使用模板
    *
    * @var string[]
    */
    protected static $getters = [
            'charts' => 'getCharts',
            'filters' => 'getFilters',
            'groupName' => 'getGroupName',
            'id' => 'getId',
            'lastUpdateTime' => 'getLastUpdateTime',
            'projectId' => 'getProjectId',
            'title' => 'getTitle',
            'useSystemTemplate' => 'getUseSystemTemplate'
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
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['useSystemTemplate'] = isset($data['useSystemTemplate']) ? $data['useSystemTemplate'] : null;
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
    * Gets charts
    *  仪表盘图表
    *
    * @return string[]|null
    */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
    * Sets charts
    *
    * @param string[]|null $charts 仪表盘图表
    *
    * @return $this
    */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;
        return $this;
    }

    /**
    * Gets filters
    *  过滤条件
    *
    * @return string[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param string[]|null $filters 过滤条件
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    /**
    * Gets groupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 日志组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets id
    *  仪表盘id
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
    * @param string|null $id 仪表盘id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最近修改时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最近修改时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets title
    *  仪表盘名称
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 仪表盘名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets useSystemTemplate
    *  是否使用模板
    *
    * @return bool|null
    */
    public function getUseSystemTemplate()
    {
        return $this->container['useSystemTemplate'];
    }

    /**
    * Sets useSystemTemplate
    *
    * @param bool|null $useSystemTemplate 是否使用模板
    *
    * @return $this
    */
    public function setUseSystemTemplate($useSystemTemplate)
    {
        $this->container['useSystemTemplate'] = $useSystemTemplate;
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

