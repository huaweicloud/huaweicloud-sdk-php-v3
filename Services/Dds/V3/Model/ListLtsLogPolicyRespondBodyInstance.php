<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsLogPolicyRespondBodyInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsLogPolicyRespondBody_instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名字。
    * mode  实例类型，对应单节点，副本集，集群三种。
    * datastore  datastore
    * status  实例状态。
    * enterpriseProjectId  实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    * actions  实例所有正在执行的动作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'mode' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dds\V3\Model\ListLtsLogPolicyRespondBodyInstanceDatastore',
            'status' => 'string',
            'enterpriseProjectId' => 'string',
            'actions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名字。
    * mode  实例类型，对应单节点，副本集，集群三种。
    * datastore  datastore
    * status  实例状态。
    * enterpriseProjectId  实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    * actions  实例所有正在执行的动作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mode' => null,
        'datastore' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'actions' => null
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
    * id  实例ID。
    * name  实例名字。
    * mode  实例类型，对应单节点，副本集，集群三种。
    * datastore  datastore
    * status  实例状态。
    * enterpriseProjectId  实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    * actions  实例所有正在执行的动作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'mode' => 'mode',
            'datastore' => 'datastore',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名字。
    * mode  实例类型，对应单节点，副本集，集群三种。
    * datastore  datastore
    * status  实例状态。
    * enterpriseProjectId  实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    * actions  实例所有正在执行的动作。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'mode' => 'setMode',
            'datastore' => 'setDatastore',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名字。
    * mode  实例类型，对应单节点，副本集，集群三种。
    * datastore  datastore
    * status  实例状态。
    * enterpriseProjectId  实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    * actions  实例所有正在执行的动作。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'mode' => 'getMode',
            'datastore' => 'getDatastore',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'actions' => 'getActions'
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
    const MODE_SINGLE = 'Single';
    const MODE_REPLICA = 'Replica';
    const MODE_SHARDING = 'Sharding';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_SINGLE,
            self::MODE_REPLICA,
            self::MODE_SHARDING,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  实例ID。
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
    * @param string|null $id 实例ID。
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
    *  实例名字。
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
    * @param string|null $name 实例名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型，对应单节点，副本集，集群三种。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 实例类型，对应单节点，副本集，集群三种。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\ListLtsLogPolicyRespondBodyInstanceDatastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\ListLtsLogPolicyRespondBodyInstanceDatastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。
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
    * @param string|null $status 实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 实例归属的企业项目ID，如果是default企业项目，值为0，如果是其他企业项目，请参考企业项目相关内容。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets actions
    *  实例所有正在执行的动作。
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 实例所有正在执行的动作。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

