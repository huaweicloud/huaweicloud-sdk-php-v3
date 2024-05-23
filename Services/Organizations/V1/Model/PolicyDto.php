<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  策略的文本内容。
    * policySummary  policySummary
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'policySummary' => '\HuaweiCloud\SDK\Organizations\V1\Model\PolicySummaryDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  策略的文本内容。
    * policySummary  policySummary
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'policySummary' => null
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
    * content  策略的文本内容。
    * policySummary  policySummary
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'policySummary' => 'policy_summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  策略的文本内容。
    * policySummary  policySummary
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'policySummary' => 'setPolicySummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  策略的文本内容。
    * policySummary  policySummary
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'policySummary' => 'getPolicySummary'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['policySummary'] = isset($data['policySummary']) ? $data['policySummary'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 20000)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 20000.";
            }
            if ((mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\s\\S]*$/", $this->container['content'])) {
                $invalidProperties[] = "invalid value for 'content', must be conform to the pattern /^[\\s\\S]*$/.";
            }
        if ($this->container['policySummary'] === null) {
            $invalidProperties[] = "'policySummary' can't be null";
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
    * Gets content
    *  策略的文本内容。
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 策略的文本内容。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets policySummary
    *  policySummary
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\PolicySummaryDto
    */
    public function getPolicySummary()
    {
        return $this->container['policySummary'];
    }

    /**
    * Sets policySummary
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\PolicySummaryDto $policySummary policySummary
    *
    * @return $this
    */
    public function setPolicySummary($policySummary)
    {
        $this->container['policySummary'] = $policySummary;
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

