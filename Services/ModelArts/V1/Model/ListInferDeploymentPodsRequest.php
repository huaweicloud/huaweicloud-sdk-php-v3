<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInferDeploymentPodsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInferDeploymentPodsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * status  **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podId  **参数解释：** pod ID。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'deploymentName' => 'string',
            'name' => 'string',
            'status' => 'string[]',
            'limit' => 'int',
            'offset' => 'string',
            'podName' => 'string',
            'podId' => 'string',
            'podNodeIp' => 'string',
            'podNodeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * status  **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podId  **参数解释：** pod ID。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'deploymentName' => null,
        'name' => null,
        'status' => null,
        'limit' => 'int32',
        'offset' => null,
        'podName' => null,
        'podId' => null,
        'podNodeIp' => null,
        'podNodeName' => null
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
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * status  **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podId  **参数解释：** pod ID。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deploymentName' => 'deployment_name',
            'name' => 'name',
            'status' => 'status',
            'limit' => 'limit',
            'offset' => 'offset',
            'podName' => 'pod_name',
            'podId' => 'pod_id',
            'podNodeIp' => 'pod_node_ip',
            'podNodeName' => 'pod_node_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * status  **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podId  **参数解释：** pod ID。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deploymentName' => 'setDeploymentName',
            'name' => 'setName',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'podName' => 'setPodName',
            'podId' => 'setPodId',
            'podNodeIp' => 'setPodNodeIp',
            'podNodeName' => 'setPodNodeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * deploymentName  **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
    * status  **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podId  **参数解释：** pod ID。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deploymentName' => 'getDeploymentName',
            'name' => 'getName',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'podName' => 'getPodName',
            'podId' => 'getPodId',
            'podNodeIp' => 'getPodNodeIp',
            'podNodeName' => 'getPodNodeName'
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
        $this->container['deploymentName'] = isset($data['deploymentName']) ? $data['deploymentName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podNodeIp'] = isset($data['podNodeIp']) ? $data['podNodeIp'] : null;
        $this->container['podNodeName'] = isset($data['podNodeName']) ? $data['podNodeName'] : null;
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
        if ($this->container['deploymentName'] === null) {
            $invalidProperties[] = "'deploymentName' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
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
    * @param string $id **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets deploymentName
    *  **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getDeploymentName()
    {
        return $this->container['deploymentName'];
    }

    /**
    * Sets deploymentName
    *
    * @param string $deploymentName **参数解释：** 部署名称，在创建部署时即可在返回体中获取，也可通过[查询服务部署列表](ListInferDeployments.xml)获取当前用户拥有的部署，其name字段即为部署名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDeploymentName($deploymentName)
    {
        $this->container['deploymentName'] = $deploymentName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 服务实例名字，可以为all，为all时去查询所有的服务实例。 **约束限制：** 不涉及。 **取值范围：** 服务实例名字。 **默认取值：** 不涉及。
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
    *  **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status **参数解释：** pod状态，一次支持多种状态筛选，多种状态以\",\"连接，不能存在空格。默认不过滤。取值范围有7种RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
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
    * @param int|null $limit **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
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
    *  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
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
    * @param string|null $offset **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释：** pod名字。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName **参数解释：** pod名字。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets podId
    *  **参数解释：** pod ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId **参数解释：** pod ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podNodeIp
    *  **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodNodeIp()
    {
        return $this->container['podNodeIp'];
    }

    /**
    * Sets podNodeIp
    *
    * @param string|null $podNodeIp **参数解释：** pod节点IP地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodNodeIp($podNodeIp)
    {
        $this->container['podNodeIp'] = $podNodeIp;
        return $this;
    }

    /**
    * Gets podNodeName
    *  **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodNodeName()
    {
        return $this->container['podNodeName'];
    }

    /**
    * Sets podNodeName
    *
    * @param string|null $podNodeName **参数解释：** pod节点名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodNodeName($podNodeName)
    {
        $this->container['podNodeName'] = $podNodeName;
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

