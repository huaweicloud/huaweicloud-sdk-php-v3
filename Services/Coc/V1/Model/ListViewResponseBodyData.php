<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListViewResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListViewResponseBody_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 资源视图id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
    * managerDomainId  **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    * organizationId  **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
    * organizationUnitIds  **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    * domainIds  **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    * resourceTypes  **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'managerDomainId' => 'string',
            'organizationId' => 'string',
            'organizationUnitIds' => 'string[]',
            'domainIds' => 'string[]',
            'resourceTypes' => 'string[]',
            'viewType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 资源视图id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
    * managerDomainId  **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    * organizationId  **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
    * organizationUnitIds  **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    * domainIds  **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    * resourceTypes  **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'managerDomainId' => null,
        'organizationId' => null,
        'organizationUnitIds' => null,
        'domainIds' => null,
        'resourceTypes' => null,
        'viewType' => null
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
    * id  **参数解释：** 资源视图id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
    * managerDomainId  **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    * organizationId  **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
    * organizationUnitIds  **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    * domainIds  **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    * resourceTypes  **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'managerDomainId' => 'manager_domain_id',
            'organizationId' => 'organization_id',
            'organizationUnitIds' => 'organization_unit_ids',
            'domainIds' => 'domain_ids',
            'resourceTypes' => 'resource_types',
            'viewType' => 'view_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 资源视图id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
    * managerDomainId  **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    * organizationId  **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
    * organizationUnitIds  **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    * domainIds  **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    * resourceTypes  **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'managerDomainId' => 'setManagerDomainId',
            'organizationId' => 'setOrganizationId',
            'organizationUnitIds' => 'setOrganizationUnitIds',
            'domainIds' => 'setDomainIds',
            'resourceTypes' => 'setResourceTypes',
            'viewType' => 'setViewType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 资源视图id。 **取值范围：** 不涉及。
    * name  **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
    * managerDomainId  **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    * organizationId  **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
    * organizationUnitIds  **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    * domainIds  **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    * resourceTypes  **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
    * viewType  **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'managerDomainId' => 'getManagerDomainId',
            'organizationId' => 'getOrganizationId',
            'organizationUnitIds' => 'getOrganizationUnitIds',
            'domainIds' => 'getDomainIds',
            'resourceTypes' => 'getResourceTypes',
            'viewType' => 'getViewType'
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
        $this->container['managerDomainId'] = isset($data['managerDomainId']) ? $data['managerDomainId'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['organizationUnitIds'] = isset($data['organizationUnitIds']) ? $data['organizationUnitIds'] : null;
        $this->container['domainIds'] = isset($data['domainIds']) ? $data['domainIds'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
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
    * Gets id
    *  **参数解释：** 资源视图id。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 资源视图id。 **取值范围：** 不涉及。
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
    *  **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 资源视图名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets managerDomainId
    *  **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getManagerDomainId()
    {
        return $this->container['managerDomainId'];
    }

    /**
    * Sets managerDomainId
    *
    * @param string|null $managerDomainId **参数解释：** 视图创建者的domainId，视图资源聚合的归属者。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setManagerDomainId($managerDomainId)
    {
        $this->container['managerDomainId'] = $managerDomainId;
        return $this;
    }

    /**
    * Gets organizationId
    *  **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
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
    * @param string|null $organizationId **参数解释：** 视图归属的组织id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets organizationUnitIds
    *  **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getOrganizationUnitIds()
    {
        return $this->container['organizationUnitIds'];
    }

    /**
    * Sets organizationUnitIds
    *
    * @param string[]|null $organizationUnitIds **参数解释：** 视图所聚合的组织单元id列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setOrganizationUnitIds($organizationUnitIds)
    {
        $this->container['organizationUnitIds'] = $organizationUnitIds;
        return $this;
    }

    /**
    * Gets domainIds
    *  **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getDomainIds()
    {
        return $this->container['domainIds'];
    }

    /**
    * Sets domainIds
    *
    * @param string[]|null $domainIds **参数解释：** 视图包含的租户账号id列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDomainIds($domainIds)
    {
        $this->container['domainIds'] = $domainIds;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string[]|null $resourceTypes **参数解释：** 视图包含的资源类型列表。 **取值范围：** 不涉及。
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
    *  **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
    * Sets viewType
    *
    * @param string|null $viewType **参数解释：** 视图类型。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setViewType($viewType)
    {
        $this->container['viewType'] = $viewType;
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

