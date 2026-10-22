<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBotMTenantPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBotMTenantPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userTag  userTag
    * scenarioAnnotations  场景标注（登录/注册场景接口的语义标注列表）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userTag' => '\HuaweiCloud\SDK\Waf\V1\Model\UserTagDTO',
            'scenarioAnnotations' => '\HuaweiCloud\SDK\Waf\V1\Model\ScenarioAnnotationDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userTag  userTag
    * scenarioAnnotations  场景标注（登录/注册场景接口的语义标注列表）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userTag' => null,
        'scenarioAnnotations' => null
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
    * userTag  userTag
    * scenarioAnnotations  场景标注（登录/注册场景接口的语义标注列表）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userTag' => 'user_tag',
            'scenarioAnnotations' => 'scenario_annotations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userTag  userTag
    * scenarioAnnotations  场景标注（登录/注册场景接口的语义标注列表）
    *
    * @var string[]
    */
    protected static $setters = [
            'userTag' => 'setUserTag',
            'scenarioAnnotations' => 'setScenarioAnnotations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userTag  userTag
    * scenarioAnnotations  场景标注（登录/注册场景接口的语义标注列表）
    *
    * @var string[]
    */
    protected static $getters = [
            'userTag' => 'getUserTag',
            'scenarioAnnotations' => 'getScenarioAnnotations'
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
        $this->container['userTag'] = isset($data['userTag']) ? $data['userTag'] : null;
        $this->container['scenarioAnnotations'] = isset($data['scenarioAnnotations']) ? $data['scenarioAnnotations'] : null;
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
    * Gets userTag
    *  userTag
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\UserTagDTO|null
    */
    public function getUserTag()
    {
        return $this->container['userTag'];
    }

    /**
    * Sets userTag
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\UserTagDTO|null $userTag userTag
    *
    * @return $this
    */
    public function setUserTag($userTag)
    {
        $this->container['userTag'] = $userTag;
        return $this;
    }

    /**
    * Gets scenarioAnnotations
    *  场景标注（登录/注册场景接口的语义标注列表）
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ScenarioAnnotationDTO[]|null
    */
    public function getScenarioAnnotations()
    {
        return $this->container['scenarioAnnotations'];
    }

    /**
    * Sets scenarioAnnotations
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ScenarioAnnotationDTO[]|null $scenarioAnnotations 场景标注（登录/注册场景接口的语义标注列表）
    *
    * @return $this
    */
    public function setScenarioAnnotations($scenarioAnnotations)
    {
        $this->container['scenarioAnnotations'] = $scenarioAnnotations;
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

