<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrafficMirrorFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrafficMirrorFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：流量镜像筛选条件ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * name  功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * ingressRules  功能说明：入方向筛选规则列表
    * egressRules  功能说明：出方向筛选规则列表
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    * type  参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'description' => 'string',
            'name' => 'string',
            'ingressRules' => '\HuaweiCloud\SDK\Vpc\V3\Model\TrafficMirrorFilterRule[]',
            'egressRules' => '\HuaweiCloud\SDK\Vpc\V3\Model\TrafficMirrorFilterRule[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：流量镜像筛选条件ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * name  功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * ingressRules  功能说明：入方向筛选规则列表
    * egressRules  功能说明：出方向筛选规则列表
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    * type  参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'description' => null,
        'name' => null,
        'ingressRules' => null,
        'egressRules' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'type' => null
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
    * id  功能说明：流量镜像筛选条件ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * name  功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * ingressRules  功能说明：入方向筛选规则列表
    * egressRules  功能说明：出方向筛选规则列表
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    * type  参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'description' => 'description',
            'name' => 'name',
            'ingressRules' => 'ingress_rules',
            'egressRules' => 'egress_rules',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：流量镜像筛选条件ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * name  功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * ingressRules  功能说明：入方向筛选规则列表
    * egressRules  功能说明：出方向筛选规则列表
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    * type  参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'description' => 'setDescription',
            'name' => 'setName',
            'ingressRules' => 'setIngressRules',
            'egressRules' => 'setEgressRules',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：流量镜像筛选条件ID
    * projectId  功能说明：项目ID
    * description  功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * name  功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * ingressRules  功能说明：入方向筛选规则列表
    * egressRules  功能说明：出方向筛选规则列表
    * createdAt  创建时间戳
    * updatedAt  更新时间戳
    * type  参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'description' => 'getDescription',
            'name' => 'getName',
            'ingressRules' => 'getIngressRules',
            'egressRules' => 'getEgressRules',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'type' => 'getType'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ingressRules'] = isset($data['ingressRules']) ? $data['ingressRules'] : null;
        $this->container['egressRules'] = isset($data['egressRules']) ? $data['egressRules'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ingressRules'] === null) {
            $invalidProperties[] = "'ingressRules' can't be null";
        }
        if ($this->container['egressRules'] === null) {
            $invalidProperties[] = "'egressRules' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    *  功能说明：流量镜像筛选条件ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 功能说明：流量镜像筛选条件ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：项目ID
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
    * @param string $projectId 功能说明：项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 功能说明：流量镜像筛选条件的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：流量镜像筛选条件的名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ingressRules
    *  功能说明：入方向筛选规则列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\TrafficMirrorFilterRule[]
    */
    public function getIngressRules()
    {
        return $this->container['ingressRules'];
    }

    /**
    * Sets ingressRules
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\TrafficMirrorFilterRule[] $ingressRules 功能说明：入方向筛选规则列表
    *
    * @return $this
    */
    public function setIngressRules($ingressRules)
    {
        $this->container['ingressRules'] = $ingressRules;
        return $this;
    }

    /**
    * Gets egressRules
    *  功能说明：出方向筛选规则列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\TrafficMirrorFilterRule[]
    */
    public function getEgressRules()
    {
        return $this->container['egressRules'];
    }

    /**
    * Sets egressRules
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\TrafficMirrorFilterRule[] $egressRules 功能说明：出方向筛选规则列表
    *
    * @return $this
    */
    public function setEgressRules($egressRules)
    {
        $this->container['egressRules'] = $egressRules;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间戳
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建时间戳
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间戳
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 更新时间戳
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets type
    *  参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 参数解释： 流量镜像筛选条件的镜像源类型。 取值范围： eni：弹性网卡
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

