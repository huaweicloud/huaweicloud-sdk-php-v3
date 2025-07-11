<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeEngineInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeEngineInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operType  变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    * newStorageSpace  扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    * newBrokerNum  当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    * newProductId  垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    * tenantIps  指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operType' => 'string',
            'newStorageSpace' => 'int',
            'newBrokerNum' => 'int',
            'newProductId' => 'string',
            'publicipId' => 'string',
            'tenantIps' => 'string[]',
            'secondTenantSubnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operType  变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    * newStorageSpace  扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    * newBrokerNum  当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    * newProductId  垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    * tenantIps  指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operType' => null,
        'newStorageSpace' => 'int32',
        'newBrokerNum' => 'int32',
        'newProductId' => null,
        'publicipId' => null,
        'tenantIps' => null,
        'secondTenantSubnetId' => null
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
    * operType  变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    * newStorageSpace  扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    * newBrokerNum  当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    * newProductId  垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    * tenantIps  指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operType' => 'oper_type',
            'newStorageSpace' => 'new_storage_space',
            'newBrokerNum' => 'new_broker_num',
            'newProductId' => 'new_product_id',
            'publicipId' => 'publicip_id',
            'tenantIps' => 'tenant_ips',
            'secondTenantSubnetId' => 'second_tenant_subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operType  变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    * newStorageSpace  扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    * newBrokerNum  当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    * newProductId  垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    * tenantIps  指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $setters = [
            'operType' => 'setOperType',
            'newStorageSpace' => 'setNewStorageSpace',
            'newBrokerNum' => 'setNewBrokerNum',
            'newProductId' => 'setNewProductId',
            'publicipId' => 'setPublicipId',
            'tenantIps' => 'setTenantIps',
            'secondTenantSubnetId' => 'setSecondTenantSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operType  变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    * newStorageSpace  扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    * newBrokerNum  当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    * newProductId  垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    * tenantIps  指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $getters = [
            'operType' => 'getOperType',
            'newStorageSpace' => 'getNewStorageSpace',
            'newBrokerNum' => 'getNewBrokerNum',
            'newProductId' => 'getNewProductId',
            'publicipId' => 'getPublicipId',
            'tenantIps' => 'getTenantIps',
            'secondTenantSubnetId' => 'getSecondTenantSubnetId'
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
        $this->container['operType'] = isset($data['operType']) ? $data['operType'] : null;
        $this->container['newStorageSpace'] = isset($data['newStorageSpace']) ? $data['newStorageSpace'] : null;
        $this->container['newBrokerNum'] = isset($data['newBrokerNum']) ? $data['newBrokerNum'] : null;
        $this->container['newProductId'] = isset($data['newProductId']) ? $data['newProductId'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['tenantIps'] = isset($data['tenantIps']) ? $data['tenantIps'] : null;
        $this->container['secondTenantSubnetId'] = isset($data['secondTenantSubnetId']) ? $data['secondTenantSubnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operType'] === null) {
            $invalidProperties[] = "'operType' can't be null";
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
    * Gets operType
    *  变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    *
    * @return string
    */
    public function getOperType()
    {
        return $this->container['operType'];
    }

    /**
    * Sets operType
    *
    * @param string $operType 变更类型。  取值范围：   [- storage：存储空间扩容，代理数量不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)    - horizontal：代理数量扩容，每个broker的存储空间不变。    [- vertical：垂直扩容，broker的底层虚机规格变更，代理数量和存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs)
    *
    * @return $this
    */
    public function setOperType($operType)
    {
        $this->container['operType'] = $operType;
        return $this;
    }

    /**
    * Gets newStorageSpace
    *  扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    *
    * @return int|null
    */
    public function getNewStorageSpace()
    {
        return $this->container['newStorageSpace'];
    }

    /**
    * Sets newStorageSpace
    *
    * @param int|null $newStorageSpace 扩容后的存储空间。  [当oper_type类型是storage或horizontal时，该参数有效且必填。  实例存储空间 = 代理数量 * 每个broker的存储空间。  当oper_type类型是storage时，代理数量不变，每个broker存储空间最少扩容100GB。  当oper_type类型是horizontal时，每个broker的存储空间不变。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,fcs,sbc,hcs,cmcc)  [实例存储空间 = 代理数量 * 每个broker的存储空间。 每个broker的存储空间不变。](tag:hcs,fcs)
    *
    * @return $this
    */
    public function setNewStorageSpace($newStorageSpace)
    {
        $this->container['newStorageSpace'] = $newStorageSpace;
        return $this;
    }

    /**
    * Gets newBrokerNum
    *  当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    *
    * @return int|null
    */
    public function getNewBrokerNum()
    {
        return $this->container['newBrokerNum'];
    }

    /**
    * Sets newBrokerNum
    *
    * @param int|null $newBrokerNum 当oper_type参数为horizontal时，该参数有效。  [取值范围：最多支持30个broker。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm)
    *
    * @return $this
    */
    public function setNewBrokerNum($newBrokerNum)
    {
        $this->container['newBrokerNum'] = $newBrokerNum;
        return $this;
    }

    /**
    * Gets newProductId
    *  垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    *
    * @return string|null
    */
    public function getNewProductId()
    {
        return $this->container['newProductId'];
    }

    /**
    * Sets newProductId
    *
    * @param string|null $newProductId 垂直扩容时的新产品ID。  当oper_type类型是vertical时，该参数才有效且必填。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    *
    * @return $this
    */
    public function setNewProductId($newProductId)
    {
        $this->container['newProductId'] = $newProductId;
        return $this;
    }

    /**
    * Gets publicipId
    *  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  当oper_type类型是horizontal时，该参数必填。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets tenantIps
    *  指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    *
    * @return string[]|null
    */
    public function getTenantIps()
    {
        return $this->container['tenantIps'];
    }

    /**
    * Sets tenantIps
    *
    * @param string[]|null $tenantIps 指定的内网IP地址，仅支持指定IPv4。  指定的IP数量只能小于等于新增节点数量。  当指定IP小于节点数量时，未指定的节点随机分配内网IP地址。
    *
    * @return $this
    */
    public function setTenantIps($tenantIps)
    {
        $this->container['tenantIps'] = $tenantIps;
        return $this;
    }

    /**
    * Gets secondTenantSubnetId
    *  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @return string|null
    */
    public function getSecondTenantSubnetId()
    {
        return $this->container['secondTenantSubnetId'];
    }

    /**
    * Sets secondTenantSubnetId
    *
    * @param string|null $secondTenantSubnetId 实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @return $this
    */
    public function setSecondTenantSubnetId($secondTenantSubnetId)
    {
        $this->container['secondTenantSubnetId'] = $secondTenantSubnetId;
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

