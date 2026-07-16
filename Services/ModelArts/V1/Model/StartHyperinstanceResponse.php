<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartHyperinstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartHyperinstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * hpsId  **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * id  **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * orderId  **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * status  **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
    * servers  **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * updateAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'int',
            'hpsClusterId' => 'string',
            'hpsId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'orderId' => 'string',
            'status' => 'string',
            'servers' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerResponse[]',
            'updateAt' => 'int',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * hpsId  **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * id  **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * orderId  **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * status  **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
    * servers  **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * updateAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => 'int64',
        'hpsClusterId' => null,
        'hpsId' => null,
        'id' => null,
        'name' => null,
        'orderId' => null,
        'status' => null,
        'servers' => null,
        'updateAt' => 'int64',
        'xRequestId' => null
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
    * createAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * hpsId  **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * id  **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * orderId  **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * status  **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
    * servers  **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * updateAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'create_at',
            'hpsClusterId' => 'hps_cluster_id',
            'hpsId' => 'hps_id',
            'id' => 'id',
            'name' => 'name',
            'orderId' => 'order_id',
            'status' => 'status',
            'servers' => 'servers',
            'updateAt' => 'update_at',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * hpsId  **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * id  **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * orderId  **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * status  **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
    * servers  **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * updateAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'hpsClusterId' => 'setHpsClusterId',
            'hpsId' => 'setHpsId',
            'id' => 'setId',
            'name' => 'setName',
            'orderId' => 'setOrderId',
            'status' => 'setStatus',
            'servers' => 'setServers',
            'updateAt' => 'setUpdateAt',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * hpsId  **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * id  **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * orderId  **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    * status  **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
    * servers  **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * updateAt  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'hpsClusterId' => 'getHpsClusterId',
            'hpsId' => 'getHpsId',
            'id' => 'getId',
            'name' => 'getName',
            'orderId' => 'getOrderId',
            'status' => 'getStatus',
            'servers' => 'getServers',
            'updateAt' => 'getUpdateAt',
            'xRequestId' => 'getXRequestId'
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
    const STATUS_PROVISIONING = 'PROVISIONING';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ERROR = 'ERROR';
    const STATUS_REIMAGING = 'REIMAGING';
    const STATUS_TERMINATING = 'TERMINATING';
    const STATUS_TERMINATED = 'TERMINATED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROVISIONING,
            self::STATUS_ACTIVE,
            self::STATUS_ERROR,
            self::STATUS_REIMAGING,
            self::STATUS_TERMINATING,
            self::STATUS_TERMINATED,
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['hpsClusterId'] = isset($data['hpsClusterId']) ? $data['hpsClusterId'] : null;
        $this->container['hpsId'] = isset($data['hpsId']) ? $data['hpsId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] > 4102376399000)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 4102376399000.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] < 2147483647)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 2147483647.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['updateAt']) && ($this->container['updateAt'] > 4102376399000)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be smaller than or equal to 4102376399000.";
            }
            if (!is_null($this->container['updateAt']) && ($this->container['updateAt'] < 2147483647)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be bigger than or equal to 2147483647.";
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
    * Gets createAt
    *  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets hpsClusterId
    *  **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHpsClusterId()
    {
        return $this->container['hpsClusterId'];
    }

    /**
    * Sets hpsClusterId
    *
    * @param string|null $hpsClusterId **参数解释**：超节点集群网络ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHpsClusterId($hpsClusterId)
    {
        $this->container['hpsClusterId'] = $hpsClusterId;
        return $this;
    }

    /**
    * Gets hpsId
    *  **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHpsId()
    {
        return $this->container['hpsId'];
    }

    /**
    * Sets hpsId
    *
    * @param string|null $hpsId **参数解释**：超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHpsId($hpsId)
    {
        $this->container['hpsId'] = $hpsId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
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
    * @param string|null $id **参数解释**：Lite Server超节点ID。 **约束限制**：不涉及。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。 **默认取值**：不涉及。
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
    *  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
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
    * @param string|null $name **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets orderId
    *  **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId **参数解释**：订单ID。 **约束限制**：不涉及。 **取值范围**：^[a-zA-Z0-9]{1,64}$。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
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
    * @param string|null $status **参数解释**：超节点实例状态。 **约束限制**：不涉及。 **取值范围**： - PROVISIONING：超节点的创建请求已被接受，但是仍在创建过程中； - ACTIVE：超节点处于活动状态，其资源可被使用； - ERROR：超节点创建失败； - REIMAGING：超节点切换操作系统中； - TERMINATING：资源释放中； - TERMINATED：超节点资源已经被释放，其资源不再可用。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets servers
    *  **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerResponse[]|null
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerResponse[]|null $servers **参数解释**：超节点子节点实例列表。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释**：创建时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

