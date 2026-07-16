<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDomainAllResourceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDomainAllResourceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    * resourceType  **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
    * regionId  **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    * limit  **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    * marker  **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'resourceType' => 'string',
            'regionId' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    * resourceType  **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
    * regionId  **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    * limit  **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    * marker  **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'resourceType' => null,
        'regionId' => null,
        'limit' => 'int32',
        'marker' => null
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
    * domainId  **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    * resourceType  **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
    * regionId  **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    * limit  **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    * marker  **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'resourceType' => 'resource_type',
            'regionId' => 'region_id',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    * resourceType  **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
    * regionId  **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    * limit  **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    * marker  **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'resourceType' => 'setResourceType',
            'regionId' => 'setRegionId',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    * resourceType  **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
    * regionId  **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    * limit  **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    * marker  **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'resourceType' => 'getResourceType',
            'regionId' => 'getRegionId',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
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
    * Gets domainId
    *  **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId **参数解释**： 账户ID。 通过调用IAM服务[查询IAM用户详情]接口获取 **约束限制**： 不涉及 **取值范围**： 以IAM服务[查询IAM用户详情]接口值为准。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets resourceType
    *  **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
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
    * @param string $resourceType **参数解释**：  资源类型 **约束限制**： 不涉及 **取值范围**：  - cloudservers: 审计  - dbEncrypt: 加密  - dbOm: 运维 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId **参数解释**：  以当前region id为准 **约束限制**： 不涉及 **取值范围**： 以当前region id为准 **默认取值**： 以当前region id为准
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：  每页条数 **约束限制**：  正整数 **取值范围**：  大于0，小于等于100 **默认取值**：  100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释**：  分页下一页标志位 **约束限制**：  以列表查询接口返回为准 **取值范围**：  不涉及 **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

