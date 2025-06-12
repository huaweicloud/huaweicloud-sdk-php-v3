<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * newCapacity  新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * bssParam  bssParam
    * reservedIp  需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    * changeType  变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    * availableZones  Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    * nodeList  Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    * executeImmediately  是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specCode' => 'string',
            'newCapacity' => 'int',
            'bssParam' => '\HuaweiCloud\SDK\Dcs\V2\Model\BssParamEntity',
            'reservedIp' => 'string[]',
            'changeType' => 'string',
            'availableZones' => 'string[]',
            'nodeList' => 'string[]',
            'executeImmediately' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * newCapacity  新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * bssParam  bssParam
    * reservedIp  需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    * changeType  变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    * availableZones  Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    * nodeList  Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    * executeImmediately  是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specCode' => null,
        'newCapacity' => 'int32',
        'bssParam' => null,
        'reservedIp' => null,
        'changeType' => null,
        'availableZones' => null,
        'nodeList' => null,
        'executeImmediately' => null
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
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * newCapacity  新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * bssParam  bssParam
    * reservedIp  需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    * changeType  变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    * availableZones  Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    * nodeList  Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    * executeImmediately  是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specCode' => 'spec_code',
            'newCapacity' => 'new_capacity',
            'bssParam' => 'bss_param',
            'reservedIp' => 'reserved_ip',
            'changeType' => 'change_type',
            'availableZones' => 'available_zones',
            'nodeList' => 'node_list',
            'executeImmediately' => 'execute_immediately'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * newCapacity  新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * bssParam  bssParam
    * reservedIp  需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    * changeType  变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    * availableZones  Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    * nodeList  Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    * executeImmediately  是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @var string[]
    */
    protected static $setters = [
            'specCode' => 'setSpecCode',
            'newCapacity' => 'setNewCapacity',
            'bssParam' => 'setBssParam',
            'reservedIp' => 'setReservedIp',
            'changeType' => 'setChangeType',
            'availableZones' => 'setAvailableZones',
            'nodeList' => 'setNodeList',
            'executeImmediately' => 'setExecuteImmediately'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specCode  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    * newCapacity  新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    * bssParam  bssParam
    * reservedIp  需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    * changeType  变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    * availableZones  Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    * nodeList  Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    * executeImmediately  是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @var string[]
    */
    protected static $getters = [
            'specCode' => 'getSpecCode',
            'newCapacity' => 'getNewCapacity',
            'bssParam' => 'getBssParam',
            'reservedIp' => 'getReservedIp',
            'changeType' => 'getChangeType',
            'availableZones' => 'getAvailableZones',
            'nodeList' => 'getNodeList',
            'executeImmediately' => 'getExecuteImmediately'
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
    const CHANGE_TYPE_CREATE_REPLICATION = 'createReplication';
    const CHANGE_TYPE_DELETE_REPLICATION = 'deleteReplication';
    const CHANGE_TYPE_ADD_SHARDING = 'addSharding';
    const CHANGE_TYPE_INSTANCE_TYPE = 'instanceType';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_CREATE_REPLICATION,
            self::CHANGE_TYPE_DELETE_REPLICATION,
            self::CHANGE_TYPE_ADD_SHARDING,
            self::CHANGE_TYPE_INSTANCE_TYPE,
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
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['newCapacity'] = isset($data['newCapacity']) ? $data['newCapacity'] : null;
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
        $this->container['reservedIp'] = isset($data['reservedIp']) ? $data['reservedIp'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['nodeList'] = isset($data['nodeList']) ? $data['nodeList'] : null;
        $this->container['executeImmediately'] = isset($data['executeImmediately']) ? $data['executeImmediately'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['newCapacity'] === null) {
            $invalidProperties[] = "'newCapacity' can't be null";
        }
            $allowedValues = $this->getChangeTypeAllowableValues();
                if (!is_null($this->container['changeType']) && !in_array($this->container['changeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
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
    * Gets specCode
    *  产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 产品规格编码。具体查询方法如下：  - 方法一：查询产品介绍中的[实例规格](https://support.huaweicloud.com/productdesc-dcs/dcs-pd-0522002.html) - 方法二：登录分布式缓存的控制台界面，点击购买缓存实例，查找对应的实例规格名称 - 方法三：调用[查询产品规格](https://support.huaweicloud.com/api-dcs/ListFlavors.html)接口查询。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets newCapacity
    *  新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @return int
    */
    public function getNewCapacity()
    {
        return $this->container['newCapacity'];
    }

    /**
    * Sets newCapacity
    *
    * @param int $newCapacity 新的缓存实例规格，单位：GB。 Redis4.0版本及以上：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @return $this
    */
    public function setNewCapacity($newCapacity)
    {
        $this->container['newCapacity'] = $newCapacity;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BssParamEntity|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BssParamEntity|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
        return $this;
    }

    /**
    * Gets reservedIp
    *  需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    *
    * @return string[]|null
    */
    public function getReservedIp()
    {
        return $this->container['reservedIp'];
    }

    /**
    * Sets reservedIp
    *
    * @param string[]|null $reservedIp 需要保留的节点ip。cluster集群缩容时需要填写，不填写时系统将随机删除多余的分片
    *
    * @return $this
    */
    public function setReservedIp($reservedIp)
    {
        $this->container['reservedIp'] = $reservedIp;
        return $this;
    }

    /**
    * Gets changeType
    *  变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType 变更类型，Redis 4.0或者5.0实例进行副本数变更时必选。 - createReplication: 添加副本 - deleteReplication: 删除副本 - addSharding: 添加分片 - instanceType: 实例类型变更[，目前仅支持Redis 4.0/5.0/6.0实例中的主备实例/读写分离实例变更为proxy集群实例、proxy集群实例变更为主备实例/读写分离实例](tag:hws,hws_hk,hws_eu,ctc,sbc,hk_sbc,g42,hk_g42,otc)。
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets availableZones
    *  Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    *
    * @return string[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[]|null $availableZones Redis 4.0或者5.0主备实例进行添加副本时必选，指定每个副本所在的可用区Code，使用前需要先确认该可用区资源是否售罄。  具体查询方法，请参考[查询可用区信息](https://support.huaweicloud.com/api-dcs/ListAvailableZones.html)
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets nodeList
    *  Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    *
    * @return string[]|null
    */
    public function getNodeList()
    {
        return $this->container['nodeList'];
    }

    /**
    * Sets nodeList
    *
    * @param string[]|null $nodeList Redis 4.0或者5.0主备实例进行删除副本时必选，指定需要删除的节点ID，目前仅支持一次删除一个副本。  节点ID查询方法，请参考[查询分片信息](https://support.huaweicloud.com/api-dcs/ListGroupReplicationInfo.html)
    *
    * @return $this
    */
    public function setNodeList($nodeList)
    {
        $this->container['nodeList'] = $nodeList;
        return $this;
    }

    /**
    * Gets executeImmediately
    *  是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @return bool|null
    */
    public function getExecuteImmediately()
    {
        return $this->container['executeImmediately'];
    }

    /**
    * Sets executeImmediately
    *
    * @param bool|null $executeImmediately 是否立即变更。默认值为true。 - true: 立即变更 - false: 可维护时间窗内进行变更
    *
    * @return $this
    */
    public function setExecuteImmediately($executeImmediately)
    {
        $this->container['executeImmediately'] = $executeImmediately;
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

