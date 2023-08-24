<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerHistories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerHistories';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（cci时为空）
    * clusterName  集群名（cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * createdAt  创建时间
    * creatorName  创建人
    * detail  详情
    * result  更新结果，success、failed
    * tag  触发的版本号
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
            'createdAt' => 'string',
            'creatorName' => 'string',
            'detail' => 'string',
            'result' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（cci时为空）
    * clusterName  集群名（cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * createdAt  创建时间
    * creatorName  创建人
    * detail  详情
    * result  更新结果，success、failed
    * tag  触发的版本号
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
        'createdAt' => null,
        'creatorName' => null,
        'detail' => null,
        'result' => null,
        'tag' => null
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
    * clusterId  集群ID（cci时为空）
    * clusterName  集群名（cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * createdAt  创建时间
    * creatorName  创建人
    * detail  详情
    * result  更新结果，success、failed
    * tag  触发的版本号
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
            'createdAt' => 'created_at',
            'creatorName' => 'creator_name',
            'detail' => 'detail',
            'result' => 'result',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（cci时为空）
    * clusterName  集群名（cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * createdAt  创建时间
    * creatorName  创建人
    * detail  详情
    * result  更新结果，success、failed
    * tag  触发的版本号
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
            'createdAt' => 'setCreatedAt',
            'creatorName' => 'setCreatorName',
            'detail' => 'setDetail',
            'result' => 'setResult',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  触发动作，update
    * appType  应用类型，deployments、statefulsets
    * application  应用名
    * clusterId  集群ID（cci时为空）
    * clusterName  集群名（cci时为空）
    * clusterNs  应用名所在的namespace
    * condition  触发条件，type为all时为.*,type为tag时为tag名,type为regular时为正则表达式
    * container  需更新的container名，默认为所有container
    * createdAt  创建时间
    * creatorName  创建人
    * detail  详情
    * result  更新结果，success、failed
    * tag  触发的版本号
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
            'createdAt' => 'getCreatedAt',
            'creatorName' => 'getCreatorName',
            'detail' => 'getDetail',
            'result' => 'getResult',
            'tag' => 'getTag'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
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
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
        if ($this->container['clusterNs'] === null) {
            $invalidProperties[] = "'clusterNs' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['container'] === null) {
            $invalidProperties[] = "'container' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['creatorName'] === null) {
            $invalidProperties[] = "'creatorName' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
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
    *  集群ID（cci时为空）
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID（cci时为空）
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
    *  集群名（cci时为空）
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名（cci时为空）
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
    * @return string
    */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
    * Sets container
    *
    * @param string $container 需更新的container名，默认为所有container
    *
    * @return $this
    */
    public function setContainer($container)
    {
        $this->container['container'] = $container;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人
    *
    * @return string
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string $creatorName 创建人
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets detail
    *  详情
    *
    * @return string
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string $detail 详情
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets result
    *  更新结果，success、failed
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 更新结果，success、failed
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets tag
    *  触发的版本号
    *
    * @return string
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string $tag 触发的版本号
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

