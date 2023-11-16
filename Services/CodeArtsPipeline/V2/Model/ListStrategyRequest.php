<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStrategyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStrategyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户ID
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量
    * includeTenantRuleSet  是否包含租户级规则
    * name  策略名称，用于模糊查询
    * isValid  是否有效
    * type  规则集类型
    * cloudProjectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'includeTenantRuleSet' => 'bool',
            'name' => 'string',
            'isValid' => 'bool',
            'type' => 'string',
            'cloudProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户ID
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量
    * includeTenantRuleSet  是否包含租户级规则
    * name  策略名称，用于模糊查询
    * isValid  是否有效
    * type  规则集类型
    * cloudProjectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'includeTenantRuleSet' => null,
        'name' => null,
        'isValid' => null,
        'type' => null,
        'cloudProjectId' => null
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
    * domainId  租户ID
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量
    * includeTenantRuleSet  是否包含租户级规则
    * name  策略名称，用于模糊查询
    * isValid  是否有效
    * type  规则集类型
    * cloudProjectId  项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'includeTenantRuleSet' => 'include_tenant_rule_set',
            'name' => 'name',
            'isValid' => 'is_valid',
            'type' => 'type',
            'cloudProjectId' => 'cloud_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户ID
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量
    * includeTenantRuleSet  是否包含租户级规则
    * name  策略名称，用于模糊查询
    * isValid  是否有效
    * type  规则集类型
    * cloudProjectId  项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'includeTenantRuleSet' => 'setIncludeTenantRuleSet',
            'name' => 'setName',
            'isValid' => 'setIsValid',
            'type' => 'setType',
            'cloudProjectId' => 'setCloudProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户ID
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0
    * limit  每页显示的条目数量
    * includeTenantRuleSet  是否包含租户级规则
    * name  策略名称，用于模糊查询
    * isValid  是否有效
    * type  规则集类型
    * cloudProjectId  项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'includeTenantRuleSet' => 'getIncludeTenantRuleSet',
            'name' => 'getName',
            'isValid' => 'getIsValid',
            'type' => 'getType',
            'cloudProjectId' => 'getCloudProjectId'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['includeTenantRuleSet'] = isset($data['includeTenantRuleSet']) ? $data['includeTenantRuleSet'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cloudProjectId'] = isset($data['cloudProjectId']) ? $data['cloudProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['includeTenantRuleSet'] === null) {
            $invalidProperties[] = "'includeTenantRuleSet' can't be null";
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
    * Gets domainId
    *  租户ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，offset大于等于0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量，表示从此偏移量开始查询，offset大于等于0
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
    *  每页显示的条目数量
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示的条目数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets includeTenantRuleSet
    *  是否包含租户级规则
    *
    * @return bool
    */
    public function getIncludeTenantRuleSet()
    {
        return $this->container['includeTenantRuleSet'];
    }

    /**
    * Sets includeTenantRuleSet
    *
    * @param bool $includeTenantRuleSet 是否包含租户级规则
    *
    * @return $this
    */
    public function setIncludeTenantRuleSet($includeTenantRuleSet)
    {
        $this->container['includeTenantRuleSet'] = $includeTenantRuleSet;
        return $this;
    }

    /**
    * Gets name
    *  策略名称，用于模糊查询
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
    * @param string|null $name 策略名称，用于模糊查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isValid
    *  是否有效
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid 是否有效
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets type
    *  规则集类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 规则集类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cloudProjectId
    *  项目ID
    *
    * @return string|null
    */
    public function getCloudProjectId()
    {
        return $this->container['cloudProjectId'];
    }

    /**
    * Sets cloudProjectId
    *
    * @param string|null $cloudProjectId 项目ID
    *
    * @return $this
    */
    public function setCloudProjectId($cloudProjectId)
    {
        $this->container['cloudProjectId'] = $cloudProjectId;
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

