<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FreeResourcePackageV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FreeResourcePackageV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderInstanceId  订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    * orderId  订单ID，如果source_type为“1：软开云赠送”，该字段为空。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectScope  企业项目应用范围： 0：应用所有1：应用到具体企业项目
    * effectiveTime  生效时间，购买资源包的时间，格式UTC。
    * expireTime  失效时间，资源包到期时间，格式UTC。
    * status  状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * sourceType  资源包的来源类型： 0：订单1：软开云赠送
    * bundleType  套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    * quotaReuseMode  使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    * freeResources  资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderInstanceId' => 'string',
            'orderId' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectScope' => 'int',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'status' => 'int',
            'serviceTypeCode' => 'string',
            'regionCode' => 'string',
            'sourceType' => 'int',
            'bundleType' => 'string',
            'quotaReuseMode' => 'int',
            'freeResources' => '\HuaweiCloud\SDK\Bss\V2\Model\FreeResourceV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderInstanceId  订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    * orderId  订单ID，如果source_type为“1：软开云赠送”，该字段为空。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectScope  企业项目应用范围： 0：应用所有1：应用到具体企业项目
    * effectiveTime  生效时间，购买资源包的时间，格式UTC。
    * expireTime  失效时间，资源包到期时间，格式UTC。
    * status  状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * sourceType  资源包的来源类型： 0：订单1：软开云赠送
    * bundleType  套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    * quotaReuseMode  使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    * freeResources  资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderInstanceId' => null,
        'orderId' => null,
        'productId' => null,
        'productName' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectScope' => 'int32',
        'effectiveTime' => null,
        'expireTime' => null,
        'status' => 'int32',
        'serviceTypeCode' => null,
        'regionCode' => null,
        'sourceType' => 'int32',
        'bundleType' => null,
        'quotaReuseMode' => 'int32',
        'freeResources' => null
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
    * orderInstanceId  订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    * orderId  订单ID，如果source_type为“1：软开云赠送”，该字段为空。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectScope  企业项目应用范围： 0：应用所有1：应用到具体企业项目
    * effectiveTime  生效时间，购买资源包的时间，格式UTC。
    * expireTime  失效时间，资源包到期时间，格式UTC。
    * status  状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * sourceType  资源包的来源类型： 0：订单1：软开云赠送
    * bundleType  套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    * quotaReuseMode  使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    * freeResources  资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderInstanceId' => 'order_instance_id',
            'orderId' => 'order_id',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectScope' => 'enterprise_project_scope',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'status' => 'status',
            'serviceTypeCode' => 'service_type_code',
            'regionCode' => 'region_code',
            'sourceType' => 'source_type',
            'bundleType' => 'bundle_type',
            'quotaReuseMode' => 'quota_reuse_mode',
            'freeResources' => 'free_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderInstanceId  订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    * orderId  订单ID，如果source_type为“1：软开云赠送”，该字段为空。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectScope  企业项目应用范围： 0：应用所有1：应用到具体企业项目
    * effectiveTime  生效时间，购买资源包的时间，格式UTC。
    * expireTime  失效时间，资源包到期时间，格式UTC。
    * status  状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * sourceType  资源包的来源类型： 0：订单1：软开云赠送
    * bundleType  套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    * quotaReuseMode  使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    * freeResources  资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderInstanceId' => 'setOrderInstanceId',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectScope' => 'setEnterpriseProjectScope',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'status' => 'setStatus',
            'serviceTypeCode' => 'setServiceTypeCode',
            'regionCode' => 'setRegionCode',
            'sourceType' => 'setSourceType',
            'bundleType' => 'setBundleType',
            'quotaReuseMode' => 'setQuotaReuseMode',
            'freeResources' => 'setFreeResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderInstanceId  订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    * orderId  订单ID，如果source_type为“1：软开云赠送”，该字段为空。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectScope  企业项目应用范围： 0：应用所有1：应用到具体企业项目
    * effectiveTime  生效时间，购买资源包的时间，格式UTC。
    * expireTime  失效时间，资源包到期时间，格式UTC。
    * status  状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * sourceType  资源包的来源类型： 0：订单1：软开云赠送
    * bundleType  套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    * quotaReuseMode  使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    * freeResources  资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderInstanceId' => 'getOrderInstanceId',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectScope' => 'getEnterpriseProjectScope',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'status' => 'getStatus',
            'serviceTypeCode' => 'getServiceTypeCode',
            'regionCode' => 'getRegionCode',
            'sourceType' => 'getSourceType',
            'bundleType' => 'getBundleType',
            'quotaReuseMode' => 'getQuotaReuseMode',
            'freeResources' => 'getFreeResources'
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
        $this->container['orderInstanceId'] = isset($data['orderInstanceId']) ? $data['orderInstanceId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectScope'] = isset($data['enterpriseProjectScope']) ? $data['enterpriseProjectScope'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['bundleType'] = isset($data['bundleType']) ? $data['bundleType'] : null;
        $this->container['quotaReuseMode'] = isset($data['quotaReuseMode']) ? $data['quotaReuseMode'] : null;
        $this->container['freeResources'] = isset($data['freeResources']) ? $data['freeResources'] : null;
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
    * Gets orderInstanceId
    *  订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    *
    * @return string|null
    */
    public function getOrderInstanceId()
    {
        return $this->container['orderInstanceId'];
    }

    /**
    * Sets orderInstanceId
    *
    * @param string|null $orderInstanceId 订购资源包产品后，系统生成的ID，是这个资源包列表的标识字段。
    *
    * @return $this
    */
    public function setOrderInstanceId($orderInstanceId)
    {
        $this->container['orderInstanceId'] = $orderInstanceId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID，如果source_type为“1：软开云赠送”，该字段为空。
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
    * @param string|null $orderId 订单ID，如果source_type为“1：软开云赠送”，该字段为空。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID，即资源包ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID，即资源包ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  产品名称，即资源包名称。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品名称，即资源包名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectScope
    *  企业项目应用范围： 0：应用所有1：应用到具体企业项目
    *
    * @return int|null
    */
    public function getEnterpriseProjectScope()
    {
        return $this->container['enterpriseProjectScope'];
    }

    /**
    * Sets enterpriseProjectScope
    *
    * @param int|null $enterpriseProjectScope 企业项目应用范围： 0：应用所有1：应用到具体企业项目
    *
    * @return $this
    */
    public function setEnterpriseProjectScope($enterpriseProjectScope)
    {
        $this->container['enterpriseProjectScope'] = $enterpriseProjectScope;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效时间，购买资源包的时间，格式UTC。
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 生效时间，购买资源包的时间，格式UTC。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  失效时间，资源包到期时间，格式UTC。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 失效时间，资源包到期时间，格式UTC。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets status
    *  状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态： 0：未生效1：生效中2：已用完3：已失效4：已退订
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return string|null
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets sourceType
    *  资源包的来源类型： 0：订单1：软开云赠送
    *
    * @return int|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int|null $sourceType 资源包的来源类型： 0：订单1：软开云赠送
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets bundleType
    *  套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    *
    * @return string|null
    */
    public function getBundleType()
    {
        return $this->container['bundleType'];
    }

    /**
    * Sets bundleType
    *
    * @param string|null $bundleType 套餐绑定类型： ATOMIC_PKG：原子套餐BUNDLE_PKG：组合套餐
    *
    * @return $this
    */
    public function setBundleType($bundleType)
    {
        $this->container['bundleType'] = $bundleType;
        return $this;
    }

    /**
    * Gets quotaReuseMode
    *  使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    *
    * @return int|null
    */
    public function getQuotaReuseMode()
    {
        return $this->container['quotaReuseMode'];
    }

    /**
    * Sets quotaReuseMode
    *
    * @param int|null $quotaReuseMode 使用模式。 1：可重置表示购买的资源包能够按照一定的周期恢复使用量。例如购买一个1年的按需资源包，使用量是40G，可重置，重置周期为1个月，表示1年内每个月会给予40G的使用量。 2：不可重置表示购买的资源包的使用量不会恢复。例如购买一个1年的按需资源包，使用量是40G，不可重置，表示1年内一共给予40G的使用量。
    *
    * @return $this
    */
    public function setQuotaReuseMode($quotaReuseMode)
    {
        $this->container['quotaReuseMode'] = $quotaReuseMode;
        return $this;
    }

    /**
    * Gets freeResources
    *  资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\FreeResourceV3[]|null
    */
    public function getFreeResources()
    {
        return $this->container['freeResources'];
    }

    /**
    * Sets freeResources
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\FreeResourceV3[]|null $freeResources 资源套餐内的资源项信息（资源项ID级的详情），具体参见表3。
    *
    * @return $this
    */
    public function setFreeResources($freeResources)
    {
        $this->container['freeResources'] = $freeResources;
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

