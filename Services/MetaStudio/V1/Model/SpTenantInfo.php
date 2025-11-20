<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpTenantInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpTenantInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerProjectId  租户ID
    * customerName  被关联租户的名称。
    * regionId  租户的可用区。
    * resourceCount  分配表记录总数，用于分页。
    * resources  分配给租户的资源。
    * resourcesOverview  分配给租户的资源总览。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerProjectId' => 'string',
            'customerName' => 'string',
            'regionId' => 'string',
            'resourceCount' => 'int',
            'resources' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AllocateSpResourceInfo[]',
            'resourcesOverview' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AllocateSpResourceSummaryInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerProjectId  租户ID
    * customerName  被关联租户的名称。
    * regionId  租户的可用区。
    * resourceCount  分配表记录总数，用于分页。
    * resources  分配给租户的资源。
    * resourcesOverview  分配给租户的资源总览。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerProjectId' => null,
        'customerName' => null,
        'regionId' => null,
        'resourceCount' => null,
        'resources' => null,
        'resourcesOverview' => null
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
    * customerProjectId  租户ID
    * customerName  被关联租户的名称。
    * regionId  租户的可用区。
    * resourceCount  分配表记录总数，用于分页。
    * resources  分配给租户的资源。
    * resourcesOverview  分配给租户的资源总览。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerProjectId' => 'customer_project_id',
            'customerName' => 'customer_name',
            'regionId' => 'region_id',
            'resourceCount' => 'resource_count',
            'resources' => 'resources',
            'resourcesOverview' => 'resources_overview'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerProjectId  租户ID
    * customerName  被关联租户的名称。
    * regionId  租户的可用区。
    * resourceCount  分配表记录总数，用于分页。
    * resources  分配给租户的资源。
    * resourcesOverview  分配给租户的资源总览。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerProjectId' => 'setCustomerProjectId',
            'customerName' => 'setCustomerName',
            'regionId' => 'setRegionId',
            'resourceCount' => 'setResourceCount',
            'resources' => 'setResources',
            'resourcesOverview' => 'setResourcesOverview'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerProjectId  租户ID
    * customerName  被关联租户的名称。
    * regionId  租户的可用区。
    * resourceCount  分配表记录总数，用于分页。
    * resources  分配给租户的资源。
    * resourcesOverview  分配给租户的资源总览。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerProjectId' => 'getCustomerProjectId',
            'customerName' => 'getCustomerName',
            'regionId' => 'getRegionId',
            'resourceCount' => 'getResourceCount',
            'resources' => 'getResources',
            'resourcesOverview' => 'getResourcesOverview'
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
        $this->container['customerProjectId'] = isset($data['customerProjectId']) ? $data['customerProjectId'] : null;
        $this->container['customerName'] = isset($data['customerName']) ? $data['customerName'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceCount'] = isset($data['resourceCount']) ? $data['resourceCount'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['resourcesOverview'] = isset($data['resourcesOverview']) ? $data['resourcesOverview'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['customerProjectId']) && (mb_strlen($this->container['customerProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['customerProjectId']) && (mb_strlen($this->container['customerProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['customerName']) && (mb_strlen($this->container['customerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['customerName']) && (mb_strlen($this->container['customerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceCount']) && ($this->container['resourceCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceCount']) && ($this->container['resourceCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceCount', must be bigger than or equal to 0.";
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
    * Gets customerProjectId
    *  租户ID
    *
    * @return string|null
    */
    public function getCustomerProjectId()
    {
        return $this->container['customerProjectId'];
    }

    /**
    * Sets customerProjectId
    *
    * @param string|null $customerProjectId 租户ID
    *
    * @return $this
    */
    public function setCustomerProjectId($customerProjectId)
    {
        $this->container['customerProjectId'] = $customerProjectId;
        return $this;
    }

    /**
    * Gets customerName
    *  被关联租户的名称。
    *
    * @return string|null
    */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
    * Sets customerName
    *
    * @param string|null $customerName 被关联租户的名称。
    *
    * @return $this
    */
    public function setCustomerName($customerName)
    {
        $this->container['customerName'] = $customerName;
        return $this;
    }

    /**
    * Gets regionId
    *  租户的可用区。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 租户的可用区。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets resourceCount
    *  分配表记录总数，用于分页。
    *
    * @return int|null
    */
    public function getResourceCount()
    {
        return $this->container['resourceCount'];
    }

    /**
    * Sets resourceCount
    *
    * @param int|null $resourceCount 分配表记录总数，用于分页。
    *
    * @return $this
    */
    public function setResourceCount($resourceCount)
    {
        $this->container['resourceCount'] = $resourceCount;
        return $this;
    }

    /**
    * Gets resources
    *  分配给租户的资源。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AllocateSpResourceInfo[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AllocateSpResourceInfo[]|null $resources 分配给租户的资源。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets resourcesOverview
    *  分配给租户的资源总览。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AllocateSpResourceSummaryInfo[]|null
    */
    public function getResourcesOverview()
    {
        return $this->container['resourcesOverview'];
    }

    /**
    * Sets resourcesOverview
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AllocateSpResourceSummaryInfo[]|null $resourcesOverview 分配给租户的资源总览。
    *
    * @return $this
    */
    public function setResourcesOverview($resourcesOverview)
    {
        $this->container['resourcesOverview'] = $resourcesOverview;
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

