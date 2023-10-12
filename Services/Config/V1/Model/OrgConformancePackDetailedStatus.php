<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrgConformancePackDetailedStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrgConformancePackDetailedStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  成员帐号ID。
    * conformancePackId  合规规则包ID。
    * conformancePackName  合规规则包名称。
    * state  合规规则包部署状态
    * errorMessage  部署或删除组织合规规则包错误时的错误信息
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'conformancePackId' => 'string',
            'conformancePackName' => 'string',
            'state' => 'string',
            'errorMessage' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  成员帐号ID。
    * conformancePackId  合规规则包ID。
    * conformancePackName  合规规则包名称。
    * state  合规规则包部署状态
    * errorMessage  部署或删除组织合规规则包错误时的错误信息
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'conformancePackId' => null,
        'conformancePackName' => null,
        'state' => null,
        'errorMessage' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * domainId  成员帐号ID。
    * conformancePackId  合规规则包ID。
    * conformancePackName  合规规则包名称。
    * state  合规规则包部署状态
    * errorMessage  部署或删除组织合规规则包错误时的错误信息
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'conformancePackId' => 'conformance_pack_id',
            'conformancePackName' => 'conformance_pack_name',
            'state' => 'state',
            'errorMessage' => 'error_message',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  成员帐号ID。
    * conformancePackId  合规规则包ID。
    * conformancePackName  合规规则包名称。
    * state  合规规则包部署状态
    * errorMessage  部署或删除组织合规规则包错误时的错误信息
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'conformancePackId' => 'setConformancePackId',
            'conformancePackName' => 'setConformancePackName',
            'state' => 'setState',
            'errorMessage' => 'setErrorMessage',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  成员帐号ID。
    * conformancePackId  合规规则包ID。
    * conformancePackName  合规规则包名称。
    * state  合规规则包部署状态
    * errorMessage  部署或删除组织合规规则包错误时的错误信息
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'conformancePackId' => 'getConformancePackId',
            'conformancePackName' => 'getConformancePackName',
            'state' => 'getState',
            'errorMessage' => 'getErrorMessage',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['conformancePackId'] = isset($data['conformancePackId']) ? $data['conformancePackId'] : null;
        $this->container['conformancePackName'] = isset($data['conformancePackName']) ? $data['conformancePackName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets domainId
    *  成员帐号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 成员帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets conformancePackId
    *  合规规则包ID。
    *
    * @return string|null
    */
    public function getConformancePackId()
    {
        return $this->container['conformancePackId'];
    }

    /**
    * Sets conformancePackId
    *
    * @param string|null $conformancePackId 合规规则包ID。
    *
    * @return $this
    */
    public function setConformancePackId($conformancePackId)
    {
        $this->container['conformancePackId'] = $conformancePackId;
        return $this;
    }

    /**
    * Gets conformancePackName
    *  合规规则包名称。
    *
    * @return string|null
    */
    public function getConformancePackName()
    {
        return $this->container['conformancePackName'];
    }

    /**
    * Sets conformancePackName
    *
    * @param string|null $conformancePackName 合规规则包名称。
    *
    * @return $this
    */
    public function setConformancePackName($conformancePackName)
    {
        $this->container['conformancePackName'] = $conformancePackName;
        return $this;
    }

    /**
    * Gets state
    *  合规规则包部署状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 合规规则包部署状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets errorMessage
    *  部署或删除组织合规规则包错误时的错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 部署或删除组织合规规则包错误时的错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

