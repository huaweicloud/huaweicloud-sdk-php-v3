<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceTopologyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceTopologyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisServer  **参数解释**： 集群角色：redis-server实例拓朴图。
    * clusterLvs  **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterAdmin  **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterProxy  **参数解释**： 集群角色：proxy实例拓朴图。
    * master  **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    * vpcendpoint  **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    * elb  **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisServer' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]',
            'clusterLvs' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]',
            'clusterAdmin' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]',
            'clusterProxy' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]',
            'master' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]',
            'vpcendpoint' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]',
            'elb' => '\HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisServer  **参数解释**： 集群角色：redis-server实例拓朴图。
    * clusterLvs  **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterAdmin  **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterProxy  **参数解释**： 集群角色：proxy实例拓朴图。
    * master  **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    * vpcendpoint  **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    * elb  **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisServer' => null,
        'clusterLvs' => null,
        'clusterAdmin' => null,
        'clusterProxy' => null,
        'master' => null,
        'vpcendpoint' => null,
        'elb' => null
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
    * redisServer  **参数解释**： 集群角色：redis-server实例拓朴图。
    * clusterLvs  **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterAdmin  **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterProxy  **参数解释**： 集群角色：proxy实例拓朴图。
    * master  **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    * vpcendpoint  **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    * elb  **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisServer' => 'redis_server',
            'clusterLvs' => 'cluster_lvs',
            'clusterAdmin' => 'cluster_admin',
            'clusterProxy' => 'cluster_proxy',
            'master' => 'master',
            'vpcendpoint' => 'vpcendpoint',
            'elb' => 'elb'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisServer  **参数解释**： 集群角色：redis-server实例拓朴图。
    * clusterLvs  **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterAdmin  **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterProxy  **参数解释**： 集群角色：proxy实例拓朴图。
    * master  **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    * vpcendpoint  **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    * elb  **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'redisServer' => 'setRedisServer',
            'clusterLvs' => 'setClusterLvs',
            'clusterAdmin' => 'setClusterAdmin',
            'clusterProxy' => 'setClusterProxy',
            'master' => 'setMaster',
            'vpcendpoint' => 'setVpcendpoint',
            'elb' => 'setElb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisServer  **参数解释**： 集群角色：redis-server实例拓朴图。
    * clusterLvs  **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterAdmin  **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    * clusterProxy  **参数解释**： 集群角色：proxy实例拓朴图。
    * master  **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    * vpcendpoint  **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    * elb  **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'redisServer' => 'getRedisServer',
            'clusterLvs' => 'getClusterLvs',
            'clusterAdmin' => 'getClusterAdmin',
            'clusterProxy' => 'getClusterProxy',
            'master' => 'getMaster',
            'vpcendpoint' => 'getVpcendpoint',
            'elb' => 'getElb'
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
        $this->container['redisServer'] = isset($data['redisServer']) ? $data['redisServer'] : null;
        $this->container['clusterLvs'] = isset($data['clusterLvs']) ? $data['clusterLvs'] : null;
        $this->container['clusterAdmin'] = isset($data['clusterAdmin']) ? $data['clusterAdmin'] : null;
        $this->container['clusterProxy'] = isset($data['clusterProxy']) ? $data['clusterProxy'] : null;
        $this->container['master'] = isset($data['master']) ? $data['master'] : null;
        $this->container['vpcendpoint'] = isset($data['vpcendpoint']) ? $data['vpcendpoint'] : null;
        $this->container['elb'] = isset($data['elb']) ? $data['elb'] : null;
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
    * Gets redisServer
    *  **参数解释**： 集群角色：redis-server实例拓朴图。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getRedisServer()
    {
        return $this->container['redisServer'];
    }

    /**
    * Sets redisServer
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $redisServer **参数解释**： 集群角色：redis-server实例拓朴图。
    *
    * @return $this
    */
    public function setRedisServer($redisServer)
    {
        $this->container['redisServer'] = $redisServer;
        return $this;
    }

    /**
    * Gets clusterLvs
    *  **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getClusterLvs()
    {
        return $this->container['clusterLvs'];
    }

    /**
    * Sets clusterLvs
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $clusterLvs **参数解释**： 集群角色：lvs实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    *
    * @return $this
    */
    public function setClusterLvs($clusterLvs)
    {
        $this->container['clusterLvs'] = $clusterLvs;
        return $this;
    }

    /**
    * Gets clusterAdmin
    *  **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getClusterAdmin()
    {
        return $this->container['clusterAdmin'];
    }

    /**
    * Sets clusterAdmin
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $clusterAdmin **参数解释**： 集群角色：admin实例拓朴图（当前已下线），只适用于Redis 3.0版本实例。
    *
    * @return $this
    */
    public function setClusterAdmin($clusterAdmin)
    {
        $this->container['clusterAdmin'] = $clusterAdmin;
        return $this;
    }

    /**
    * Gets clusterProxy
    *  **参数解释**： 集群角色：proxy实例拓朴图。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getClusterProxy()
    {
        return $this->container['clusterProxy'];
    }

    /**
    * Sets clusterProxy
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $clusterProxy **参数解释**： 集群角色：proxy实例拓朴图。
    *
    * @return $this
    */
    public function setClusterProxy($clusterProxy)
    {
        $this->container['clusterProxy'] = $clusterProxy;
        return $this;
    }

    /**
    * Gets master
    *  **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getMaster()
    {
        return $this->container['master'];
    }

    /**
    * Sets master
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $master **参数解释**： Redis的角色master实例拓朴图，只适用于Redis 3.0版本实例。
    *
    * @return $this
    */
    public function setMaster($master)
    {
        $this->container['master'] = $master;
        return $this;
    }

    /**
    * Gets vpcendpoint
    *  **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getVpcendpoint()
    {
        return $this->container['vpcendpoint'];
    }

    /**
    * Sets vpcendpoint
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $vpcendpoint **参数解释**： 集群角色：VPC Endpoint服务实例拓朴图，适用于4.0及以上版本实例。
    *
    * @return $this
    */
    public function setVpcendpoint($vpcendpoint)
    {
        $this->container['vpcendpoint'] = $vpcendpoint;
        return $this;
    }

    /**
    * Gets elb
    *  **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null
    */
    public function getElb()
    {
        return $this->container['elb'];
    }

    /**
    * Sets elb
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TopologyInfo[]|null $elb **参数解释**： 集群角色：ELB服务实例拓朴图，适用于Redis 4.0及以上版本实例。
    *
    * @return $this
    */
    public function setElb($elb)
    {
        $this->container['elb'] = $elb;
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

