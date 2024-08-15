<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstancePatchItemsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstancePatchItemsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceCompliantId  合规性报告id
    * offset  偏移量
    * limit  每页数量
    * title  补丁名称
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 -installed_time：补丁安装时间
    * patchStatus  补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceCompliantId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'title' => 'string',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'patchStatus' => 'string',
            'classification' => 'string',
            'severityLevel' => 'string',
            'complianceLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceCompliantId  合规性报告id
    * offset  偏移量
    * limit  每页数量
    * title  补丁名称
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 -installed_time：补丁安装时间
    * patchStatus  补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceCompliantId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'title' => null,
        'sortDir' => null,
        'sortKey' => null,
        'patchStatus' => null,
        'classification' => null,
        'severityLevel' => null,
        'complianceLevel' => null
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
    * instanceCompliantId  合规性报告id
    * offset  偏移量
    * limit  每页数量
    * title  补丁名称
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 -installed_time：补丁安装时间
    * patchStatus  补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceCompliantId' => 'instance_compliant_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'title' => 'title',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'patchStatus' => 'patch_status',
            'classification' => 'classification',
            'severityLevel' => 'severity_level',
            'complianceLevel' => 'compliance_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceCompliantId  合规性报告id
    * offset  偏移量
    * limit  每页数量
    * title  补丁名称
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 -installed_time：补丁安装时间
    * patchStatus  补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceCompliantId' => 'setInstanceCompliantId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'title' => 'setTitle',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'patchStatus' => 'setPatchStatus',
            'classification' => 'setClassification',
            'severityLevel' => 'setSeverityLevel',
            'complianceLevel' => 'setComplianceLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceCompliantId  合规性报告id
    * offset  偏移量
    * limit  每页数量
    * title  补丁名称
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 -installed_time：补丁安装时间
    * patchStatus  补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    * classification  分类
    * severityLevel  严重性级别
    * complianceLevel  合规性级别
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceCompliantId' => 'getInstanceCompliantId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'title' => 'getTitle',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'patchStatus' => 'getPatchStatus',
            'classification' => 'getClassification',
            'severityLevel' => 'getSeverityLevel',
            'complianceLevel' => 'getComplianceLevel'
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
        $this->container['instanceCompliantId'] = isset($data['instanceCompliantId']) ? $data['instanceCompliantId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['patchStatus'] = isset($data['patchStatus']) ? $data['patchStatus'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['complianceLevel'] = isset($data['complianceLevel']) ? $data['complianceLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceCompliantId'] === null) {
            $invalidProperties[] = "'instanceCompliantId' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceCompliantId
    *  合规性报告id
    *
    * @return string
    */
    public function getInstanceCompliantId()
    {
        return $this->container['instanceCompliantId'];
    }

    /**
    * Sets instanceCompliantId
    *
    * @param string $instanceCompliantId 合规性报告id
    *
    * @return $this
    */
    public function setInstanceCompliantId($instanceCompliantId)
    {
        $this->container['instanceCompliantId'] = $instanceCompliantId;
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
    *  每页数量
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
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets title
    *  补丁名称
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
    * @param string|null $title 补丁名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序 - asc：升序 - desc：降序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序 - asc：升序 - desc：降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段 -installed_time：补丁安装时间
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段 -installed_time：补丁安装时间
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets patchStatus
    *  补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    *
    * @return string|null
    */
    public function getPatchStatus()
    {
        return $this->container['patchStatus'];
    }

    /**
    * Sets patchStatus
    *
    * @param string|null $patchStatus 补丁状态 INSTALLED：已安装 INSTALLED_OTHER：已安装其他 MISSING：缺失 REJECT：拒绝 FAILED：失败 PENDING_REBOOT：已安装待重启
    *
    * @return $this
    */
    public function setPatchStatus($patchStatus)
    {
        $this->container['patchStatus'] = $patchStatus;
        return $this;
    }

    /**
    * Gets classification
    *  分类
    *
    * @return string|null
    */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
    * Sets classification
    *
    * @param string|null $classification 分类
    *
    * @return $this
    */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;
        return $this;
    }

    /**
    * Gets severityLevel
    *  严重性级别
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel 严重性级别
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets complianceLevel
    *  合规性级别
    *
    * @return string|null
    */
    public function getComplianceLevel()
    {
        return $this->container['complianceLevel'];
    }

    /**
    * Sets complianceLevel
    *
    * @param string|null $complianceLevel 合规性级别
    *
    * @return $this
    */
    public function setComplianceLevel($complianceLevel)
    {
        $this->container['complianceLevel'] = $complianceLevel;
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

