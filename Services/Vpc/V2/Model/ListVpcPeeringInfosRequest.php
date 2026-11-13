<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpcPeeringInfosRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpcPeeringInfosRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
    * name  **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    * tenantId  **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string[]',
            'limit' => 'int',
            'marker' => 'string',
            'name' => 'string[]',
            'status' => 'string',
            'tenantId' => 'string',
            'vpcId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
    * name  **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    * tenantId  **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'limit' => 'int32',
        'marker' => null,
        'name' => null,
        'status' => null,
        'tenantId' => null,
        'vpcId' => null
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
    * id  **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
    * name  **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    * tenantId  **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'limit' => 'limit',
            'marker' => 'marker',
            'name' => 'name',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
    * name  **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    * tenantId  **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'name' => 'setName',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
    * name  **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    * tenantId  **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'name' => 'getName',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'vpcId' => 'getVpcId'
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
    const STATUS_PENDING_ACCEPTANCE = 'PENDING_ACCEPTANCE';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_DELETED = 'DELETED';
    const STATUS_ACTIVE = 'ACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_ACCEPTANCE,
            self::STATUS_REJECTED,
            self::STATUS_EXPIRED,
            self::STATUS_DELETED,
            self::STATUS_ACTIVE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tenantId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets id
    *  **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id **参数解释**： 对等连接的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
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
    * @param int|null $limit **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
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
    *  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
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
    * @param string|null $marker **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 对等连接的资源ID。
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
    *  **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name **参数解释**： 对等连接的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 对等连接的状态，填写后按照状态进行过滤。 **取值范围**： - PENDING_ACCEPTANCE：等待接受 - REJECTED：已拒绝。 - EXPIRED：已过期。 - DELETED：已删除。 - ACTIVE：生效的。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释**： 对等连接的项目ID，填写后按照项目ID进行过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string[]|null $vpcId **参数解释**： 对等连接两端的VPC ID，填写后按照VPC ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

