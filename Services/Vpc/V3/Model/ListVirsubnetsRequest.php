<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVirsubnetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVirsubnetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
    * id  **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * name  **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * scope  **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * zoneId  **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    * description  **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'name' => 'string[]',
            'vpcId' => 'string[]',
            'status' => 'string',
            'scope' => 'string[]',
            'zoneId' => 'string[]',
            'description' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
    * id  **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * name  **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * scope  **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * zoneId  **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    * description  **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'vpcId' => null,
        'status' => null,
        'scope' => null,
        'zoneId' => null,
        'description' => null
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
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
    * id  **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * name  **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * scope  **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * zoneId  **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    * description  **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'vpcId' => 'vpc_id',
            'status' => 'status',
            'scope' => 'scope',
            'zoneId' => 'zone_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
    * id  **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * name  **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * scope  **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * zoneId  **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    * description  **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'vpcId' => 'setVpcId',
            'status' => 'setStatus',
            'scope' => 'setScope',
            'zoneId' => 'setZoneId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000。
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
    * id  **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * name  **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * status  **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    * scope  **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    * zoneId  **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    * description  **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'vpcId' => 'getVpcId',
            'status' => 'getStatus',
            'scope' => 'getScope',
            'zoneId' => 'getZoneId',
            'description' => 'getDescription'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets projectId
    *  **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 子网所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    *  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
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
    * @param string|null $marker **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网的资源ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
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
    * @param string[]|null $id **参数解释**： 子网的资源ID，填写后按照ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
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
    *  **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
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
    * @param string[]|null $name **参数解释**： 子网的名称，填写后按照名称进行过滤，支持传入多个名称过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
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
    * @param string[]|null $vpcId **参数解释**： 子网所在VPC的资源ID，填写后按照VPC资源ID进行过滤，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
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
    * @param string|null $status **参数解释**： 子网的状态，填写后按照状态进行过滤，只支持传入单个状态过滤。 **取值范围**： - ACTIVE：表示子网已挂载到VPC上。 - UNKNOWN：表示子网还未挂载到VPC上。 - ERROR：表示子网状态故障。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    *
    * @return string[]|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string[]|null $scope **参数解释**： 子网的作用域，填写后按照作用域进行过滤，支持传入多个作用域过滤。 **取值范围**： - center：表示作用域为中心。 - {publicBorderGroup}：表示作用域为具体的公网边界组。公网边界组限制子网的可用区范围，可关联多个边缘可用区。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets zoneId
    *  **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    *
    * @return string[]|null
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string[]|null $zoneId **参数解释**： 子网的可用区ID，填写后按照可用区ID进行过滤，支持传入多个可用区ID过滤。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description **参数解释**： 子网的描述信息，填写后按照描述信息进行过滤，支持传入多个描述信息过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

