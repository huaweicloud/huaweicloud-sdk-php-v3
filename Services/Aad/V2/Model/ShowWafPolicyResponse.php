<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWafPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWafPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名(包含端口)
    * overseasType  0-中国大陆，1-中国大陆外
    * options  options
    * level  智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    * mode  智能CC模式：0-预警，1-防护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'overseasType' => 'int',
            'options' => '\HuaweiCloud\SDK\Aad\V2\Model\WafPolicyOptions',
            'level' => 'int',
            'mode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名(包含端口)
    * overseasType  0-中国大陆，1-中国大陆外
    * options  options
    * level  智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    * mode  智能CC模式：0-预警，1-防护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'overseasType' => 'int32',
        'options' => null,
        'level' => 'int32',
        'mode' => 'int32'
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
    * domainName  域名(包含端口)
    * overseasType  0-中国大陆，1-中国大陆外
    * options  options
    * level  智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    * mode  智能CC模式：0-预警，1-防护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'overseasType' => 'overseas_type',
            'options' => 'options',
            'level' => 'level',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名(包含端口)
    * overseasType  0-中国大陆，1-中国大陆外
    * options  options
    * level  智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    * mode  智能CC模式：0-预警，1-防护
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'overseasType' => 'setOverseasType',
            'options' => 'setOptions',
            'level' => 'setLevel',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名(包含端口)
    * overseasType  0-中国大陆，1-中国大陆外
    * options  options
    * level  智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    * mode  智能CC模式：0-预警，1-防护
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'overseasType' => 'getOverseasType',
            'options' => 'getOptions',
            'level' => 'getLevel',
            'mode' => 'getMode'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
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
    * Gets domainName
    *  域名(包含端口)
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名(包含端口)
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets overseasType
    *  0-中国大陆，1-中国大陆外
    *
    * @return int|null
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param int|null $overseasType 0-中国大陆，1-中国大陆外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
        return $this;
    }

    /**
    * Gets options
    *  options
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\WafPolicyOptions|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\WafPolicyOptions|null $options options
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets level
    *  智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 智能CC防护等级：[0-宽松,1- 正常, 2- 严格]
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets mode
    *  智能CC模式：0-预警，1-防护
    *
    * @return int|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param int|null $mode 智能CC模式：0-预警，1-防护
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

