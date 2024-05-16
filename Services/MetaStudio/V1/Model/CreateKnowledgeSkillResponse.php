<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKnowledgeSkillResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKnowledgeSkillResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * skillId  技能ID。
    * identify  技能标识。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'skillId' => 'string',
            'identify' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * skillId  技能ID。
    * identify  技能标识。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'skillId' => null,
        'identify' => null,
        'xRequestId' => null
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
    * skillId  技能ID。
    * identify  技能标识。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'skillId' => 'skill_id',
            'identify' => 'identify',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * skillId  技能ID。
    * identify  技能标识。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'skillId' => 'setSkillId',
            'identify' => 'setIdentify',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * skillId  技能ID。
    * identify  技能标识。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'skillId' => 'getSkillId',
            'identify' => 'getIdentify',
            'xRequestId' => 'getXRequestId'
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
        $this->container['skillId'] = isset($data['skillId']) ? $data['skillId'] : null;
        $this->container['identify'] = isset($data['identify']) ? $data['identify'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['skillId']) && (mb_strlen($this->container['skillId']) > 64)) {
                $invalidProperties[] = "invalid value for 'skillId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['skillId']) && (mb_strlen($this->container['skillId']) < 1)) {
                $invalidProperties[] = "invalid value for 'skillId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identify']) && (mb_strlen($this->container['identify']) > 15)) {
                $invalidProperties[] = "invalid value for 'identify', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['identify']) && (mb_strlen($this->container['identify']) < 1)) {
                $invalidProperties[] = "invalid value for 'identify', the character length must be bigger than or equal to 1.";
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
    * Gets skillId
    *  技能ID。
    *
    * @return string|null
    */
    public function getSkillId()
    {
        return $this->container['skillId'];
    }

    /**
    * Sets skillId
    *
    * @param string|null $skillId 技能ID。
    *
    * @return $this
    */
    public function setSkillId($skillId)
    {
        $this->container['skillId'] = $skillId;
        return $this;
    }

    /**
    * Gets identify
    *  技能标识。
    *
    * @return string|null
    */
    public function getIdentify()
    {
        return $this->container['identify'];
    }

    /**
    * Sets identify
    *
    * @param string|null $identify 技能标识。
    *
    * @return $this
    */
    public function setIdentify($identify)
    {
        $this->container['identify'] = $identify;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

