<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchCheckitemsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchCheckitemsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalogUuid  检查项所属的目录id
    * compliancePackageId  检查项所属的遵从包id
    * limit  分页大小
    * offset  偏移量，表示查询该偏移量后面的记录
    * sortBy  排序关键字
    * order  降序或升序 DESC：降序 ASC: 升序
    * name  按照检查项名称进行筛选
    * suggestion  按照检查项建议进行筛选
    * type  表示该检查项的类型 0：内 1: 自定义
    * sourceList  按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    * condition  condition
    * queryMode  按照什么维度进行筛选
    * severity  按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalogUuid' => 'string',
            'compliancePackageId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortBy' => 'string',
            'order' => 'string',
            'name' => 'string',
            'suggestion' => 'string',
            'type' => 'int',
            'sourceList' => 'int[]',
            'condition' => '\HuaweiCloud\SDK\SecMaster\V2\Model\SearchCheckitemsRequestBodyCondition',
            'queryMode' => 'string',
            'severity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalogUuid  检查项所属的目录id
    * compliancePackageId  检查项所属的遵从包id
    * limit  分页大小
    * offset  偏移量，表示查询该偏移量后面的记录
    * sortBy  排序关键字
    * order  降序或升序 DESC：降序 ASC: 升序
    * name  按照检查项名称进行筛选
    * suggestion  按照检查项建议进行筛选
    * type  表示该检查项的类型 0：内 1: 自定义
    * sourceList  按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    * condition  condition
    * queryMode  按照什么维度进行筛选
    * severity  按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalogUuid' => null,
        'compliancePackageId' => null,
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'order' => null,
        'name' => null,
        'suggestion' => null,
        'type' => null,
        'sourceList' => null,
        'condition' => null,
        'queryMode' => null,
        'severity' => null
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
    * catalogUuid  检查项所属的目录id
    * compliancePackageId  检查项所属的遵从包id
    * limit  分页大小
    * offset  偏移量，表示查询该偏移量后面的记录
    * sortBy  排序关键字
    * order  降序或升序 DESC：降序 ASC: 升序
    * name  按照检查项名称进行筛选
    * suggestion  按照检查项建议进行筛选
    * type  表示该检查项的类型 0：内 1: 自定义
    * sourceList  按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    * condition  condition
    * queryMode  按照什么维度进行筛选
    * severity  按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalogUuid' => 'catalog_uuid',
            'compliancePackageId' => 'compliance_package_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'order' => 'order',
            'name' => 'name',
            'suggestion' => 'suggestion',
            'type' => 'type',
            'sourceList' => 'source_list',
            'condition' => 'condition',
            'queryMode' => 'query_mode',
            'severity' => 'severity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalogUuid  检查项所属的目录id
    * compliancePackageId  检查项所属的遵从包id
    * limit  分页大小
    * offset  偏移量，表示查询该偏移量后面的记录
    * sortBy  排序关键字
    * order  降序或升序 DESC：降序 ASC: 升序
    * name  按照检查项名称进行筛选
    * suggestion  按照检查项建议进行筛选
    * type  表示该检查项的类型 0：内 1: 自定义
    * sourceList  按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    * condition  condition
    * queryMode  按照什么维度进行筛选
    * severity  按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @var string[]
    */
    protected static $setters = [
            'catalogUuid' => 'setCatalogUuid',
            'compliancePackageId' => 'setCompliancePackageId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder',
            'name' => 'setName',
            'suggestion' => 'setSuggestion',
            'type' => 'setType',
            'sourceList' => 'setSourceList',
            'condition' => 'setCondition',
            'queryMode' => 'setQueryMode',
            'severity' => 'setSeverity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalogUuid  检查项所属的目录id
    * compliancePackageId  检查项所属的遵从包id
    * limit  分页大小
    * offset  偏移量，表示查询该偏移量后面的记录
    * sortBy  排序关键字
    * order  降序或升序 DESC：降序 ASC: 升序
    * name  按照检查项名称进行筛选
    * suggestion  按照检查项建议进行筛选
    * type  表示该检查项的类型 0：内 1: 自定义
    * sourceList  按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    * condition  condition
    * queryMode  按照什么维度进行筛选
    * severity  按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @var string[]
    */
    protected static $getters = [
            'catalogUuid' => 'getCatalogUuid',
            'compliancePackageId' => 'getCompliancePackageId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder',
            'name' => 'getName',
            'suggestion' => 'getSuggestion',
            'type' => 'getType',
            'sourceList' => 'getSourceList',
            'condition' => 'getCondition',
            'queryMode' => 'getQueryMode',
            'severity' => 'getSeverity'
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
        $this->container['catalogUuid'] = isset($data['catalogUuid']) ? $data['catalogUuid'] : null;
        $this->container['compliancePackageId'] = isset($data['compliancePackageId']) ? $data['compliancePackageId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sourceList'] = isset($data['sourceList']) ? $data['sourceList'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['queryMode'] = isset($data['queryMode']) ? $data['queryMode'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['catalogUuid']) && (mb_strlen($this->container['catalogUuid']) > 36)) {
                $invalidProperties[] = "invalid value for 'catalogUuid', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['catalogUuid']) && (mb_strlen($this->container['catalogUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'catalogUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['compliancePackageId']) && (mb_strlen($this->container['compliancePackageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'compliancePackageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['compliancePackageId']) && (mb_strlen($this->container['compliancePackageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'compliancePackageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) > 1000)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sortBy']) && (mb_strlen($this->container['sortBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) > 1000)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['order']) && (mb_strlen($this->container['order']) < 0)) {
                $invalidProperties[] = "invalid value for 'order', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) > 1000)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) < 0)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 1000)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queryMode']) && (mb_strlen($this->container['queryMode']) > 1000)) {
                $invalidProperties[] = "invalid value for 'queryMode', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['queryMode']) && (mb_strlen($this->container['queryMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'queryMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 1000)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
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
    * Gets catalogUuid
    *  检查项所属的目录id
    *
    * @return string|null
    */
    public function getCatalogUuid()
    {
        return $this->container['catalogUuid'];
    }

    /**
    * Sets catalogUuid
    *
    * @param string|null $catalogUuid 检查项所属的目录id
    *
    * @return $this
    */
    public function setCatalogUuid($catalogUuid)
    {
        $this->container['catalogUuid'] = $catalogUuid;
        return $this;
    }

    /**
    * Gets compliancePackageId
    *  检查项所属的遵从包id
    *
    * @return string|null
    */
    public function getCompliancePackageId()
    {
        return $this->container['compliancePackageId'];
    }

    /**
    * Sets compliancePackageId
    *
    * @param string|null $compliancePackageId 检查项所属的遵从包id
    *
    * @return $this
    */
    public function setCompliancePackageId($compliancePackageId)
    {
        $this->container['compliancePackageId'] = $compliancePackageId;
        return $this;
    }

    /**
    * Gets limit
    *  分页大小
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
    * @param int|null $limit 分页大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示查询该偏移量后面的记录
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
    * @param int|null $offset 偏移量，表示查询该偏移量后面的记录
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序关键字
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序关键字
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  降序或升序 DESC：降序 ASC: 升序
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
    * @param string|null $order 降序或升序 DESC：降序 ASC: 升序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets name
    *  按照检查项名称进行筛选
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
    * @param string|null $name 按照检查项名称进行筛选
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets suggestion
    *  按照检查项建议进行筛选
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 按照检查项建议进行筛选
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets type
    *  表示该检查项的类型 0：内 1: 自定义
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 表示该检查项的类型 0：内 1: 自定义
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets sourceList
    *  按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    *
    * @return int[]|null
    */
    public function getSourceList()
    {
        return $this->container['sourceList'];
    }

    /**
    * Sets sourceList
    *
    * @param int[]|null $sourceList 按照检查项对的执行方式进行筛选。0：kotlin; 2：剧本流程；3：手动；4：主机接入
    *
    * @return $this
    */
    public function setSourceList($sourceList)
    {
        $this->container['sourceList'] = $sourceList;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\SearchCheckitemsRequestBodyCondition|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\SearchCheckitemsRequestBodyCondition|null $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets queryMode
    *  按照什么维度进行筛选
    *
    * @return string|null
    */
    public function getQueryMode()
    {
        return $this->container['queryMode'];
    }

    /**
    * Sets queryMode
    *
    * @param string|null $queryMode 按照什么维度进行筛选
    *
    * @return $this
    */
    public function setQueryMode($queryMode)
    {
        $this->container['queryMode'] = $queryMode;
        return $this;
    }

    /**
    * Gets severity
    *  按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 按照检查项严重等级进行筛选 Fatal：致命 High：高危 Medium：中危 Low：低危 Tips：提示
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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

