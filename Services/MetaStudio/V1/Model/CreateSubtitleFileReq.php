<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubtitleFileReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubtitleFileReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptId  剧本ID。
    * sequenceNo  剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptId' => 'string',
            'sequenceNo' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptId  剧本ID。
    * sequenceNo  剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptId' => null,
        'sequenceNo' => 'int32'
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
    * scriptId  剧本ID。
    * sequenceNo  剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptId' => 'script_id',
            'sequenceNo' => 'sequence_no'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptId  剧本ID。
    * sequenceNo  剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptId' => 'setScriptId',
            'sequenceNo' => 'setSequenceNo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptId  剧本ID。
    * sequenceNo  剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptId' => 'getScriptId',
            'sequenceNo' => 'getSequenceNo'
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
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be bigger than or equal to 0.";
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
    * Gets scriptId
    *  剧本ID。
    *
    * @return string|null
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string|null $scriptId 剧本ID。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets sequenceNo
    *  剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @return int|null
    */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
    * Sets sequenceNo
    *
    * @param int|null $sequenceNo 剧本序号。  > * 剧本序号不填生成所有场景的字幕；如果需要生成单场景的字幕，需要填剧本序号。
    *
    * @return $this
    */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;
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

