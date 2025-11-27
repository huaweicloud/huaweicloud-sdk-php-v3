<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceViewsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceViewsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationUnitIds  **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    * resourceTypes  **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * organizationId  **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    * name  **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationUnitIds' => 'string[]',
            'resourceTypes' => 'string[]',
            'viewType' => 'string',
            'organizationId' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationUnitIds  **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    * resourceTypes  **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * organizationId  **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    * name  **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationUnitIds' => null,
        'resourceTypes' => null,
        'viewType' => null,
        'organizationId' => null,
        'name' => null
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
    * organizationUnitIds  **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    * resourceTypes  **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * organizationId  **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    * name  **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationUnitIds' => 'organization_unit_ids',
            'resourceTypes' => 'resource_types',
            'viewType' => 'view_type',
            'organizationId' => 'organization_id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationUnitIds  **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    * resourceTypes  **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * organizationId  **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    * name  **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationUnitIds' => 'setOrganizationUnitIds',
            'resourceTypes' => 'setResourceTypes',
            'viewType' => 'setViewType',
            'organizationId' => 'setOrganizationId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationUnitIds  **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    * resourceTypes  **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * organizationId  **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    * name  **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationUnitIds' => 'getOrganizationUnitIds',
            'resourceTypes' => 'getResourceTypes',
            'viewType' => 'getViewType',
            'organizationId' => 'getOrganizationId',
            'name' => 'getName'
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
        $this->container['organizationUnitIds'] = isset($data['organizationUnitIds']) ? $data['organizationUnitIds'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organizationUnitIds'] === null) {
            $invalidProperties[] = "'organizationUnitIds' can't be null";
        }
        if ($this->container['resourceTypes'] === null) {
            $invalidProperties[] = "'resourceTypes' can't be null";
        }
        if ($this->container['viewType'] === null) {
            $invalidProperties[] = "'viewType' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets organizationUnitIds
    *  **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getOrganizationUnitIds()
    {
        return $this->container['organizationUnitIds'];
    }

    /**
    * Sets organizationUnitIds
    *
    * @param string[] $organizationUnitIds **参数解释：** 组织单元id。 **约束限制：** 不涉及。 **取值范围：** 自定义，视图所聚合的组织单元id列表。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOrganizationUnitIds($organizationUnitIds)
    {
        $this->container['organizationUnitIds'] = $organizationUnitIds;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string[] $resourceTypes **参数解释：** 资源类型列表。 **约束限制：** 不涉及。 **取值范围：** 自定义，用户创建视图时，选择的资源，资源对应类别组合成资源类型列表。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
        return $this;
    }

    /**
    * Gets viewType
    *  **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
    * Sets viewType
    *
    * @param string $viewType **参数解释：** 视图类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setViewType($viewType)
    {
        $this->container['viewType'] = $viewType;
        return $this;
    }

    /**
    * Gets organizationId
    *  **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId **参数解释：** 组织ID。 **约束限制：** 不涉及。 **取值范围：** 视图归属的组织id。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 视图名称。 **约束限制：** 不涉及。 **取值范围：** 用户自定义编辑。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

