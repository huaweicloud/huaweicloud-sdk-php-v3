<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRecycleBinServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRecycleBinServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allTenants  所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    * availabilityZone  availabilityZone
    * expectFields  expectFields
    * ipAddress  ipAddress
    * limit  limit
    * marker  marker
    * name  name
    * offset  offset
    * tags  tags
    * tagsKey  tagsKey
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allTenants' => 'string',
            'availabilityZone' => 'string',
            'expectFields' => 'string',
            'ipAddress' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'name' => 'string',
            'offset' => 'string',
            'tags' => 'string[]',
            'tagsKey' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allTenants  所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    * availabilityZone  availabilityZone
    * expectFields  expectFields
    * ipAddress  ipAddress
    * limit  limit
    * marker  marker
    * name  name
    * offset  offset
    * tags  tags
    * tagsKey  tagsKey
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allTenants' => null,
        'availabilityZone' => null,
        'expectFields' => null,
        'ipAddress' => null,
        'limit' => 'int32',
        'marker' => null,
        'name' => null,
        'offset' => null,
        'tags' => null,
        'tagsKey' => null
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
    * allTenants  所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    * availabilityZone  availabilityZone
    * expectFields  expectFields
    * ipAddress  ipAddress
    * limit  limit
    * marker  marker
    * name  name
    * offset  offset
    * tags  tags
    * tagsKey  tagsKey
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allTenants' => 'all_tenants',
            'availabilityZone' => 'availability_zone',
            'expectFields' => 'expect-fields',
            'ipAddress' => 'ip_address',
            'limit' => 'limit',
            'marker' => 'marker',
            'name' => 'name',
            'offset' => 'offset',
            'tags' => 'tags',
            'tagsKey' => 'tags_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allTenants  所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    * availabilityZone  availabilityZone
    * expectFields  expectFields
    * ipAddress  ipAddress
    * limit  limit
    * marker  marker
    * name  name
    * offset  offset
    * tags  tags
    * tagsKey  tagsKey
    *
    * @var string[]
    */
    protected static $setters = [
            'allTenants' => 'setAllTenants',
            'availabilityZone' => 'setAvailabilityZone',
            'expectFields' => 'setExpectFields',
            'ipAddress' => 'setIpAddress',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'name' => 'setName',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'tagsKey' => 'setTagsKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allTenants  所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    * availabilityZone  availabilityZone
    * expectFields  expectFields
    * ipAddress  ipAddress
    * limit  limit
    * marker  marker
    * name  name
    * offset  offset
    * tags  tags
    * tagsKey  tagsKey
    *
    * @var string[]
    */
    protected static $getters = [
            'allTenants' => 'getAllTenants',
            'availabilityZone' => 'getAvailabilityZone',
            'expectFields' => 'getExpectFields',
            'ipAddress' => 'getIpAddress',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'name' => 'getName',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'tagsKey' => 'getTagsKey'
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
    const EXPECT_FIELDS_AVAILABLE_VALUES__POWER_STATE = 'Available values : power_state';
    const EXPECT_FIELDS_HOST_STATUS = 'host_status';
    const EXPECT_FIELDS_HOSTNAME = 'hostname';
    const EXPECT_FIELDS_HYPERVISOR_HOSTNAME = 'hypervisor_hostname';
    const EXPECT_FIELDS_USER_DATA = 'user_data';
    const EXPECT_FIELDS_KEY_NAME = 'key_name';
    const EXPECT_FIELDS_ROOT_DEVICE_NAME = 'root_device_name';
    const EXPECT_FIELDS_VOLUMES_ATTACHED = 'volumes_attached';
    const EXPECT_FIELDS_SECURITY_GROUPS = 'security_groups';
    const EXPECT_FIELDS_ADDRESSES = 'addresses';
    const EXPECT_FIELDS_IMAGE = 'image';
    const EXPECT_FIELDS_METADATA = 'metadata';
    const EXPECT_FIELDS_TAGS = 'tags';
    const EXPECT_FIELDS_SYSTEM_TAGS = 'system_tags';
    const EXPECT_FIELDS_DEDICATED_HOST_ID = 'dedicated_host_id';
    const EXPECT_FIELDS_ENTERPRISE_PROJECT_ID = 'enterprise_project_id';
    const EXPECT_FIELDS_CPU_OPTIONS = 'cpu_options';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExpectFieldsAllowableValues()
    {
        return [
            self::EXPECT_FIELDS_AVAILABLE_VALUES__POWER_STATE,
            self::EXPECT_FIELDS_HOST_STATUS,
            self::EXPECT_FIELDS_HOSTNAME,
            self::EXPECT_FIELDS_HYPERVISOR_HOSTNAME,
            self::EXPECT_FIELDS_USER_DATA,
            self::EXPECT_FIELDS_KEY_NAME,
            self::EXPECT_FIELDS_ROOT_DEVICE_NAME,
            self::EXPECT_FIELDS_VOLUMES_ATTACHED,
            self::EXPECT_FIELDS_SECURITY_GROUPS,
            self::EXPECT_FIELDS_ADDRESSES,
            self::EXPECT_FIELDS_IMAGE,
            self::EXPECT_FIELDS_METADATA,
            self::EXPECT_FIELDS_TAGS,
            self::EXPECT_FIELDS_SYSTEM_TAGS,
            self::EXPECT_FIELDS_DEDICATED_HOST_ID,
            self::EXPECT_FIELDS_ENTERPRISE_PROJECT_ID,
            self::EXPECT_FIELDS_CPU_OPTIONS,
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
        $this->container['allTenants'] = isset($data['allTenants']) ? $data['allTenants'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['expectFields'] = isset($data['expectFields']) ? $data['expectFields'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tagsKey'] = isset($data['tagsKey']) ? $data['tagsKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getExpectFieldsAllowableValues();
                if (!is_null($this->container['expectFields']) && !in_array($this->container['expectFields'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'expectFields', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
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
    * Gets allTenants
    *  所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    *
    * @return string|null
    */
    public function getAllTenants()
    {
        return $this->container['allTenants'];
    }

    /**
    * Sets allTenants
    *
    * @param string|null $allTenants 所有租户 管理员字段 1: 返回所有租户的VM 0: 返回当前租户的VM，如果为0，与不设置该查询字段的效果一致
    *
    * @return $this
    */
    public function setAllTenants($allTenants)
    {
        $this->container['allTenants'] = $allTenants;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  availabilityZone
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone availabilityZone
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets expectFields
    *  expectFields
    *
    * @return string|null
    */
    public function getExpectFields()
    {
        return $this->container['expectFields'];
    }

    /**
    * Sets expectFields
    *
    * @param string|null $expectFields expectFields
    *
    * @return $this
    */
    public function setExpectFields($expectFields)
    {
        $this->container['expectFields'] = $expectFields;
        return $this;
    }

    /**
    * Gets ipAddress
    *  ipAddress
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress ipAddress
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  marker
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker marker
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  tags
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tagsKey
    *  tagsKey
    *
    * @return string[]|null
    */
    public function getTagsKey()
    {
        return $this->container['tagsKey'];
    }

    /**
    * Sets tagsKey
    *
    * @param string[]|null $tagsKey tagsKey
    *
    * @return $this
    */
    public function setTagsKey($tagsKey)
    {
        $this->container['tagsKey'] = $tagsKey;
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

