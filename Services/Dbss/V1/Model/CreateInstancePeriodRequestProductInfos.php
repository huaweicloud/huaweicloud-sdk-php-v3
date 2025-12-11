<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstancePeriodRequestProductInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstancePeriodRequest_product_infos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  产品ID
    * cloudServiceType  服务类型： - hws.service.type.dbss: 数据库审计
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    * resourceSpecCode  资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
    * productSpecDesc  产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'productSpecDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  产品ID
    * cloudServiceType  服务类型： - hws.service.type.dbss: 数据库审计
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    * resourceSpecCode  资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
    * productSpecDesc  产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'productSpecDesc' => null
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
    * productId  产品ID
    * cloudServiceType  服务类型： - hws.service.type.dbss: 数据库审计
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    * resourceSpecCode  资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
    * productSpecDesc  产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'productSpecDesc' => 'product_spec_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  产品ID
    * cloudServiceType  服务类型： - hws.service.type.dbss: 数据库审计
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    * resourceSpecCode  资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
    * productSpecDesc  产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'productSpecDesc' => 'setProductSpecDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  产品ID
    * cloudServiceType  服务类型： - hws.service.type.dbss: 数据库审计
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    * resourceSpecCode  资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
    * productSpecDesc  产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'productSpecDesc' => 'getProductSpecDesc'
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
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
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
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
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
    *  产品ID
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
    * @param string $productId 产品ID
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
    *  服务类型： - hws.service.type.dbss: 数据库审计
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
    * @param string $cloudServiceType 服务类型： - hws.service.type.dbss: 数据库审计
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
    *  资源类型: - hws.resource.type.dbss：数据库审计
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
    * @param string $resourceType 资源类型: - hws.resource.type.dbss：数据库审计
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
    *  资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
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
    * @param string $resourceSpecCode 资源规格： - dbss.bypassaudit.low：基础版 - dbss.bypassaudit.medium：高级版 - dbss.bypassaudit.high：专业版
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @return string|null
    */
    public function getProductSpecDesc()
    {
        return $this->container['productSpecDesc'];
    }

    /**
    * Sets productSpecDesc
    *
    * @param string|null $productSpecDesc 产品规格描述。json字符串格式 ：{\"specDesc\":{\"zh-cn\":{\"key1\":\"value1\"},\"en-us\":{\"key1\":\"value1\"}}}
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
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

