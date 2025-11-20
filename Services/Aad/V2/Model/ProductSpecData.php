<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductSpecData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductSpecData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productUuid  产品规格UUID
    * ispSpec  套餐线路
    * dataCenter  机房
    * specType  产品规格类型
    * basicBandwidth  保底带宽值
    * elasticBandwidth  弹性带宽值
    * serviceBandwidth  业务带宽值
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidth  弹性业务带宽值
    * elasticServiceBandwidthType  弹性业务带宽类型
    * mainResourceType  主资源类型
    * mainResourceSpecCode  主资源规格编码
    * mainResourceProductId  主资源产品id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productUuid' => 'string',
            'ispSpec' => 'string',
            'dataCenter' => 'string',
            'specType' => 'int',
            'basicBandwidth' => 'int',
            'elasticBandwidth' => 'int',
            'serviceBandwidth' => 'int',
            'portNum' => 'int',
            'bindDomainNum' => 'int',
            'elasticServiceBandwidth' => 'int',
            'elasticServiceBandwidthType' => 'int',
            'mainResourceType' => 'string',
            'mainResourceSpecCode' => 'string',
            'mainResourceProductId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productUuid  产品规格UUID
    * ispSpec  套餐线路
    * dataCenter  机房
    * specType  产品规格类型
    * basicBandwidth  保底带宽值
    * elasticBandwidth  弹性带宽值
    * serviceBandwidth  业务带宽值
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidth  弹性业务带宽值
    * elasticServiceBandwidthType  弹性业务带宽类型
    * mainResourceType  主资源类型
    * mainResourceSpecCode  主资源规格编码
    * mainResourceProductId  主资源产品id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productUuid' => null,
        'ispSpec' => null,
        'dataCenter' => null,
        'specType' => 'int32',
        'basicBandwidth' => 'int32',
        'elasticBandwidth' => 'int32',
        'serviceBandwidth' => 'int32',
        'portNum' => 'int32',
        'bindDomainNum' => 'int32',
        'elasticServiceBandwidth' => 'int32',
        'elasticServiceBandwidthType' => 'int32',
        'mainResourceType' => null,
        'mainResourceSpecCode' => null,
        'mainResourceProductId' => null
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
    * productUuid  产品规格UUID
    * ispSpec  套餐线路
    * dataCenter  机房
    * specType  产品规格类型
    * basicBandwidth  保底带宽值
    * elasticBandwidth  弹性带宽值
    * serviceBandwidth  业务带宽值
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidth  弹性业务带宽值
    * elasticServiceBandwidthType  弹性业务带宽类型
    * mainResourceType  主资源类型
    * mainResourceSpecCode  主资源规格编码
    * mainResourceProductId  主资源产品id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productUuid' => 'product_uuid',
            'ispSpec' => 'isp_spec',
            'dataCenter' => 'data_center',
            'specType' => 'spec_type',
            'basicBandwidth' => 'basic_bandwidth',
            'elasticBandwidth' => 'elastic_bandwidth',
            'serviceBandwidth' => 'service_bandwidth',
            'portNum' => 'port_num',
            'bindDomainNum' => 'bind_domain_num',
            'elasticServiceBandwidth' => 'elastic_service_bandwidth',
            'elasticServiceBandwidthType' => 'elastic_service_bandwidth_type',
            'mainResourceType' => 'main_resource_type',
            'mainResourceSpecCode' => 'main_resource_spec_code',
            'mainResourceProductId' => 'main_resource_product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productUuid  产品规格UUID
    * ispSpec  套餐线路
    * dataCenter  机房
    * specType  产品规格类型
    * basicBandwidth  保底带宽值
    * elasticBandwidth  弹性带宽值
    * serviceBandwidth  业务带宽值
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidth  弹性业务带宽值
    * elasticServiceBandwidthType  弹性业务带宽类型
    * mainResourceType  主资源类型
    * mainResourceSpecCode  主资源规格编码
    * mainResourceProductId  主资源产品id
    *
    * @var string[]
    */
    protected static $setters = [
            'productUuid' => 'setProductUuid',
            'ispSpec' => 'setIspSpec',
            'dataCenter' => 'setDataCenter',
            'specType' => 'setSpecType',
            'basicBandwidth' => 'setBasicBandwidth',
            'elasticBandwidth' => 'setElasticBandwidth',
            'serviceBandwidth' => 'setServiceBandwidth',
            'portNum' => 'setPortNum',
            'bindDomainNum' => 'setBindDomainNum',
            'elasticServiceBandwidth' => 'setElasticServiceBandwidth',
            'elasticServiceBandwidthType' => 'setElasticServiceBandwidthType',
            'mainResourceType' => 'setMainResourceType',
            'mainResourceSpecCode' => 'setMainResourceSpecCode',
            'mainResourceProductId' => 'setMainResourceProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productUuid  产品规格UUID
    * ispSpec  套餐线路
    * dataCenter  机房
    * specType  产品规格类型
    * basicBandwidth  保底带宽值
    * elasticBandwidth  弹性带宽值
    * serviceBandwidth  业务带宽值
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidth  弹性业务带宽值
    * elasticServiceBandwidthType  弹性业务带宽类型
    * mainResourceType  主资源类型
    * mainResourceSpecCode  主资源规格编码
    * mainResourceProductId  主资源产品id
    *
    * @var string[]
    */
    protected static $getters = [
            'productUuid' => 'getProductUuid',
            'ispSpec' => 'getIspSpec',
            'dataCenter' => 'getDataCenter',
            'specType' => 'getSpecType',
            'basicBandwidth' => 'getBasicBandwidth',
            'elasticBandwidth' => 'getElasticBandwidth',
            'serviceBandwidth' => 'getServiceBandwidth',
            'portNum' => 'getPortNum',
            'bindDomainNum' => 'getBindDomainNum',
            'elasticServiceBandwidth' => 'getElasticServiceBandwidth',
            'elasticServiceBandwidthType' => 'getElasticServiceBandwidthType',
            'mainResourceType' => 'getMainResourceType',
            'mainResourceSpecCode' => 'getMainResourceSpecCode',
            'mainResourceProductId' => 'getMainResourceProductId'
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
        $this->container['productUuid'] = isset($data['productUuid']) ? $data['productUuid'] : null;
        $this->container['ispSpec'] = isset($data['ispSpec']) ? $data['ispSpec'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['basicBandwidth'] = isset($data['basicBandwidth']) ? $data['basicBandwidth'] : null;
        $this->container['elasticBandwidth'] = isset($data['elasticBandwidth']) ? $data['elasticBandwidth'] : null;
        $this->container['serviceBandwidth'] = isset($data['serviceBandwidth']) ? $data['serviceBandwidth'] : null;
        $this->container['portNum'] = isset($data['portNum']) ? $data['portNum'] : null;
        $this->container['bindDomainNum'] = isset($data['bindDomainNum']) ? $data['bindDomainNum'] : null;
        $this->container['elasticServiceBandwidth'] = isset($data['elasticServiceBandwidth']) ? $data['elasticServiceBandwidth'] : null;
        $this->container['elasticServiceBandwidthType'] = isset($data['elasticServiceBandwidthType']) ? $data['elasticServiceBandwidthType'] : null;
        $this->container['mainResourceType'] = isset($data['mainResourceType']) ? $data['mainResourceType'] : null;
        $this->container['mainResourceSpecCode'] = isset($data['mainResourceSpecCode']) ? $data['mainResourceSpecCode'] : null;
        $this->container['mainResourceProductId'] = isset($data['mainResourceProductId']) ? $data['mainResourceProductId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productUuid']) && (mb_strlen($this->container['productUuid']) > 32768)) {
                $invalidProperties[] = "invalid value for 'productUuid', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['productUuid']) && (mb_strlen($this->container['productUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'productUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ispSpec']) && (mb_strlen($this->container['ispSpec']) > 32768)) {
                $invalidProperties[] = "invalid value for 'ispSpec', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['ispSpec']) && (mb_strlen($this->container['ispSpec']) < 0)) {
                $invalidProperties[] = "invalid value for 'ispSpec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) > 32768)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specType']) && ($this->container['specType'] > 2000)) {
                $invalidProperties[] = "invalid value for 'specType', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['specType']) && ($this->container['specType'] < 0)) {
                $invalidProperties[] = "invalid value for 'specType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['basicBandwidth']) && ($this->container['basicBandwidth'] > 2000)) {
                $invalidProperties[] = "invalid value for 'basicBandwidth', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['basicBandwidth']) && ($this->container['basicBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'basicBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['elasticBandwidth']) && ($this->container['elasticBandwidth'] > 2000)) {
                $invalidProperties[] = "invalid value for 'elasticBandwidth', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['elasticBandwidth']) && ($this->container['elasticBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'elasticBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceBandwidth']) && ($this->container['serviceBandwidth'] > 2000)) {
                $invalidProperties[] = "invalid value for 'serviceBandwidth', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['serviceBandwidth']) && ($this->container['serviceBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'serviceBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portNum']) && ($this->container['portNum'] > 2000)) {
                $invalidProperties[] = "invalid value for 'portNum', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['portNum']) && ($this->container['portNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'portNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bindDomainNum']) && ($this->container['bindDomainNum'] > 2000)) {
                $invalidProperties[] = "invalid value for 'bindDomainNum', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['bindDomainNum']) && ($this->container['bindDomainNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'bindDomainNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['elasticServiceBandwidth']) && ($this->container['elasticServiceBandwidth'] > 2000)) {
                $invalidProperties[] = "invalid value for 'elasticServiceBandwidth', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['elasticServiceBandwidth']) && ($this->container['elasticServiceBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'elasticServiceBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['elasticServiceBandwidthType']) && ($this->container['elasticServiceBandwidthType'] > 2000)) {
                $invalidProperties[] = "invalid value for 'elasticServiceBandwidthType', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['elasticServiceBandwidthType']) && ($this->container['elasticServiceBandwidthType'] < 0)) {
                $invalidProperties[] = "invalid value for 'elasticServiceBandwidthType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mainResourceType']) && (mb_strlen($this->container['mainResourceType']) > 32768)) {
                $invalidProperties[] = "invalid value for 'mainResourceType', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['mainResourceType']) && (mb_strlen($this->container['mainResourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'mainResourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mainResourceSpecCode']) && (mb_strlen($this->container['mainResourceSpecCode']) > 32768)) {
                $invalidProperties[] = "invalid value for 'mainResourceSpecCode', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['mainResourceSpecCode']) && (mb_strlen($this->container['mainResourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mainResourceSpecCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mainResourceProductId']) && (mb_strlen($this->container['mainResourceProductId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'mainResourceProductId', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['mainResourceProductId']) && (mb_strlen($this->container['mainResourceProductId']) < 0)) {
                $invalidProperties[] = "invalid value for 'mainResourceProductId', the character length must be bigger than or equal to 0.";
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
    * Gets productUuid
    *  产品规格UUID
    *
    * @return string|null
    */
    public function getProductUuid()
    {
        return $this->container['productUuid'];
    }

    /**
    * Sets productUuid
    *
    * @param string|null $productUuid 产品规格UUID
    *
    * @return $this
    */
    public function setProductUuid($productUuid)
    {
        $this->container['productUuid'] = $productUuid;
        return $this;
    }

    /**
    * Gets ispSpec
    *  套餐线路
    *
    * @return string|null
    */
    public function getIspSpec()
    {
        return $this->container['ispSpec'];
    }

    /**
    * Sets ispSpec
    *
    * @param string|null $ispSpec 套餐线路
    *
    * @return $this
    */
    public function setIspSpec($ispSpec)
    {
        $this->container['ispSpec'] = $ispSpec;
        return $this;
    }

    /**
    * Gets dataCenter
    *  机房
    *
    * @return string|null
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string|null $dataCenter 机房
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets specType
    *  产品规格类型
    *
    * @return int|null
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param int|null $specType 产品规格类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets basicBandwidth
    *  保底带宽值
    *
    * @return int|null
    */
    public function getBasicBandwidth()
    {
        return $this->container['basicBandwidth'];
    }

    /**
    * Sets basicBandwidth
    *
    * @param int|null $basicBandwidth 保底带宽值
    *
    * @return $this
    */
    public function setBasicBandwidth($basicBandwidth)
    {
        $this->container['basicBandwidth'] = $basicBandwidth;
        return $this;
    }

    /**
    * Gets elasticBandwidth
    *  弹性带宽值
    *
    * @return int|null
    */
    public function getElasticBandwidth()
    {
        return $this->container['elasticBandwidth'];
    }

    /**
    * Sets elasticBandwidth
    *
    * @param int|null $elasticBandwidth 弹性带宽值
    *
    * @return $this
    */
    public function setElasticBandwidth($elasticBandwidth)
    {
        $this->container['elasticBandwidth'] = $elasticBandwidth;
        return $this;
    }

    /**
    * Gets serviceBandwidth
    *  业务带宽值
    *
    * @return int|null
    */
    public function getServiceBandwidth()
    {
        return $this->container['serviceBandwidth'];
    }

    /**
    * Sets serviceBandwidth
    *
    * @param int|null $serviceBandwidth 业务带宽值
    *
    * @return $this
    */
    public function setServiceBandwidth($serviceBandwidth)
    {
        $this->container['serviceBandwidth'] = $serviceBandwidth;
        return $this;
    }

    /**
    * Gets portNum
    *  端口数
    *
    * @return int|null
    */
    public function getPortNum()
    {
        return $this->container['portNum'];
    }

    /**
    * Sets portNum
    *
    * @param int|null $portNum 端口数
    *
    * @return $this
    */
    public function setPortNum($portNum)
    {
        $this->container['portNum'] = $portNum;
        return $this;
    }

    /**
    * Gets bindDomainNum
    *  域名数
    *
    * @return int|null
    */
    public function getBindDomainNum()
    {
        return $this->container['bindDomainNum'];
    }

    /**
    * Sets bindDomainNum
    *
    * @param int|null $bindDomainNum 域名数
    *
    * @return $this
    */
    public function setBindDomainNum($bindDomainNum)
    {
        $this->container['bindDomainNum'] = $bindDomainNum;
        return $this;
    }

    /**
    * Gets elasticServiceBandwidth
    *  弹性业务带宽值
    *
    * @return int|null
    */
    public function getElasticServiceBandwidth()
    {
        return $this->container['elasticServiceBandwidth'];
    }

    /**
    * Sets elasticServiceBandwidth
    *
    * @param int|null $elasticServiceBandwidth 弹性业务带宽值
    *
    * @return $this
    */
    public function setElasticServiceBandwidth($elasticServiceBandwidth)
    {
        $this->container['elasticServiceBandwidth'] = $elasticServiceBandwidth;
        return $this;
    }

    /**
    * Gets elasticServiceBandwidthType
    *  弹性业务带宽类型
    *
    * @return int|null
    */
    public function getElasticServiceBandwidthType()
    {
        return $this->container['elasticServiceBandwidthType'];
    }

    /**
    * Sets elasticServiceBandwidthType
    *
    * @param int|null $elasticServiceBandwidthType 弹性业务带宽类型
    *
    * @return $this
    */
    public function setElasticServiceBandwidthType($elasticServiceBandwidthType)
    {
        $this->container['elasticServiceBandwidthType'] = $elasticServiceBandwidthType;
        return $this;
    }

    /**
    * Gets mainResourceType
    *  主资源类型
    *
    * @return string|null
    */
    public function getMainResourceType()
    {
        return $this->container['mainResourceType'];
    }

    /**
    * Sets mainResourceType
    *
    * @param string|null $mainResourceType 主资源类型
    *
    * @return $this
    */
    public function setMainResourceType($mainResourceType)
    {
        $this->container['mainResourceType'] = $mainResourceType;
        return $this;
    }

    /**
    * Gets mainResourceSpecCode
    *  主资源规格编码
    *
    * @return string|null
    */
    public function getMainResourceSpecCode()
    {
        return $this->container['mainResourceSpecCode'];
    }

    /**
    * Sets mainResourceSpecCode
    *
    * @param string|null $mainResourceSpecCode 主资源规格编码
    *
    * @return $this
    */
    public function setMainResourceSpecCode($mainResourceSpecCode)
    {
        $this->container['mainResourceSpecCode'] = $mainResourceSpecCode;
        return $this;
    }

    /**
    * Gets mainResourceProductId
    *  主资源产品id
    *
    * @return string|null
    */
    public function getMainResourceProductId()
    {
        return $this->container['mainResourceProductId'];
    }

    /**
    * Sets mainResourceProductId
    *
    * @param string|null $mainResourceProductId 主资源产品id
    *
    * @return $this
    */
    public function setMainResourceProductId($mainResourceProductId)
    {
        $this->container['mainResourceProductId'] = $mainResourceProductId;
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

