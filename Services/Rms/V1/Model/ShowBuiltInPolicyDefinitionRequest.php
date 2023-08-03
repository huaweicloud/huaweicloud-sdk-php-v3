<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBuiltInPolicyDefinitionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBuiltInPolicyDefinitionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyDefinitionId  策略ID
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyDefinitionId' => 'string',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyDefinitionId  策略ID
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyDefinitionId' => null,
        'xLanguage' => null
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
    * policyDefinitionId  策略ID
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyDefinitionId' => 'policy_definition_id',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyDefinitionId  策略ID
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $setters = [
            'policyDefinitionId' => 'setPolicyDefinitionId',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyDefinitionId  策略ID
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $getters = [
            'policyDefinitionId' => 'getPolicyDefinitionId',
            'xLanguage' => 'getXLanguage'
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
        $this->container['policyDefinitionId'] = isset($data['policyDefinitionId']) ? $data['policyDefinitionId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyDefinitionId'] === null) {
            $invalidProperties[] = "'policyDefinitionId' can't be null";
        }
            if ((mb_strlen($this->container['policyDefinitionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'policyDefinitionId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['policyDefinitionId'])) {
                $invalidProperties[] = "invalid value for 'policyDefinitionId', must be conform to the pattern /[\\w-]+/.";
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
    * Gets policyDefinitionId
    *  策略ID
    *
    * @return string
    */
    public function getPolicyDefinitionId()
    {
        return $this->container['policyDefinitionId'];
    }

    /**
    * Sets policyDefinitionId
    *
    * @param string $policyDefinitionId 策略ID
    *
    * @return $this
    */
    public function setPolicyDefinitionId($policyDefinitionId)
    {
        $this->container['policyDefinitionId'] = $policyDefinitionId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

