<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkflowsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkflowsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * order  排序顺序，asc：升序，desc：降序
    * sortby  排序字段，create_time：创建时间，category：类型分类名称
    * enabled  是否启用
    * lastVersion  最新版本号
    * name  流程名称
    * description  流程描述
    * dataclassId  数据类ID
    * dataclassName  数据类名称
    * aopType  流程类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'order' => 'string',
            'sortby' => 'string',
            'enabled' => 'bool',
            'lastVersion' => 'bool',
            'name' => 'string',
            'description' => 'string',
            'dataclassId' => 'string',
            'dataclassName' => 'string',
            'aopType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * order  排序顺序，asc：升序，desc：降序
    * sortby  排序字段，create_time：创建时间，category：类型分类名称
    * enabled  是否启用
    * lastVersion  最新版本号
    * name  流程名称
    * description  流程描述
    * dataclassId  数据类ID
    * dataclassName  数据类名称
    * aopType  流程类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'offset' => null,
        'limit' => null,
        'order' => null,
        'sortby' => null,
        'enabled' => null,
        'lastVersion' => null,
        'name' => null,
        'description' => null,
        'dataclassId' => null,
        'dataclassName' => null,
        'aopType' => null
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
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * order  排序顺序，asc：升序，desc：降序
    * sortby  排序字段，create_time：创建时间，category：类型分类名称
    * enabled  是否启用
    * lastVersion  最新版本号
    * name  流程名称
    * description  流程描述
    * dataclassId  数据类ID
    * dataclassName  数据类名称
    * aopType  流程类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'order' => 'order',
            'sortby' => 'sortby',
            'enabled' => 'enabled',
            'lastVersion' => 'last_version',
            'name' => 'name',
            'description' => 'description',
            'dataclassId' => 'dataclass_id',
            'dataclassName' => 'dataclass_name',
            'aopType' => 'aop_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * order  排序顺序，asc：升序，desc：降序
    * sortby  排序字段，create_time：创建时间，category：类型分类名称
    * enabled  是否启用
    * lastVersion  最新版本号
    * name  流程名称
    * description  流程描述
    * dataclassId  数据类ID
    * dataclassName  数据类名称
    * aopType  流程类型
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'order' => 'setOrder',
            'sortby' => 'setSortby',
            'enabled' => 'setEnabled',
            'lastVersion' => 'setLastVersion',
            'name' => 'setName',
            'description' => 'setDescription',
            'dataclassId' => 'setDataclassId',
            'dataclassName' => 'setDataclassName',
            'aopType' => 'setAopType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * order  排序顺序，asc：升序，desc：降序
    * sortby  排序字段，create_time：创建时间，category：类型分类名称
    * enabled  是否启用
    * lastVersion  最新版本号
    * name  流程名称
    * description  流程描述
    * dataclassId  数据类ID
    * dataclassName  数据类名称
    * aopType  流程类型
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'order' => 'getOrder',
            'sortby' => 'getSortby',
            'enabled' => 'getEnabled',
            'lastVersion' => 'getLastVersion',
            'name' => 'getName',
            'description' => 'getDescription',
            'dataclassId' => 'getDataclassId',
            'dataclassName' => 'getDataclassName',
            'aopType' => 'getAopType'
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
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    const SORTBY_CATEGORY = 'category';
    const SORTBY_CREATE_TIME = 'create_time';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortbyAllowableValues()
    {
        return [
            self::SORTBY_CATEGORY,
            self::SORTBY_CREATE_TIME,
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['sortby'] = isset($data['sortby']) ? $data['sortby'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['lastVersion'] = isset($data['lastVersion']) ? $data['lastVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['aopType'] = isset($data['aopType']) ? $data['aopType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) > 4)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) < 0)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSortbyAllowableValues();
                if (!is_null($this->container['sortby']) && !in_array($this->container['sortby'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortby', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortby']) && (mb_strlen($this->container['sortby']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortby', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortby']) && (mb_strlen($this->container['sortby']) < 2)) {
                $invalidProperties[] = "invalid value for 'sortby', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopType']) && (mb_strlen($this->container['aopType']) < 1)) {
                $invalidProperties[] = "invalid value for 'aopType', the character length must be bigger than or equal to 1.";
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
    * Gets contentType
    *  内容类型
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 内容类型
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
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
    * @param int|null $offset 偏移量
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
    *  数据量
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
    * @param int|null $limit 数据量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets order
    *  排序顺序，asc：升序，desc：降序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序顺序，asc：升序，desc：降序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets sortby
    *  排序字段，create_time：创建时间，category：类型分类名称
    *
    * @return string|null
    */
    public function getSortby()
    {
        return $this->container['sortby'];
    }

    /**
    * Sets sortby
    *
    * @param string|null $sortby 排序字段，create_time：创建时间，category：类型分类名称
    *
    * @return $this
    */
    public function setSortby($sortby)
    {
        $this->container['sortby'] = $sortby;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets lastVersion
    *  最新版本号
    *
    * @return bool|null
    */
    public function getLastVersion()
    {
        return $this->container['lastVersion'];
    }

    /**
    * Sets lastVersion
    *
    * @param bool|null $lastVersion 最新版本号
    *
    * @return $this
    */
    public function setLastVersion($lastVersion)
    {
        $this->container['lastVersion'] = $lastVersion;
        return $this;
    }

    /**
    * Gets name
    *  流程名称
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
    * @param string|null $name 流程名称
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
    *  流程描述
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
    * @param string|null $description 流程描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类ID
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 数据类ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets aopType
    *  流程类型
    *
    * @return string|null
    */
    public function getAopType()
    {
        return $this->container['aopType'];
    }

    /**
    * Sets aopType
    *
    * @param string|null $aopType 流程类型
    *
    * @return $this
    */
    public function setAopType($aopType)
    {
        $this->container['aopType'] = $aopType;
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

