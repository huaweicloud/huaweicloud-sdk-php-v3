<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTriggerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTriggerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（trigger_mode设置为cci时为空)
    * clusterName  集群名（trigger_mode设置为cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * enable  是否生效
    * name  触发器名
    * triggerMode  触发器类型，cce、cci，默认为cce
    * triggerType  触发条件，all、tag、regular
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'appType' => 'string',
            'application' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'clusterNs' => 'string',
            'condition' => 'string',
            'container' => 'string',
            'enable' => 'string',
            'name' => 'string',
            'triggerMode' => 'string',
            'triggerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（trigger_mode设置为cci时为空)
    * clusterName  集群名（trigger_mode设置为cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * enable  是否生效
    * name  触发器名
    * triggerMode  触发器类型，cce、cci，默认为cce
    * triggerType  触发条件，all、tag、regular
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'appType' => null,
        'application' => null,
        'clusterId' => null,
        'clusterName' => null,
        'clusterNs' => null,
        'condition' => null,
        'container' => null,
        'enable' => null,
        'name' => null,
        'triggerMode' => null,
        'triggerType' => null
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
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（trigger_mode设置为cci时为空)
    * clusterName  集群名（trigger_mode设置为cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * enable  是否生效
    * name  触发器名
    * triggerMode  触发器类型，cce、cci，默认为cce
    * triggerType  触发条件，all、tag、regular
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'appType' => 'app_type',
            'application' => 'application',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'clusterNs' => 'cluster_ns',
            'condition' => 'condition',
            'container' => 'container',
            'enable' => 'enable',
            'name' => 'name',
            'triggerMode' => 'trigger_mode',
            'triggerType' => 'trigger_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（trigger_mode设置为cci时为空)
    * clusterName  集群名（trigger_mode设置为cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * enable  是否生效
    * name  触发器名
    * triggerMode  触发器类型，cce、cci，默认为cce
    * triggerType  触发条件，all、tag、regular
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'appType' => 'setAppType',
            'application' => 'setApplication',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'clusterNs' => 'setClusterNs',
            'condition' => 'setCondition',
            'container' => 'setContainer',
            'enable' => 'setEnable',
            'name' => 'setName',
            'triggerMode' => 'setTriggerMode',
            'triggerType' => 'setTriggerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（trigger_mode设置为cci时为空)
    * clusterName  集群名（trigger_mode设置为cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * enable  是否生效
    * name  触发器名
    * triggerMode  触发器类型，cce、cci，默认为cce
    * triggerType  触发条件，all、tag、regular
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'appType' => 'getAppType',
            'application' => 'getApplication',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'clusterNs' => 'getClusterNs',
            'condition' => 'getCondition',
            'container' => 'getContainer',
            'enable' => 'getEnable',
            'name' => 'getName',
            'triggerMode' => 'getTriggerMode',
            'triggerType' => 'getTriggerType'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterNs'] = isset($data['clusterNs']) ? $data['clusterNs'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['triggerMode'] = isset($data['triggerMode']) ? $data['triggerMode'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['appType'] === null) {
            $invalidProperties[] = "'appType' can't be null";
        }
        if ($this->container['application'] === null) {
            $invalidProperties[] = "'application' can't be null";
        }
        if ($this->container['clusterNs'] === null) {
            $invalidProperties[] = "'clusterNs' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['triggerType'] === null) {
            $invalidProperties[] = "'triggerType' can't be null";
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
    * Gets action
    *  触发动作，update
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 触发动作，update
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets appType
    *  应用类型，deployments、statefulsets
    *
    * @return string
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string $appType 应用类型，deployments、statefulsets
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets application
    *  应用名
    *
    * @return string
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param string $application 应用名
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID（trigger_mode设置为cci时为空)
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID（trigger_mode设置为cci时为空)
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名（trigger_mode设置为cci时为空）
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名（trigger_mode设置为cci时为空）
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterNs
    *  应用名所在的namespace
    *
    * @return string
    */
    public function getClusterNs()
    {
        return $this->container['clusterNs'];
    }

    /**
    * Sets clusterNs
    *
    * @param string $clusterNs 应用名所在的namespace
    *
    * @return $this
    */
    public function setClusterNs($clusterNs)
    {
        $this->container['clusterNs'] = $clusterNs;
        return $this;
    }

    /**
    * Gets condition
    *  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    *
    * @return string
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string $condition 触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets container
    *  需更新的container名，默认为所有container
    *
    * @return string|null
    */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
    * Sets container
    *
    * @param string|null $container 需更新的container名，默认为所有container
    *
    * @return $this
    */
    public function setContainer($container)
    {
        $this->container['container'] = $container;
        return $this;
    }

    /**
    * Gets enable
    *  是否生效
    *
    * @return string
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string $enable 是否生效
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets name
    *  触发器名
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
    * @param string $name 触发器名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets triggerMode
    *  触发器类型，cce、cci，默认为cce
    *
    * @return string|null
    */
    public function getTriggerMode()
    {
        return $this->container['triggerMode'];
    }

    /**
    * Sets triggerMode
    *
    * @param string|null $triggerMode 触发器类型，cce、cci，默认为cce
    *
    * @return $this
    */
    public function setTriggerMode($triggerMode)
    {
        $this->container['triggerMode'] = $triggerMode;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发条件，all、tag、regular
    *
    * @return string
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string $triggerType 触发条件，all、tag、regular
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
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

