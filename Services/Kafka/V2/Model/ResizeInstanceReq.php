<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newSpecCode  规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
    * operType  扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    * newBrokerNum  扩容后集群节点数。
    * newProductId  新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
    * tenantIps  创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newSpecCode' => 'string',
            'newStorageSpace' => 'int',
            'operType' => 'string',
            'newBrokerNum' => 'int',
            'newProductId' => 'string',
            'publicipId' => 'string',
            'tenantIps' => 'string[]',
            'secondTenantSubnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newSpecCode  规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
    * operType  扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    * newBrokerNum  扩容后集群节点数。
    * newProductId  新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
    * tenantIps  创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newSpecCode' => null,
        'newStorageSpace' => null,
        'operType' => null,
        'newBrokerNum' => null,
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
    * newSpecCode  规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
    * operType  扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    * newBrokerNum  扩容后集群节点数。
    * newProductId  新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
    * tenantIps  创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newSpecCode' => 'new_spec_code',
            'newStorageSpace' => 'new_storage_space',
            'operType' => 'oper_type',
            'newBrokerNum' => 'new_broker_num',
            'newProductId' => 'new_product_id',
            'publicipId' => 'publicip_id',
            'tenantIps' => 'tenant_ips',
            'secondTenantSubnetId' => 'second_tenant_subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newSpecCode  规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
    * operType  扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    * newBrokerNum  扩容后集群节点数。
    * newProductId  新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
    * tenantIps  创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $setters = [
            'newSpecCode' => 'setNewSpecCode',
            'newStorageSpace' => 'setNewStorageSpace',
            'operType' => 'setOperType',
            'newBrokerNum' => 'setNewBrokerNum',
            'newProductId' => 'setNewProductId',
            'publicipId' => 'setPublicipId',
            'tenantIps' => 'setTenantIps',
            'secondTenantSubnetId' => 'setSecondTenantSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newSpecCode  规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
    * operType  扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    * newBrokerNum  扩容后集群节点数。
    * newProductId  新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * publicipId  实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
    * tenantIps  创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
    * secondTenantSubnetId  实例扩容时新节点使用备用子网的id。  当实例扩容使用备用子网，则传入此值。  需要联系客服添加白名单才能传入此值。
    *
    * @var string[]
    */
    protected static $getters = [
            'newSpecCode' => 'getNewSpecCode',
            'newStorageSpace' => 'getNewStorageSpace',
            'operType' => 'getOperType',
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
        $this->container['newSpecCode'] = isset($data['newSpecCode']) ? $data['newSpecCode'] : null;
        $this->container['newStorageSpace'] = isset($data['newStorageSpace']) ? $data['newStorageSpace'] : null;
        $this->container['operType'] = isset($data['operType']) ? $data['operType'] : null;
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
    * Gets newSpecCode
    *  规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    *
    * @return string|null
    */
    public function getNewSpecCode()
    {
        return $this->container['newSpecCode'];
    }

    /**
    * Sets newSpecCode
    *
    * @param string|null $newSpecCode 规格变更后的规格ID。 若只扩展磁盘大小，则规格ID保持和原实例不变。
    *
    * @return $this
    */
    public function setNewSpecCode($newSpecCode)
    {
        $this->container['newSpecCode'] = $newSpecCode;
        return $this;
    }

    /**
    * Gets newStorageSpace
    *  规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
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
    * @param int|null $newStorageSpace 规格变更后的消息存储空间，单位：GB。 磁盘容量仅支持设置为100的整数倍。若扩展实例基准带宽，则new_storage_space不能低于基准带宽规定的最小磁盘大小。
    *
    * @return $this
    */
    public function setNewStorageSpace($newStorageSpace)
    {
        $this->container['newStorageSpace'] = $newStorageSpace;
        return $this;
    }

    /**
    * Gets operType
    *  扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    *
    * @return string|null
    */
    public function getOperType()
    {
        return $this->container['operType'];
    }

    /**
    * Sets operType
    *
    * @param string|null $operType 扩容类型， 新规格支持扩容类型：\"horizontal\"、\"vertical\"、\"node\"、\"storage\"四种类型。
    *
    * @return $this
    */
    public function setOperType($operType)
    {
        $this->container['operType'] = $operType;
        return $this;
    }

    /**
    * Gets newBrokerNum
    *  扩容后集群节点数。
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
    * @param int|null $newBrokerNum 扩容后集群节点数。
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
    *  新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
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
    * @param string|null $newProductId 新规格变更后的产品ID。 涉及垂直扩容场景，需指定该项。 产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
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
    *  实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
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
    * @param string|null $publicipId 实例绑定的弹性IP地址的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) 以英文逗号隔开多个弹性IP地址的ID。 如果开启了公网再进行扩容，需要填写此参数。
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
    *  创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
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
    * @param string[]|null $tenantIps 创建节点可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。  指定内网地址数量必须小于等于购买的节点数量。  当小于购买的节点数量时，未指定的节点则随机分配。
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

