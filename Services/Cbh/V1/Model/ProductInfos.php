<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  产品标识，通过订购询价接口获得。
    * cloudServiceType  云服务类型，填写“hws.service.type.cbh”。
    * resourceType  云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  产品标识，通过订购询价接口获得。
    * cloudServiceType  云服务类型，填写“hws.service.type.cbh”。
    * resourceType  云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null
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
    * productId  产品标识，通过订购询价接口获得。
    * cloudServiceType  云服务类型，填写“hws.service.type.cbh”。
    * resourceType  云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  产品标识，通过订购询价接口获得。
    * cloudServiceType  云服务类型，填写“hws.service.type.cbh”。
    * resourceType  云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  产品标识，通过订购询价接口获得。
    * cloudServiceType  云服务类型，填写“hws.service.type.cbh”。
    * resourceType  云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    * resourceSpecCode  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode'
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
            if ((mb_strlen($this->container['productId']) > 36)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['productId']) < 0)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
            if ((mb_strlen($this->container['cloudServiceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cloudServiceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
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
    * Gets productId
    *  产品标识，通过订购询价接口获得。
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId 产品标识，通过订购询价接口获得。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型，填写“hws.service.type.cbh”。
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType 云服务类型，填写“hws.service.type.cbh”。
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 云堡垒机资源类型，填写“hws.resource.type.cbh.ins”。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
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

