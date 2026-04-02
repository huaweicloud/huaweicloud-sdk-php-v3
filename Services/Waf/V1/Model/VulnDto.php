<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulnDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulnDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulnerabilityId  漏洞编号
    * description  漏洞描述
    * ruleIds  可防护的规则ID列表
    * createTime  漏洞情报创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulnerabilityId' => 'string',
            'description' => 'string',
            'ruleIds' => 'string[]',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulnerabilityId  漏洞编号
    * description  漏洞描述
    * ruleIds  可防护的规则ID列表
    * createTime  漏洞情报创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulnerabilityId' => null,
        'description' => null,
        'ruleIds' => null,
        'createTime' => 'int64'
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
    * vulnerabilityId  漏洞编号
    * description  漏洞描述
    * ruleIds  可防护的规则ID列表
    * createTime  漏洞情报创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulnerabilityId' => 'vulnerability_id',
            'description' => 'description',
            'ruleIds' => 'rule_ids',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulnerabilityId  漏洞编号
    * description  漏洞描述
    * ruleIds  可防护的规则ID列表
    * createTime  漏洞情报创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'vulnerabilityId' => 'setVulnerabilityId',
            'description' => 'setDescription',
            'ruleIds' => 'setRuleIds',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulnerabilityId  漏洞编号
    * description  漏洞描述
    * ruleIds  可防护的规则ID列表
    * createTime  漏洞情报创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'vulnerabilityId' => 'getVulnerabilityId',
            'description' => 'getDescription',
            'ruleIds' => 'getRuleIds',
            'createTime' => 'getCreateTime'
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
        $this->container['vulnerabilityId'] = isset($data['vulnerabilityId']) ? $data['vulnerabilityId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets vulnerabilityId
    *  漏洞编号
    *
    * @return string|null
    */
    public function getVulnerabilityId()
    {
        return $this->container['vulnerabilityId'];
    }

    /**
    * Sets vulnerabilityId
    *
    * @param string|null $vulnerabilityId 漏洞编号
    *
    * @return $this
    */
    public function setVulnerabilityId($vulnerabilityId)
    {
        $this->container['vulnerabilityId'] = $vulnerabilityId;
        return $this;
    }

    /**
    * Gets description
    *  漏洞描述
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
    * @param string|null $description 漏洞描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ruleIds
    *  可防护的规则ID列表
    *
    * @return string[]|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string[]|null $ruleIds 可防护的规则ID列表
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets createTime
    *  漏洞情报创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 漏洞情报创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

