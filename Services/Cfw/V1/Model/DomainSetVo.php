<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainSetVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainSetVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setId  域名组id
    * name  域名组名称
    * description  描述
    * refCount  引用次数
    * domainSetType  域名组类型，0表示URL过滤，1表示地址解析
    * configStatus  配置状态
    * message  异常信息
    * rules  使用规则id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'refCount' => 'int',
            'domainSetType' => 'int',
            'configStatus' => 'int',
            'message' => 'string',
            'rules' => '\HuaweiCloud\SDK\Cfw\V1\Model\UseRuleVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setId  域名组id
    * name  域名组名称
    * description  描述
    * refCount  引用次数
    * domainSetType  域名组类型，0表示URL过滤，1表示地址解析
    * configStatus  配置状态
    * message  异常信息
    * rules  使用规则id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setId' => null,
        'name' => null,
        'description' => null,
        'refCount' => 'int32',
        'domainSetType' => 'int32',
        'configStatus' => 'int32',
        'message' => null,
        'rules' => null
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
    * setId  域名组id
    * name  域名组名称
    * description  描述
    * refCount  引用次数
    * domainSetType  域名组类型，0表示URL过滤，1表示地址解析
    * configStatus  配置状态
    * message  异常信息
    * rules  使用规则id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setId' => 'set_id',
            'name' => 'name',
            'description' => 'description',
            'refCount' => 'ref_count',
            'domainSetType' => 'domain_set_type',
            'configStatus' => 'config_status',
            'message' => 'message',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setId  域名组id
    * name  域名组名称
    * description  描述
    * refCount  引用次数
    * domainSetType  域名组类型，0表示URL过滤，1表示地址解析
    * configStatus  配置状态
    * message  异常信息
    * rules  使用规则id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'setId' => 'setSetId',
            'name' => 'setName',
            'description' => 'setDescription',
            'refCount' => 'setRefCount',
            'domainSetType' => 'setDomainSetType',
            'configStatus' => 'setConfigStatus',
            'message' => 'setMessage',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setId  域名组id
    * name  域名组名称
    * description  描述
    * refCount  引用次数
    * domainSetType  域名组类型，0表示URL过滤，1表示地址解析
    * configStatus  配置状态
    * message  异常信息
    * rules  使用规则id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'setId' => 'getSetId',
            'name' => 'getName',
            'description' => 'getDescription',
            'refCount' => 'getRefCount',
            'domainSetType' => 'getDomainSetType',
            'configStatus' => 'getConfigStatus',
            'message' => 'getMessage',
            'rules' => 'getRules'
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
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['refCount'] = isset($data['refCount']) ? $data['refCount'] : null;
        $this->container['domainSetType'] = isset($data['domainSetType']) ? $data['domainSetType'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
    * Gets setId
    *  域名组id
    *
    * @return string|null
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param string|null $setId 域名组id
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
        return $this;
    }

    /**
    * Gets name
    *  域名组名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 域名组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets refCount
    *  引用次数
    *
    * @return int|null
    */
    public function getRefCount()
    {
        return $this->container['refCount'];
    }

    /**
    * Sets refCount
    *
    * @param int|null $refCount 引用次数
    *
    * @return $this
    */
    public function setRefCount($refCount)
    {
        $this->container['refCount'] = $refCount;
        return $this;
    }

    /**
    * Gets domainSetType
    *  域名组类型，0表示URL过滤，1表示地址解析
    *
    * @return int|null
    */
    public function getDomainSetType()
    {
        return $this->container['domainSetType'];
    }

    /**
    * Sets domainSetType
    *
    * @param int|null $domainSetType 域名组类型，0表示URL过滤，1表示地址解析
    *
    * @return $this
    */
    public function setDomainSetType($domainSetType)
    {
        $this->container['domainSetType'] = $domainSetType;
        return $this;
    }

    /**
    * Gets configStatus
    *  配置状态
    *
    * @return int|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param int|null $configStatus 配置状态
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets message
    *  异常信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 异常信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets rules
    *  使用规则id列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\UseRuleVO[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\UseRuleVO[]|null $rules 使用规则id列表
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

