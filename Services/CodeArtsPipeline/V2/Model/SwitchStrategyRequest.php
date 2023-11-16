<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchStrategyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchStrategyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleSetId  规则集ID
    * domainId  租户ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleSetId' => 'string',
            'domainId' => 'string',
            'body' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateRuleSetStatusReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleSetId  规则集ID
    * domainId  租户ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleSetId' => null,
        'domainId' => null,
        'body' => null
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
    * ruleSetId  规则集ID
    * domainId  租户ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleSetId' => 'rule_set_id',
            'domainId' => 'domain_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleSetId  规则集ID
    * domainId  租户ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleSetId' => 'setRuleSetId',
            'domainId' => 'setDomainId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleSetId  规则集ID
    * domainId  租户ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleSetId' => 'getRuleSetId',
            'domainId' => 'getDomainId',
            'body' => 'getBody'
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
        $this->container['ruleSetId'] = isset($data['ruleSetId']) ? $data['ruleSetId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleSetId'] === null) {
            $invalidProperties[] = "'ruleSetId' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
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
    * Gets ruleSetId
    *  规则集ID
    *
    * @return string
    */
    public function getRuleSetId()
    {
        return $this->container['ruleSetId'];
    }

    /**
    * Sets ruleSetId
    *
    * @param string $ruleSetId 规则集ID
    *
    * @return $this
    */
    public function setRuleSetId($ruleSetId)
    {
        $this->container['ruleSetId'] = $ruleSetId;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
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
    * @param string $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateRuleSetStatusReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\UpdateRuleSetStatusReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

