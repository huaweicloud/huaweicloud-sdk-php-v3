<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackSubItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackSubItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    * num  该子类型命中次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    * num  该子类型命中次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'num' => 'int64'
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
    * key  子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    * num  该子类型命中次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    * num  该子类型命中次数
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    * num  该子类型命中次数
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'num' => 'getNum'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['num'] === null) {
            $invalidProperties[] = "'num' can't be null";
        }
            if (($this->container['num'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'num', must be smaller than or equal to 9999999999.";
            }
            if (($this->container['num'] < 0)) {
                $invalidProperties[] = "invalid value for 'num', must be bigger than or equal to 0.";
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
    * Gets key
    *  子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 子类型标识： 合规检测子类型：politics_matched, violent_matched, illegal_matched, hatespeech_matched, privatesensitive_matched, religion_matched, other_matched 注入检测子类型：goal_hijacking_matched, prompt_leaking_matched, role_play_instruction_matched, unsafe_instruction_topic_matched, inquiry_with_unsafe_opinion_matched, reverse_exposure_matched, multi_step_instruction_matched, context_task_matched, opposition_response_matched, virtual_conversation_matched, do_anything_now_matched, code_injection_matched
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets num
    *  该子类型命中次数
    *
    * @return int
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int $num 该子类型命中次数
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
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

