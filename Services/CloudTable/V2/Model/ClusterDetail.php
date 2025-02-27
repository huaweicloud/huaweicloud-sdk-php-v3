<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionProgress  actionProgress
    * actions  集群操作记录
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionProgress' => '\HuaweiCloud\SDK\CloudTable\V2\Model\ActionProgress',
            'actions' => 'string[]',
            'authMode' => 'string',
            'azCode' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'created' => 'string',
            'enableDfv' => 'string',
            'enableFree' => 'string',
            'enableLemon' => 'string',
            'enableOpenTsdb' => 'string',
            'status' => 'string',
            'tags' => 'string',
            'version' => 'string',
            'zookeeperLink' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionProgress  actionProgress
    * actions  集群操作记录
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionProgress' => null,
        'actions' => null,
        'authMode' => null,
        'azCode' => null,
        'clusterId' => null,
        'clusterName' => null,
        'created' => null,
        'enableDfv' => null,
        'enableFree' => null,
        'enableLemon' => null,
        'enableOpenTsdb' => null,
        'status' => null,
        'tags' => null,
        'version' => null,
        'zookeeperLink' => null
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
    * actionProgress  actionProgress
    * actions  集群操作记录
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionProgress' => 'action_progress',
            'actions' => 'actions',
            'authMode' => 'auth_mode',
            'azCode' => 'az_code',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'created' => 'created',
            'enableDfv' => 'enable_dfv',
            'enableFree' => 'enable_free',
            'enableLemon' => 'enable_lemon',
            'enableOpenTsdb' => 'enable_openTSDB',
            'status' => 'status',
            'tags' => 'tags',
            'version' => 'version',
            'zookeeperLink' => 'zookeeper_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionProgress  actionProgress
    * actions  集群操作记录
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $setters = [
            'actionProgress' => 'setActionProgress',
            'actions' => 'setActions',
            'authMode' => 'setAuthMode',
            'azCode' => 'setAzCode',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'created' => 'setCreated',
            'enableDfv' => 'setEnableDfv',
            'enableFree' => 'setEnableFree',
            'enableLemon' => 'setEnableLemon',
            'enableOpenTsdb' => 'setEnableOpenTsdb',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'version' => 'setVersion',
            'zookeeperLink' => 'setZookeeperLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionProgress  actionProgress
    * actions  集群操作记录
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $getters = [
            'actionProgress' => 'getActionProgress',
            'actions' => 'getActions',
            'authMode' => 'getAuthMode',
            'azCode' => 'getAzCode',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'created' => 'getCreated',
            'enableDfv' => 'getEnableDfv',
            'enableFree' => 'getEnableFree',
            'enableLemon' => 'getEnableLemon',
            'enableOpenTsdb' => 'getEnableOpenTsdb',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'version' => 'getVersion',
            'zookeeperLink' => 'getZookeeperLink'
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
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['authMode'] = isset($data['authMode']) ? $data['authMode'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['enableDfv'] = isset($data['enableDfv']) ? $data['enableDfv'] : null;
        $this->container['enableFree'] = isset($data['enableFree']) ? $data['enableFree'] : null;
        $this->container['enableLemon'] = isset($data['enableLemon']) ? $data['enableLemon'] : null;
        $this->container['enableOpenTsdb'] = isset($data['enableOpenTsdb']) ? $data['enableOpenTsdb'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['zookeeperLink'] = isset($data['zookeeperLink']) ? $data['zookeeperLink'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets actionProgress
    *  actionProgress
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\ActionProgress|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\ActionProgress|null $actionProgress actionProgress
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets actions
    *  集群操作记录
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
    * @param string[]|null $actions 集群操作记录
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets authMode
    *  是否开启IAM权限认证。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getAuthMode()
    {
        return $this->container['authMode'];
    }

    /**
    * Sets authMode
    *
    * @param string|null $authMode 是否开启IAM权限认证。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setAuthMode($authMode)
    {
        $this->container['authMode'] = $authMode;
        return $this;
    }

    /**
    * Gets azCode
    *  集群所在的可用区（AZ)。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 集群所在的可用区（AZ)。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID，集群唯一标识。
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
    * @param string|null $clusterId 集群ID，集群唯一标识。
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
    *  CloudTable集群名称。
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
    * @param string|null $clusterName CloudTable集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets created
    *  集群创建时间。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 集群创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets enableDfv
    *  是否开启DFV。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getEnableDfv()
    {
        return $this->container['enableDfv'];
    }

    /**
    * Sets enableDfv
    *
    * @param string|null $enableDfv 是否开启DFV。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableDfv($enableDfv)
    {
        $this->container['enableDfv'] = $enableDfv;
        return $this;
    }

    /**
    * Gets enableFree
    *  集群是否免费。 - false：不免费 - true：免费
    *
    * @return string|null
    */
    public function getEnableFree()
    {
        return $this->container['enableFree'];
    }

    /**
    * Sets enableFree
    *
    * @param string|null $enableFree 集群是否免费。 - false：不免费 - true：免费
    *
    * @return $this
    */
    public function setEnableFree($enableFree)
    {
        $this->container['enableFree'] = $enableFree;
        return $this;
    }

    /**
    * Gets enableLemon
    *  是否开启Lemon。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getEnableLemon()
    {
        return $this->container['enableLemon'];
    }

    /**
    * Sets enableLemon
    *
    * @param string|null $enableLemon 是否开启Lemon。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableLemon($enableLemon)
    {
        $this->container['enableLemon'] = $enableLemon;
        return $this;
    }

    /**
    * Gets enableOpenTsdb
    *  是否开启OpenTSDB。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getEnableOpenTsdb()
    {
        return $this->container['enableOpenTsdb'];
    }

    /**
    * Sets enableOpenTsdb
    *
    * @param string|null $enableOpenTsdb 是否开启OpenTSDB。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableOpenTsdb($enableOpenTsdb)
    {
        $this->container['enableOpenTsdb'] = $enableOpenTsdb;
        return $this;
    }

    /**
    * Gets status
    *  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
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
    * @param string|null $status 集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  集群标识符。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 集群标识符。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets version
    *  集群版本号。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 集群版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets zookeeperLink
    *  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @return string|null
    */
    public function getZookeeperLink()
    {
        return $this->container['zookeeperLink'];
    }

    /**
    * Sets zookeeperLink
    *
    * @param string|null $zookeeperLink CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @return $this
    */
    public function setZookeeperLink($zookeeperLink)
    {
        $this->container['zookeeperLink'] = $zookeeperLink;
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

