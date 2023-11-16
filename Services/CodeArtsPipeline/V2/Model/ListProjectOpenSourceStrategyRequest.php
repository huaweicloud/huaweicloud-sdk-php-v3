<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectOpenSourceStrategyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectOpenSourceStrategyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  策略名称
    * creatorName  策略创建人名称
    * includeTenantRuleSet  是否包含当前项目所属租户的策略
    * limit  分页参数，默认15
    * offset  分页参数，默认0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'creatorName' => 'string',
            'includeTenantRuleSet' => 'bool',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  策略名称
    * creatorName  策略创建人名称
    * includeTenantRuleSet  是否包含当前项目所属租户的策略
    * limit  分页参数，默认15
    * offset  分页参数，默认0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'creatorName' => null,
        'includeTenantRuleSet' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * name  策略名称
    * creatorName  策略创建人名称
    * includeTenantRuleSet  是否包含当前项目所属租户的策略
    * limit  分页参数，默认15
    * offset  分页参数，默认0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'creatorName' => 'creator_name',
            'includeTenantRuleSet' => 'include_tenant_rule_set',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  策略名称
    * creatorName  策略创建人名称
    * includeTenantRuleSet  是否包含当前项目所属租户的策略
    * limit  分页参数，默认15
    * offset  分页参数，默认0
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'creatorName' => 'setCreatorName',
            'includeTenantRuleSet' => 'setIncludeTenantRuleSet',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  策略名称
    * creatorName  策略创建人名称
    * includeTenantRuleSet  是否包含当前项目所属租户的策略
    * limit  分页参数，默认15
    * offset  分页参数，默认0
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'creatorName' => 'getCreatorName',
            'includeTenantRuleSet' => 'getIncludeTenantRuleSet',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['includeTenantRuleSet'] = isset($data['includeTenantRuleSet']) ? $data['includeTenantRuleSet'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  策略名称
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
    * @param string|null $name 策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets creatorName
    *  策略创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 策略创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets includeTenantRuleSet
    *  是否包含当前项目所属租户的策略
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
    * @param bool $includeTenantRuleSet 是否包含当前项目所属租户的策略
    *
    * @return $this
    */
    public function setIncludeTenantRuleSet($includeTenantRuleSet)
    {
        $this->container['includeTenantRuleSet'] = $includeTenantRuleSet;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数，默认15
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
    * @param int|null $limit 分页参数，默认15
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
    *  分页参数，默认0
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
    * @param int|null $offset 分页参数，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

